<?php

namespace App\Http\Controllers\backend\Admin;

use App\Http\Controllers\Controller;
use App\Message;
use App\Model\Appointment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index(){
        $users = User::where('status','active')->where('user_type','admin')->where('id',Auth::user()->id)->firstOrFail();
        $appointments = Appointment::where('status','inactive')->get();
        $title = 'WelCome Admin Panel';
        return view('backend.admin.dashboard',compact('title','users','appointments'));
    }
    public function active_appointments(){
        $title = 'WelCome Admin Panel';
        $appointments = Appointment::where('status','active')->get();
        return view('backend.admin.pages.appointments',compact('title','appointments'));
    }
    public function user_list(){
        $title = 'User List Admin Panel';
        $users = User::all();
        return view('backend.admin.pages.user_list',compact('title','users'));
    }
    public function inactive_appointments(){
        $title = 'WelCome Admin Panel';
        $appointments = Appointment::with('patient_name')->where('status','inactive')->orderBy('id','desc')->get();
        return view('backend.admin.pages.appointments',compact('title','appointments'));
    }
    public function edit_appointments($id){
        $title = 'WelCome Admin Panel';
        $appointments = Appointment::findOrFail($id);
        return view('backend.admin.pages.edit_appointments',compact('title','appointments'));
    }

    public function update_appointments (Request $request,$id){
        $this->validate(request(),[
            'name' => 'required|min:3',
            'contact_number'=> 'required|digits:10',
            'address' => 'required|min:3',
            'gender' => 'required',
            'email' => 'required',
            'blood_group' => 'required',
            'appointments_for' => 'required',
            'appointments_date' => 'required',
            'depart' => 'required',
            'message' => 'required',
        ]);
        $appointment = Appointment::findOrFail($id);
        $appointment->name = $request->name;
        $appointment->address = $request->address;
        $appointment->contact_number = $request->contact_number;
        $appointment->email = $request->email;
        $appointment->blood_group = $request->blood_group;
        $appointment->appointments_date = $request->appointments_date;
        $appointment->appointments_for = $request->appointments_for;
        $appointment->status = $request->status;
        $appointment->depart = $request->depart;
        $appointment->message = $request->message;
        $appointment->save();
        return redirect('admin/inactive-appointments')->with('success','Successfully Update');
    }

    public function chat_with_patient(){
        $title = 'Chat With Patient';
        $users = User::all();
        return view('backend.admin.pages.chat_with_patient_list',compact('title','users'));
    }
    public function message_chat($id){
        $title = 'Message';
        $message = User::findOrFail($id);
        $admin_wise_chat = Message::where('user_id',$message->id)->orderBy('id')->get();
        return view('backend.admin.pages.message',compact('title','message','admin_wise_chat'));
    }
    public function message_chat_store (Request $request,$id){
        $chat = new Message();
        $chat->user_id = $id;
        $chat->user_type = 'admin';
        $chat->status = 'active';
        $chat->message = $request->message;
        $chat->save();
        return redirect()->back()->with('success','Successfully Send Message');
    }
}
