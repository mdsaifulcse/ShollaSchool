<?php

namespace App\Http\Controllers;

use App\About_school;

use Illuminate\Http\Request;
use Image;


class AboutSchoolController extends Controller
{
    public function showAboutSchoolForm(){
        return view('admin.about-school.about-school-form');
    }



    public function editAboutSchoo($id){
        $aboutSchoolInfoById=About_school::find($id);
        return view('admin.about-school.edit-about-school',['aboutSchoolInfoById'=>$aboutSchoolInfoById]);
    }


    public function updateAboutSchooInfo(Request $request){

        $schoolImage=$request->file('school_image');
        if ($schoolImage){
            $aboutSchoolInfoById=About_school::find($request->school_info_id);
            $this->validate($request, [
                'school_image'=>'required|image:jpeg,png,gif,svg|max:1024',
                'short_description'=>'required',
                'long_description'=>'required',
            ]);

            if (file_exists($aboutSchoolInfoById->school_image)){
                unlink($aboutSchoolInfoById->school_image);
            }


            $imageName=$schoolImage->getClientOriginalName();
            $directory='front/img/school-image/';
            $imgUrl=$directory.$imageName;

            Image::make($schoolImage)->resize(600, 238)->save($imgUrl);

            $aboutSchoolInfoById->school_image=$imgUrl;
            $aboutSchoolInfoById->short_description=$request->short_description;
            $aboutSchoolInfoById->long_description=$request->long_description;
            $aboutSchoolInfoById->save();
        }else{

            $aboutSchoolInfoById=About_school::find($request->school_info_id);
            $this->validate($request, [
                'short_description'=>'required',
                'long_description'=>'required',
            ]);
            $aboutSchoolInfoById->short_description=$request->short_description;
            $aboutSchoolInfoById->long_description=$request->long_description;
            $aboutSchoolInfoById->save();
        }
        return redirect('/manage-about-school')->with('message','About School Info Update Successfull');

    }

    public function manageAboutSchoo(){
       $aboutSchoolInfo =About_school::all()->first();
        return view('admin.about-school.manage-about-school',['aboutSchoolInfo'=>$aboutSchoolInfo]);
    }

}
