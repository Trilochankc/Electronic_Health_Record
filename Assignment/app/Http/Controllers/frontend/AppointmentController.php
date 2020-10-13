<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Model\Appointment;
use App\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointment_store(Request $request){
        $this->validate(request(),[
            'name' => 'required|min:3',
            'contact_number'=> 'required|digits:10',
            'address' => 'required|min:3',
            'gender' => 'required',
            'email' => 'required',
            'blood_group' => 'required',
            'appointments_date' => 'required',
            'depart' => 'required',
            'message' => 'required',
        ]);
           $data = new Appointment();
           $data->user_id = 4;
           $data->name = $request->name;
           $data->email = $request->email;
           $data->address = $request->address;
           $data->contact_number = $request->contact_number;
           $data->gender = $request->gender;
           $data->blood_group = $request->blood_group;
           $data->depart = $request->depart;
           $data->appointments_date = $request->appointments_date;
           $data->message = $request->message;
           $data->status = 'inactive';
           $data->save();
           return redirect()->back()->with('success','Successfully Submit Your Appointment !!');
       }

}
