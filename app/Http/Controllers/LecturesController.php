<?php

namespace App\Http\Controllers;

use App\ClassOfSchool;
use App\ClassSection;
use App\Lecture;
use App\TeacherPersonal;
use Illuminate\Http\Request;
use DB;

class LecturesController extends Controller
{
    public function lecturesDownload(){
        $lectures=Lecture::orderBy('lectures.id','desc')->where('lectures.published_status',1)
            ->paginate(12);
        return view('front.academic.lectures.lectures',['lectures'=>$lectures]);
    }

    public function showAddNewLectureForm(){
        $classes=ClassOfSchool::orderBy('id','desc')->where('status',1)->pluck('class_name','id');
        $teachers=TeacherPersonal::orderBy('id','desc')->where('teacher_status',1)->pluck('name','id');
        return view('admin.lecture.add-lecture-form', compact('classes','teachers'));
    }

    public function saveNewLectureInfo(Request $request){
        $this->validate($request,
            [
                'subject'=>'required',
                'class_id'=>'required',
                'section_id'=>'required',
                'teacher_id'=>'required',
                'lecture_file'=>'required|mimes:pdf,jpeg,png,gif,svg|max:3072',
                'published_status'=>'required',
            ]);

        $lectureFile=$request->file('lecture_file');
        $lecturetName=$lectureFile->getClientOriginalName();
        $lecturetName=uniqid().$lecturetName;

        $directory='front/lecture/';
        $fileUrl=$directory.$lecturetName;
        $lectureFile->move($directory, $lecturetName);

        $lecture=new Lecture();
        $lecture->departemen=$request->departemen;
        $lecture->subject=$request->subject;
        $lecture->class_id=$request->class_id;
        $lecture->section_id=$request->section_id;
        $lecture->teacher_id=$request->teacher_id;
        $lecture->lecture_file=$fileUrl;
        $lecture->published_status=$request->published_status;
        $lecture->save();
        return redirect('add-lecture')->with('message', $lecture->subject.' | Info Save Successfully');
    }
    public function manageLectureInfo(){
        $lectures=Lecture::orderBy('lectures.id','desc')->paginate(12);
        return view('admin.lecture.manage-lecture',['lectures'=>$lectures]);
    }

    public function unpublishedLectureInfo($id){
        $lectureInfoById=Lecture::find($id);
        $lectureInfoById->published_status=0;
        $lectureInfoById->save();
        return redirect('manage-lecture')->with('message', $lectureInfoById->subject.' Info Unpublished Successfully');
    }
    public function publishedLectureInfo($id){
        $lectureInfoById=Lecture::find($id);
        $lectureInfoById->published_status=1;
        $lectureInfoById->save();
        return redirect('manage-lecture')->with('message', $lectureInfoById->subject.' Info Published Successfully');
    }

    public function showeditLectureForm($id){
        $classes=ClassOfSchool::orderBy('id','desc')->where('status',1)->pluck('class_name','id');
          $teachers=TeacherPersonal::orderBy('id','desc')->where('teacher_status',1)->pluck('name','id');

        $lectureInfoById=Lecture::find($id);
        if (!empty($lectureInfoById)){
            $sections=ClassSection::where('class_of_school_id',$lectureInfoById->class_id)->pluck('section_name','id');
        }
        return view('admin.lecture.edit-lecture-form',compact('classes','teachers','lectureInfoById','sections'));
    }

    public function updateLectureInfo(Request $request){
        $lectureFile=$request->file('lecture_file');
        if ($lectureFile){
            $this->validate($request,
                [
                    'subject'=>'required',
                    'class_id'=>'required',
                    'section_id'=>'required',
                    'teacher_id'=>'required',
                    'lecture_file'=>'mimes:pdf,jpeg,png,gif,svg|max:3072',
                    'published_status'=>'required',
                ]);
            $lecture=Lecture::find($request->lecture_id);
            if (file_exists($lecture->lecture_file)){
                unlink($lecture->lecture_file);
            }

            $lectureFile=$request->file('lecture_file');
            $lecturetName=$lectureFile->getClientOriginalName();
            $lecturetName=uniqid().$lecturetName;

            $directory='front/lecture/';
            $fileUrl=$directory.$lecturetName;
            $lectureFile->move($directory, $lecturetName);

            $lecture->departemen=$request->departemen;
            $lecture->subject=$request->subject;
            $lecture->class_id=$request->class_id;
            $lecture->section_id=$request->section_id;
            $lecture->teacher_id=$request->teacher_id;
            $lecture->lecture_file=$fileUrl;
            $lecture->published_status=$request->published_status;
            $lecture->save();
        }else{
            $this->validate($request,
                [
                    'subject'=>'required',
                    'class_id'=>'required',
                    'section_id'=>'required',
                    'teacher_id'=>'required',
                    'published_status'=>'required',
                ]);
            $lecture=Lecture::find($request->lecture_id);
            $lecture->departemen=$request->departemen;
            $lecture->subject=$request->subject;
            $lecture->class_id=$request->class_id;
            $lecture->section_id=$request->section_id;
            $lecture->teacher_id=$request->teacher_id;
            $lecture->published_status=$request->published_status;
            $lecture->save();
        }
        return redirect('manage-lecture')->with('message', $lecture->subject.' | Info Update Successfully');

    }

    public function deleteLectureInfo($id){
        $lectureInfoById=Lecture::find($id);
        if (file_exists($lectureInfoById->lecture_file)){
            unlink($lectureInfoById->lecture_file);
        }
        $lectureInfoById->delete();
        return redirect()->back()->with('message', $lectureInfoById->subject.' | Info Delete Successfully');
    }


}
