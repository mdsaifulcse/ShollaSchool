<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public function classOfSchool(){
        return $this->belongsTo(ClassOfSchool::class,'class_id','id');
    }

    public function sectionOfClass(){
        return $this->belongsTo(ClassSection::class,'section_id','id');
    }
    public function teacher(){
        return $this->belongsTo(TeacherPersonal::class,'teacher_id','id');
    }


}
