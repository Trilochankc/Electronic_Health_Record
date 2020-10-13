<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function reportName(){
        return $this->hasMany(Report::class,'appointment_id');
    }

    public function patient_name(){
     return $this->belongsTo(User::class,'user_id');
    }


}
