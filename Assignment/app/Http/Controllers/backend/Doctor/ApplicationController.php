<?php

namespace App\Http\Controllers\backend\Doctor;

use App\Http\Controllers\Controller;
use App\Model\Appointment;
use App\Model\Report;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index(){
        $users = User::where('status','active')->where('user_type','doctors')->where('id',Auth::user()->id)->firstOrFail();
        return view('frontend.system.doctor.dashboard',compact('users'));
    }
    public function editProfile ($id){
        $users = User::where('user_type','doctors')->where('id',$id)->firstOrFail();

        return view('frontend.system.doctor.edit_profile',compact('users'));
    }
    public function update_profile(Request $request,$id){
        $this->validate($request,[
            'name' => 'required|min:3',
            'contact_number'=> 'required|digits:10',
            'address' => 'required|min:3',
            'email' =>'required|email|unique:users,email',
            'gender' => 'required',
            'blood_group' => 'required',
        ]);
        $users = User::where('user_type','doctors')->findOrFail($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->gender = $request->gender;
        $users->address = $request->address;
        $users->contact_number = $request->contact_number;
        $users->blood_group = $request->blood_group;
        if ($request->hasFile('profile')){
            if (is_file(public_path('uploads/profile/').'/'.$users->profile) && file_exists(public_path('uploads/profile/').'/'.$users->profile)){
                unlink(public_path('uploads/profile/').'/'.$users->profile);
            }
            $filename = time().'.'.request()->file('profile')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;
            request()->file('profile')->move('public/uploads/profile/',$filename);
            $users->profile =$filename;
        }
        $users->update();
        return redirect()->back()->with('success','Profile Update Successfully');
    }
    public function patient_list(){
        $users = User::where('status','active')->where('user_type','doctors')->where('id',Auth::user()->id)->firstOrFail();
        $patients_appointment = Appointment::with('reportName')->where('status','active')->get();
        return view('frontend.system.doctor.patient_list',compact('users','patients_appointment'));
    }
    public function patient_report($id){
        $users = User::where('status','active')->where('user_type','doctors')->where('id',Auth::user()->id)->firstOrFail();
        $patients = Appointment::findOrFail($id);
        $patients_reports = Report::where('appointment_id',$patients->id)->get();
        return view('frontend.system.doctor.patient_report',compact('users','patients','patients_reports'));
    }
    public function patient_report_save(Request $request,$id){
        $patients = Appointment::findOrFail($id);
        $data = new Report();
        $data->appointment_id = $patients->id;
        $data->report_title = $request->report_title;
        $data->Details = $request->Details;
        $data->status = 'active';
        if ($request->hasFile('report')){
            $filename = time().'.'.request()->file('report')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;
            request()->file('report')->move('public/uploads/report/',$filename);
            $data->report =$filename;
        }
        $data->save();
        return redirect()->back();
    }
}
