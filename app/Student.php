<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function classOfSchool(){
        return $this->belongsTo(ClassOfSchool::class,'class_id','id');
    }

    public function sectionOfClass(){
        return $this->belongsTo(ClassSection::class,'section_id','id');
    }
}
