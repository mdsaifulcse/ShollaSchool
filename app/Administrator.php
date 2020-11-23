<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    public function administratorDesignation(){
        return $this->belongsTo(Designation::class,'designation_id','id');
    }
}
