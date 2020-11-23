<?php

namespace App\Http\Controllers;

use App\AcademicContent;
use Illuminate\Http\Request;
use Image;

class AcademicContentController extends Controller
{
    public function coursesStudie(){
        $coursesStudies=AcademicContent::where('content_as','courses-studies')->first();
        return view('front.academic.courses.courses-studies',['coursesStudies'=>$coursesStudies]);
    }

    public function curriculumContent(){
        $curriculumContent=AcademicContent::where('content_as','academic-curriculum')->first();
        return view('front.academic.curriculum.academic-curriculum',['curriculumContent'=>$curriculumContent]);
    }
    public function manageAcademicContent(){
        $academicContents=AcademicContent::orderBy('id','desc')->get();
        return view('admin.academic-content.manage-academic-content',['academicContents'=>$academicContents]);
    }

    public function editAcademicContent($id){
        $academicContentById=AcademicContent::find($id);
        return view('admin.academic-content.edit-academic-curriculum',['academicContentById'=>$academicContentById]);
    }

    public function updateAcademicContent(Request $request){
        $academidImage=$request->file('image');
        if ($academidImage){
            $academicContentInfoById=AcademicContent::find($request->academic_content_id);
            $this->validate($request, [
                'title'=>'required',
                'image'=>'required|image:jpeg,png,gif,svg|max:1024',
                'contents'=>'required',
                'content_as'=>'required',
            ]);

            if (file_exists($academicContentInfoById->image)){
                unlink($academicContentInfoById->image);
            }


            $imageName=$academidImage->getClientOriginalName();
            $directory='front/img/school-image/';
            $imgUrl=$directory.$imageName;

            Image::make($academidImage)->resize(600, 238)->save($imgUrl);

            $academicContentInfoById->title=$request->title;
            $academicContentInfoById->image=$imgUrl;
            $academicContentInfoById->contents=$request->contents;
            $academicContentInfoById->content_as=$request->content_as;
            $academicContentInfoById->pubsidhe_status=$request->pubsidhe_status;
            $academicContentInfoById->save();
        }else{

            $academicContentInfoById=AcademicContent::find($request->academic_content_id);
            $this->validate($request, [
                'title'=>'required',
                'contents'=>'required',
                'content_as'=>'required',
            ]);
            $academicContentInfoById->title=$request->title;
            $academicContentInfoById->contents=$request->contents;
            $academicContentInfoById->content_as=$request->content_as;
            $academicContentInfoById->pubsidhe_status=$request->pubsidhe_status;
            $academicContentInfoById->save();
        }

        return redirect('/manage-academic-content')->with('message', $academicContentInfoById->title.' | Update Successfully');
    }
}
