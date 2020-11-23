<?php

namespace App\Http\Controllers;

use App\Overview;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function schoolOverview(){
        $overview=Overview::all()->first();
        return view('front.our-institute.school-overview.school-overview',['overview'=>$overview]);
    }

    public function manageOverview(){
        $overview=Overview::all()->first();
        return view('admin.school-overview.manage-overview',['overview'=>$overview]);
    }

    public function updateOverviewForm($id){
        $overviewInfoById=Overview::find($id);
        return view('admin.school-overview.update-form',['overviewInfoById'=>$overviewInfoById]);
    }

    public function updateOvervie(Request $request){
        $overview=Overview::find($request->overview_id);
        $overview->president=$request->president;
        $overview->principal=$request->principal;
        $overview->total_student=$request->total_student;
        $overview->total_teacher=$request->total_teacher;
        $overview->mobile=$request->mobile;
        $overview->email=$request->email;
        $overview->address=$request->address;
        $overview->save();
        return redirect('/manage-Overview')->with('message','School Overview Successfully Update');
    }
}
