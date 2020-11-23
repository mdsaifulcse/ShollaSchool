<?php

namespace App\Http\Controllers;

use App\SchoolInfoRule;
use Illuminate\Http\Request;
use Image;

class SchoolInfoRulesController extends Controller
{
    public function schoolHistory(){
        $history=SchoolInfoRule::where('content_type','history')->first();
        return view('front.our-institute.school-history.school-history',['history'=>$history]);
    }

    public function instituteRules(){
        $rule=SchoolInfoRule::where('content_type','rules')->first();
        return view('front.our-institute.rules.institute-rules',['rule'=>$rule]);
    }

    public function landInfo(){
        $landInfo=SchoolInfoRule::where('content_type','land-info')->first();
        return view('front.our-institute.land-info.land-info',['landInfo'=>$landInfo]);
    }

    public function buildingInfo(){
        $buildingInfo=SchoolInfoRule::where('content_type','building-info')->first();
        return view('front.our-institute.building-info.building-info',['buildingInfo'=>$buildingInfo]);
    }

    public function manageRulesHistoryPropertyInfo(){
        $schoolInfoRules=SchoolInfoRule::all();
        return view('admin.about-school.manage-school-info',['schoolInfoRules'=>$schoolInfoRules]);
    }

    public function editRulesHistoryPropertyInfo($id){
        $schoolInfoRuleById=SchoolInfoRule::find($id);
        return view('admin.about-school.edit-school-info',['schoolInfoRuleById'=>$schoolInfoRuleById]);
    }

    public function updatetRulesHistoryPropertyInfo(Request $request){
        $relatedImageName=$request->file('image');
        if ($relatedImageName){

            //return $relatedImageName;
            $this->validate($request, [
                'image'=>'required|image:jpeg,png,gif,svg|max:1024',
                'title'=>'required',
                'contents'=>'required',

            ]);
           $schoolInfoById=SchoolInfoRule::find($request->school_info_id);
            if (file_exists($schoolInfoById->image)){
                unlink($schoolInfoById->image);
            }


            $imageName=$relatedImageName->getClientOriginalName();
            //return $imageName;
            $imageName=uniqid().$imageName;

            $directory='front/img/school-image/';
            $imgUrl=$directory.$imageName;

            Image::make($relatedImageName)->resize(1000, 406)->save($imgUrl);

            $schoolInfoById->title=$request->title;
            $schoolInfoById->image=$imgUrl;
            $schoolInfoById->contents=$request->contents;
            $schoolInfoById->save();
        }else{

            $schoolInfoById=SchoolInfoRule::find($request->school_info_id);
            //return $schoolInfoById;
            $this->validate($request, [
                'title'=>'required',
                'contents'=>'required',
            ]);
            $schoolInfoById->title=$request->title;
            $schoolInfoById->contents=$request->contents;
            $schoolInfoById->save();
        }
        return redirect('/manage-rules-history-property-info')->with('message', "$schoolInfoById->title ".' Update Successfull');
    }
}
