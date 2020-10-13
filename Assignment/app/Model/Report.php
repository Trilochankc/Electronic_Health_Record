<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function reportName(){
        return $this->belongsTo(Appointment::class,'appointment_id');
    }
}
