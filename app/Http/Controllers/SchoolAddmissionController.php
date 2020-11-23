<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolAddmissionController extends Controller
{
    public function schoolAddmission(){
        return view('front.school-addmission.school-addmission');
    }
}
