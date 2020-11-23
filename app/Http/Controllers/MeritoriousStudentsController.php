<?php

namespace App\Http\Controllers;

use App\ClassOfSchool;
use App\MeritoriousStudent;
use Illuminate\Http\Request;
use  Image;

class MeritoriousStudentsController extends Controller
{
    public function meritoriousStudents(){
       $publisheMeritStudents= MeritoriousStudent::where('published_status',1)->orderBy('running_class_id','desc')->get();
       $runingClassIds=MeritoriousStudent::select('running_class_id')->groupBy('running_class_id')->where('published_status',1)->get();
        return view('front.academic.meritorious-students.meritorious-students',compact('runingClassIds','publisheMeritStudents'));
    }

    public function meritoriousStudentInfo($id){
        $meritStudentInfoById=MeritoriousStudent::find($id);
        if(empty($meritStudentInfoById)){
            return redirect()->back();
        }
        return view('front.academic.meritorious-students.merit-student-By-id',['meritStudentInfoById'=>$meritStudentInfoById]);
    }

    public function addMeritoriousStudent(){
        $classes=ClassOfSchool::orderBy('id','desc')->where('status',1)->pluck('class_name','id');
        return view('admin.meritorious-student.add-meritorious-student',compact('classes'));
    }

    public function saveMeritoriousStudentInfo(Request $request){

        $studentImage=$request->file('student_image');
        $this->validate($request, [
            'student_image'=>'required|image:jpeg,png,gif,svg|max:2048',
            'result_year'=>'required',
            'previous_class_id'=>'required',
            'running_class_id'=>'required'
        ]);

        if ($request->previous_class_id==$request->running_class_id){
            return redirect()->back()->with('message','You have select previous & running class same ! must be different');
        }
        $imageName=$studentImage->getClientOriginalName();
        $imageName=uniqid().$imageName;
        $directory='front/img/meritories-student/';

        $imgUrl=$directory.$imageName;
        Image::make($studentImage)->resize(450, 337)->save($imgUrl);

        $mritoriousStudent= new MeritoriousStudent();

        $mritoriousStudent->full_name=$request->full_name;
        $mritoriousStudent->father_name=$request->father_name;
        $mritoriousStudent->mother_name=$request->mother_name;
        $mritoriousStudent->session_year=$request->session_year;
        $mritoriousStudent->result_year=$request->result_year;
        $mritoriousStudent->previous_class_id=$request->previous_class_id;
        $mritoriousStudent->running_class_id=$request->running_class_id;
        $mritoriousStudent->result_place=$request->result_place;
        $mritoriousStudent->grate_point=$request->grate_point;
        $mritoriousStudent->total_number=$request->total_number;
        $mritoriousStudent->gender=$request->gender;
        $mritoriousStudent->religion=$request->religion;
        $mritoriousStudent->address=$request->address;
        $mritoriousStudent->student_image=$imgUrl;
        $mritoriousStudent->published_status=$request->published_status;
        $saved= $mritoriousStudent->save();
        if ($saved){
            return redirect('/add-meritorioue-student')->with('message','Student Data Save Successfully');
        }else{
            return redirect('/add-meritorioue-student')->with('message','Some Thing went wrond !');
        }
    }

    public function manageMeritoriousStudentInfo(){
        $meritoriousStudents=MeritoriousStudent::orderBy('id','desc')->get();
        return view('admin.meritorious-student.manage-meritorious-student',['meritoriousStudents'=>$meritoriousStudents]);
    }

    public function unpublishedMeritoriousStudentInfo($id){
        $mrtstudentById=MeritoriousStudent::find($id);
        $mrtstudentById->published_status=0;
        $mrtstudentById->save();
        return redirect('/manage-meritorious')->with('message','Unpublished Successfull');
    }

    public function publishedMeritoriousStudentInfo($id){
        $mrtstudentById=MeritoriousStudent::find($id);
        $mrtstudentById->published_status=1;
        $mrtstudentById->save();
        return redirect('/manage-meritorious')->with('message','Published Successfull');
    }

    public function editMeritoriousStudentInfo($id){
        $classes=ClassOfSchool::orderBy('id','desc')->where('status',1)->pluck('class_name','id');
        $meritStudentById=MeritoriousStudent::find($id);
        return view('admin.meritorious-student.edit-meritorious-student',compact('classes','meritStudentById'));
    }

    public function updateMeritoriousStudentInfo(Request $request){
        $studentImage=$request->file('student_image');
        if ($studentImage){
            $this->validate($request, [
                'student_image'=>'required|image:jpeg,png,gif,svg|max:2048',
                'result_year'=>'required',
                'previous_class_id'=>'required',
                'running_class_id'=>'required'
            ]);

            if ($request->previous_class_id==$request->running_class_id){
                return redirect()->back()->with('message','You have select previous & running class same ! must be different');
            }

            $mritoriousStudent=MeritoriousStudent::find($request->merit_student_id);
            $existImage=$mritoriousStudent->student_image;
            if (file_exists($existImage)){
                unlink($existImage);
            }

            $imageName=$studentImage->getClientOriginalName();
            $imageName=uniqid().$imageName;
            $directory='front/img/meritories-student/';

            $imgUrl=$directory.$imageName;
            Image::make($studentImage)->resize(450, 337)->save($imgUrl);


            $mritoriousStudent->full_name=$request->full_name;
            $mritoriousStudent->father_name=$request->father_name;
            $mritoriousStudent->mother_name=$request->mother_name;
            $mritoriousStudent->session_year=$request->session_year;
            $mritoriousStudent->result_year=$request->result_year;
            $mritoriousStudent->previous_class_id=$request->previous_class_id;
            $mritoriousStudent->running_class_id=$request->running_class_id;
            $mritoriousStudent->result_place=$request->result_place;
            $mritoriousStudent->grate_point=$request->grate_point;
            $mritoriousStudent->total_number=$request->total_number;
            $mritoriousStudent->gender=$request->gender;
            $mritoriousStudent->religion=$request->religion;
            $mritoriousStudent->address=$request->address;
            $mritoriousStudent->student_image=$imgUrl;
            $mritoriousStudent->published_status=$request->published_status;
            $saved=$mritoriousStudent->save();
        }else{
            $mritoriousStudent=MeritoriousStudent::find($request->merit_student_id);
            $mritoriousStudent->full_name=$request->full_name;
            $mritoriousStudent->father_name=$request->father_name;
            $mritoriousStudent->mother_name=$request->mother_name;
            $mritoriousStudent->session_year=$request->session_year;
            $mritoriousStudent->result_year=$request->result_year;
            $mritoriousStudent->previous_class_id=$request->previous_class_id;
            $mritoriousStudent->running_class_id=$request->running_class_id;
            $mritoriousStudent->result_place=$request->result_place;
            $mritoriousStudent->grate_point=$request->grate_point;
            $mritoriousStudent->total_number=$request->total_number;
            $mritoriousStudent->gender=$request->gender;
            $mritoriousStudent->religion=$request->religion;
            $mritoriousStudent->address=$request->address;
            $mritoriousStudent->published_status=$request->published_status;
            $saved=$mritoriousStudent->save();

        }
        if ($saved){
            return redirect('/manage-meritorious')->with('message','Student Data Update Successfully');
        }else{
            return redirect('/manage-meritorious')->with('message','Some Thing went wrond !');
        }

    }


    public function deleteMeritoriousStudentInfo($id){
        $deleteStudent=MeritoriousStudent::find($id);
        $studentImage=$deleteStudent->student_image;

        if (file_exists($studentImage)){
            unlink($studentImage);
        }
        $deleteStudent->delete();
        return redirect('/manage-meritorious')->with('message','Delete Successfull');
    }

}

