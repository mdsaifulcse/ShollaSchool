<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassOfSchool extends Model
{
    protected $table='class_of_schools';
    protected $fillable=['class_of','class_name','details','status'];

}
