<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeritoriousStudent extends Model
{
    public function previousClass(){
        return $this->belongsTo(ClassOfSchool::class,'previous_class_id','id');
    }

    public function runningClass(){
        return $this->belongsTo(ClassOfSchool::class,'running_class_id','id');
    }
}
