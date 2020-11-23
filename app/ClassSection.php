<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassSection extends Model
{
    protected $table='class_sections';
    protected $fillable=['class_of_school_id','section_name','status'];

    public function classOfSection(){
        return $this->belongsTo(ClassOfSchool::class,'class_of_school_id','id');
    }
}
