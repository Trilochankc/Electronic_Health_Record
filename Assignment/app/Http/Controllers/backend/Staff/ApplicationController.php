<?php

namespace App\Http\Controllers\backend\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index (){


        return view('frontend.system.patient.index');
    }
}
