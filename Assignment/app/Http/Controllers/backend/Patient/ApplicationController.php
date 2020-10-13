<?php

namespace App\Http\Controllers\backend\Patient;

use App\Http\Controllers\Controller;
use App\Message;
use App\Model\Appointment;
use App\Model\Report;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index (){
        $users = User::where('user_type','patient')->where('id',Auth::user()->id)->firstOrFail();
        return view('frontend.system.patient.dashboard',compact('users'));
    }
    public function editProfile ($id){
        $users = User::where('user_type','patient')->where('id',$id)->firstOrFail();

        return view('frontend.system.patient.edit_profile',compact('users'));
    }
    public function update_profile(Request $request,$id){
        $this->validate($request,[
            'name' => 'required|min:3',
            'contact_number'=> 'required|digits:10',
            'address' => 'required|min:3',
            'email' =>'required|email',
            'gender' => 'required',
            'blood_group' => 'required',
        ]);
        $users = User::where('user_type','patient')->findOrFail($id);
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
    public function report(){
        $users = User::where('user_type','patient')->where('id',Auth::user()->id)->firstOrFail();
        return view('frontend.system.patient.report',compact('users'));
    }
    public function appointment(){
        $users = User::where('user_type','patient')->where('id',Auth::user()->id)->firstOrFail();
        $appointments = Appointment::where('user_id',$users->id)->get();
        return view('frontend.system.patient.appointment',compact('users','appointments'));
    }
    public function new_appointment_list (){
        $users = User::where('user_type','patient')->where('id',Auth::user()->id)->firstOrFail();
        $appointments = Appointment::where('user_id',$users->id)->where('status','inactive')->get();
        return view('frontend.system.patient.new_appointment_list',compact('users','appointments'));
    }
    public function appointment_wise_report(){
        $users = User::where('user_type','patient')->where('id',Auth::user()->id)->firstOrFail();
        $appointments = Appointment::where('user_id',$users->id)->get();
        return view('frontend.system.patient.appointment_wise_report',compact('users','appointments'));
    }
    public function appointment_wise_report_list ($id){
        $users = User::where('user_type','patient')->where('id',Auth::user()->id)->firstOrFail();
        $appointments = Appointment::findOrFail($id);
        $reports = Report::where('appointment_id',$appointments->id)->get();
        return view('frontend.system.patient.appointment_wise_report_list',compact('appointments','reports','users'));
    }
    public function make_an_appointment(){
        $users = User::where('user_type','patient')->where('id',Auth::user()->id)->firstOrFail();
        return view('frontend.system.patient.make_appointment',compact('users'));
    }
    public function make_an_appointment_store(Request $request){
        $this->validate($request,[
            'name' => 'required|min:3',
            'contact_number'=> 'required|digits:10',
            'address' => 'required|min:3',
            'gender' => 'required',
            'email' => 'required',
            'blood_group' => 'required',
            'appointments_date' => 'required',
            'appointments_for' => 'required',
            'message' => 'required',
        ]);
        $users = User::where('user_type','patient')->where('id',Auth::user()->id)->firstOrFail();
        $data = new Appointment();
        $data->user_id = $users->id;
        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->address = $request->address;
        $data->contact_number = $request->contact_number;
        $data->email = $request->email;
        $data->blood_group = $request->blood_group;
        $data->appointments_date = $request->appointments_date;
        $data->appointments_for = $request->appointments_for;
        $data->status = $request->status;
        $data->message = $request->message;
        $data->status = 'inactive';
        $data->save();
        return redirect('patient/new-appointment-list')->with('success','Successfully Make your Appointment');
    }
    public function chat_with_hospital(){
        $title = 'Message';
        $users = User::where('user_type','patient')->where('id',Auth::user()->id)->firstOrFail();
        $admin_wise_chat = Message::where('user_id',$users->id)->orderBy('id')->get();
        return view('frontend.system.patient.msg',compact('title','users','admin_wise_chat'));
    }
    public function message_chat_store (Request $request){
        $this->validate($request,[
            'message' => 'required',
        ]);
        $chat = new Message();
        $users = User::where('user_type','patient')->where('id',Auth::user()->id)->firstOrFail();
        $chat->user_id = $users->id;
        $chat->user_type = 'patient';
        $chat->status = 'active';
        $chat->message = $request->message;
        $chat->save();
        return redirect()->back()->with('success','Successfully Send Message');
    }
}
