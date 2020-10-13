<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin(Request $request){
        $this->validate(request(),[
            'email'=>'required',
            'password'=>'required'
        ]);
        $field = filter_var(request('email'),FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        if (Auth::attempt([$field => request('email'), 'password' => request('password')])) {
            if (Auth::check()) {
                if (Auth::user()->user_type == 'admin') {
                    return redirect('admin');
                }
                if (Auth::user()->user_type == 'staff') {
                    return redirect('staff');
                }
                if (Auth::user()->user_type == 'doctors') {
                    return redirect('doctors');
                }
                if (Auth::user()->user_type == 'patient') {
                    return redirect('patient');
                }
                if (Auth::user()->user_type == 'guest') {
                    return redirect('guest');
                }
            }
        }
        return redirect('login')->withErrors(['email'=>'Invalid credentail'])->withInput(request()->only('email'));
    }

    public function getRegister(){
        return view('auth.register');
    }

    public function postRegister (Request $request){
        $this->validate($request,[
            'email' =>'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'name' => 'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->user_type = 'patient';
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('login')->with('success','Congratulations you are registered successfully ! . Login to view your reports');
    }

}
