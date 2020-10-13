<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = 'Home';
        return view('frontend.welcome',compact('title'));
    }
    public function appointment(){
        $title = "Book an Appointment";
        return view('frontend.pages.appointment',compact('title'));
    }
    public function about_us(){
        $title = "About Us";
        return view('frontend.pages.about_us',compact('title'));
    }
    public function doctors(){
        $title = "Doctors";
        return view('frontend.pages.doctors',compact('title'));
    }
    public function news(){
        $title = "News";
        return view('frontend.pages.news',compact('title'));
    }
}
