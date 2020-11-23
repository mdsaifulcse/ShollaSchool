<?php

namespace App\Http\Controllers;

use App\AlumniStudent;
use Illuminate\Http\Request;
use Image;

class AlumniStudents extends Controller
{
    public function alumniStudentsInfo(){
        $publishedalumniStudents=AlumniStudent::orderBy('id','desc')->where('published_status',1)->get();
        return view('front.academic.alumni.alumni-students',['publishedalumniStudents'=>$publishedalumniStudents]);
    }
    public function showAddNewAlumniStudentForm(){
        return view('admin.alumni-students.add-new-alumni-student');
    }

    public function saveNewAlumniStudentInfo(Request $request){
        $this->validate($request,
            [
                'name'=>'required',
                'university'=>'required',
                'profession'=>'required',
                "mobile"=>'required|unique:alumni_students,mobile|size:11|regex:/(01)[0-9]{9}/',
                'education'=>'required',
                'image'=>'required|mimes:jpeg,png,PNG,gif,svg|max:1024'              ,
                'published_status'=>'required'

            ] );

        $alumniStudentImage=$request->file('image');
        $imageName=$alumniStudentImage->getClientOriginalName();
        $imageName=uniqid().$imageName;

        $directory='front/img/alumni-students/';
        $imgUrl=$directory.$imageName;
        Image::make($alumniStudentImage)->resize(400, 380)->save($imgUrl);

        $alumniStudent=new AlumniStudent();
        $alumniStudent->name=$request->name;
        $alumniStudent->university=$request->university;
        $alumniStudent->profession=$request->profession;
        $alumniStudent->mobile=$request->mobile;
        $alumniStudent->email=$request->email;
        $alumniStudent->blood_group=$request->blood_group;
        $alumniStudent->education=$request->education;
        $alumniStudent->image=$imgUrl;
        $alumniStudent->published_status=$request->published_status;
        $alumniStudent->present_address=$request->present_address;
        $alumniStudent->save();
        return redirect('/add-alumni-student')->with('message', $alumniStudent->name.' | Info Save Successfully');

    }

    public function manageAlumniStudentForm(){
        $alumniStudents=AlumniStudent::orderBy('id','desc')->get();
        return view('admin.alumni-students.manage-alumni-student',['alumniStudents'=>$alumniStudents]);
    }

    public function unpublishedAlumniStudentInfo($id){
        $alumniStudentById=AlumniStudent::find($id);
        $alumniStudentById->published_status =0;
        $alumniStudentById->save();
        return redirect('/manage-alumni-student')->with('message', $alumniStudentById->name.' | Info Save Successfully');
    }
    public function publishedAlumniStudentInfo($id){
        $alumniStudentById=AlumniStudent::find($id);
        $alumniStudentById->published_status =1;
        $alumniStudentById->save();
        return redirect('/manage-alumni-student')->with('message', $alumniStudentById->name.' | Info Save Successfully');
    }

    public function showEditAlumniStudentForm($id){
        $alumniStudentById=AlumniStudent::find($id);
        return view('admin.alumni-students.edit-alumni-student',['alumniStudentById'=>$alumniStudentById]);
    }

    public function updateAlumniStudentInfo(Request $request){
        $alumniStudentImage=$request->file('image');
        if ($alumniStudentImage){
            $this->validate($request,
                [
                    'name'=>'required',
                    'university'=>'required',
                    'profession'=>'required',
                    "mobile"=>"required|unique:alumni_students,mobile,$request->alumni_student_id|size:11|regex:/(01)[0-9]{9}/",
                    'education'=>'required',
                    'image'=>'required|mimes:jpeg,png,PNG,gif,svg|max:1024'              ,
                    'published_status'=>'required'

                ] );
            $imageName=$alumniStudentImage->getClientOriginalName();
            $imageName=uniqid().$imageName;

            $directory='front/img/alumni-students/';
            $imgUrl=$directory.$imageName;
            Image::make($alumniStudentImage)->resize(400, 380)->save($imgUrl);

            $alumniStudent=AlumniStudent::find($request->alumni_student_id);
            if (file_exists($alumniStudent->image)){
                unlink($alumniStudent->image);
            }

            $alumniStudent->name=$request->name;
            $alumniStudent->university=$request->university;
            $alumniStudent->profession=$request->profession;
            $alumniStudent->mobile=$request->mobile;
            $alumniStudent->email=$request->email;
            $alumniStudent->blood_group=$request->blood_group;
            $alumniStudent->education=$request->education;
            $alumniStudent->image=$imgUrl;
            $alumniStudent->published_status=$request->published_status;
            $alumniStudent->present_address=$request->present_address;
            $alumniStudent->save();
        }else{
            $this->validate($request,
                [
                    'name'=>'required',
                    'university'=>'required',
                    'profession'=>'required',
                    "mobile"=>"required|unique:alumni_students,mobile,$request->alumni_student_id|size:11|regex:/(01)[0-9]{9}/",
                    'education'=>'required',
                    'published_status'=>'required'

                ] );
            $alumniStudent=AlumniStudent::find($request->alumni_student_id);
            $alumniStudent->name=$request->name;
            $alumniStudent->university=$request->university;
            $alumniStudent->profession=$request->profession;
            $alumniStudent->mobile=$request->mobile;
            $alumniStudent->email=$request->email;
            $alumniStudent->blood_group=$request->blood_group;
            $alumniStudent->education=$request->education;
            $alumniStudent->published_status=$request->published_status;
            $alumniStudent->present_address=$request->present_address;
            $alumniStudent->save();
        }
        return redirect('/manage-alumni-student')->with('message', $alumniStudent->name.' | Info Update Successfully');

    }

    public function deleteAlumniStudentInfo($id){
        $alumniStudentById=AlumniStudent::find($id);
        if (file_exists($alumniStudentById->image)){
            unlink($alumniStudentById->image);
        }

        $alumniStudentById->delete();
        return redirect('/manage-alumni-student')->with('message', $alumniStudentById->name.' | Info Delete Successfully');
    }

}
