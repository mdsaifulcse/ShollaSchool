<?php

namespace App\Http\Controllers;

use App\About_school;
use App\MeritoriousStudent;
use App\Notice;
use App\Sliders;
use App\Speech;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use Image;

class ShollaSchoolController extends Controller
{
    public function index(){
        $latestNotitices=Notice::where('published_status',1)->orderBy('id','desc')->take(3)->get();
        $firstPlaceStudents=MeritoriousStudent::orderBy('id','desc')->where('published_status',1)->where(["result_year"=>date('Y'),"result_place"=>"First"])->get();
        $sliders=Sliders::where('published_status',1)->take(6)->get();
        $aboutSchoolInfo=About_school::all()->first();
        $presidentSpeech=Speech::select('person_image')->where('speech_person','president-speech')->first();
        $principalSpeech=Speech::select('person_image')->where('speech_person','principal-speech')->first();
        return view('front.home.home-content',compact('firstPlaceStudents','sliders','aboutSchoolInfo','latestNotitices','presidentSpeech','principalSpeech'));
    }

    public function goToBack(){
        //return redirect()->back();
    }

    public function moreAboutSchool(){
        $aboutSchoolInfo=About_school::all()->first();
        return view('front.about-school.more-about-school',compact('aboutSchoolInfo'));
    }
    
    
    
     //Clear Cache facade value:
    public function clearCache(){
        Artisan::call('cache:clear');
        return redirect('/')->with('success','Successfully Clear Cache facade value.');
    }

    //Clear View cache:
    public function viewClear(){
        Artisan::call('view:clear');
        return redirect('/')->with('success','Successfully Clear View cache.');
    }
    //Clear Route cache:
    public function routeCache(){
        Artisan::call('route:cache');
        return redirect('/')->with('success','Successfully Clear Route cache.');
    }




} // end controller






