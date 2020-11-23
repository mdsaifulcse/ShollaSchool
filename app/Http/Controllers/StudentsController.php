<?php

namespace App\Http\Controllers;

use App\ClassOfSchool;
use App\ClassSection;
use App\Student;
use App\Stuff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class StudentsController extends Controller
{
    public function studentSummary(){
        return view('front.academic.students-summary.students-summary');
    }

    public function schoolStudentInfo(){
        $schoolStudents=Student::orderBy('id','desc')->where(['published_status'=>1,'student_as'=>'school-student'])->get();
        return view('front.academic.students.school-students.school-students',compact('schoolStudents'));
    }
    public function schoolStudentProfile($id){
        $schoolStudentProfile=Student::findOrFail($id);
        if (empty($schoolStudentProfile)){
            return redirect()->back();
        }

        return view('front.academic.students.school-students.school-student-profile',compact('schoolStudentProfile'));
    }

    public function collegeStudentInfo(){
        $collegeStudents=Student::orderBy('id','desc')->where(['published_status'=>1,'student_as'=>'college-student'])->get();
        return view('front.academic.students.college-students.college-students',compact('collegeStudents'));
    }


    public function collegeStudentProfile($id){
        $collegeStudentProfile=Student::findOrFail($id);
        if (empty($collegeStudentProfile)){
            return redirect()->back();
        }
        return view('front.academic.students.college-students.college-student-profile',['collegeStudentProfile'=>$collegeStudentProfile]);
    }

    public function showAddNewStudentForm(){
        $classes=ClassOfSchool::orderBy('id','desc')->where('status',1)->pluck('class_name','id');
        $studentId=Student::select('student_id')->orderBy('id','desc')->take(1)->first();

       return view('admin.students.add-student-form',
            [
                'classes'=>$classes,
                'studentId'=>$studentId,
            ]);
    }

    public function loadSectionOfClass($classId){
        $sections=ClassSection::where('class_of_school_id',$classId)->pluck('section_name','id');
        return view('admin.students.load-section-of-school',compact('sections'));
    }

    public function saveNewStudentInfo(Request $request){

        $this->validate($request,
            [
                'student_name'=>'required',
                'father_name'=>'required',
                'mother_name'=>'required',
                "guardian_mobile"=>'required|unique:students,guardian_mobile|size:11|regex:/(01)[0-9]{9}/',
                'gender'=>'required',
                'religion'=>'required',
                'village'=>'required',
                'student_as'=>'required',
                'student_id'=>'required|unique:students,student_id',
                'class_id'=>'required',
                'section_id'=>'required',
                'student_image'=>'required|mimes:jpeg,png,PNG,gif,svg|max:2048'
            ]);
        $studentImage=$request->file('student_image');
        $imageName=$studentImage->getClientOriginalName();
        $imageName=uniqid().$imageName;

        $directory='front/img/students/';
        $imgUrl=$directory.$imageName;
        Image::make($studentImage)->resize(400, 380)->save($imgUrl);

        $newStudentId=substr("$request->student_as",0,3).'-'.$request->student_id;

        $student=new Student();
        $student->student_name=$request->student_name;
        $student->father_name=$request->father_name;
        $student->mother_name=$request->mother_name;
        $student->guardian_mobile=$request->guardian_mobile;
        $student->gender=$request->gender;
        $student->religion=$request->religion;
        $student->birth_reg_number=$request->birth_reg_number;
        $student->village=$request->village;
        $student->post_office=$request->post_office;
        $student->thana=$request->thana;
        $student->district=$request->district;
        $student->student_as=$request->student_as;
        $student->student_id=$newStudentId;
        $student->student_roll=$request->student_roll;
        $student->class_id=$request->class_id;
        $student->section_id=$request->section_id;
        $student->study_group=$request->study_group;
        $student->session_year=$request->session_year;
        $student->student_image=$imgUrl;
        $student->published_status=$request->published_status;
        $student->save();
        return redirect('add-student')->with('message', $student->student_name.' | Student Info Saved Successfully');
    }

    public function manageSchoolStudentInfo(){
        $schoolStudents=Student::orderBy('id','desc')->where('student_as','school-student')->where('published_status',1)->get();
        return view('admin.students.manage-school-students',compact('schoolStudents'));
    }

    public function detailsSchoolStudentInfo($id){
        $detailsSchoolStudent=Student::where('student_as','school-student')->where('id',$id)->first();
    return view('admin.students.details-school-student',['detailsSchoolStudent'=>$detailsSchoolStudent]);
}

    public function editSchoolStudentInfo($id){
        $classes=ClassOfSchool::orderBy('id','desc')->where('status',1)->pluck('class_name','id');
        $studentInfoById=Student::findOrFail($id);
        $sections=ClassSection::orderBy('id','desc')->where('class_of_school_id',$studentInfoById->class_id)->where('status',1)->pluck('section_name','id');

        return view('admin.students.edit-school-student-form',
            [
                'classes'=>$classes,
                'sections'=>$sections,
                'studentInfoById'=>$studentInfoById
            ]);
    }

    public function updateSchoolStudentInfo(Request $request){
        //return $request;
        $studentImage=$request->file('student_image');
        if ($studentImage){
            $this->validate($request,
                [
                    'student_name'=>'required',
                    'father_name'=>'required',
                    'mother_name'=>'required',
                    "guardian_mobile"=>"required|unique:students,guardian_mobile,$request->school_student_id|size:11|regex:/(01)[0-9]{9}/",
                    'gender'=>'required',
                    'religion'=>'required',
                    'village'=>'required',
                    'student_as'=>'required',
                    'student_id'=>"required|unique:students,student_id,$request->school_student_id",
                    'class_id'=>'required',
                    'section_id'=>'required',
                    'student_image'=>'required|mimes:jpeg,png,PNG,gif,svg|max:2048'
                ]);
            $student=Student::find($request->school_student_id);
            if (file_exists($student->student_image)){
                unlink($student->student_image);
            }
            $imageName=$studentImage->getClientOriginalName();
            $imageName=uniqid().$imageName;

            $directory='front/img/students/';
            $imgUrl=$directory.$imageName;
            Image::make($studentImage)->resize(400, 380)->save($imgUrl);


            $student->student_name=$request->student_name;
            $student->father_name=$request->father_name;
            $student->mother_name=$request->mother_name;
            $student->guardian_mobile=$request->guardian_mobile;
            $student->gender=$request->gender;
            $student->religion=$request->religion;
            $student->birth_reg_number=$request->birth_reg_number;
            $student->village=$request->village;
            $student->post_office=$request->post_office;
            $student->thana=$request->thana;
            $student->district=$request->district;
            $student->student_as=$request->student_as;
            $student->student_id=$request->student_id;
            $student->student_roll=$request->student_roll;
            $student->class_id=$request->class_id;
            $student->section_id=$request->section_id;
            $student->study_group=$request->study_group;
            $student->session_year=$request->session_year;
            $student->student_image=$imgUrl;
            $student->published_status=$request->published_status;
            $student->save();
        }else{
            $this->validate($request,
                [
                    'student_name'=>'required',
                    'father_name'=>'required',
                    'mother_name'=>'required',
                    "guardian_mobile"=>"required|unique:students,guardian_mobile,$request->school_student_id|size:11|regex:/(01)[0-9]{9}/",
                    'gender'=>'required',
                    'religion'=>'required',
                    'village'=>'required',
                    'student_as'=>'required',
                    'student_id'=>"required|unique:students,student_id,$request->school_student_id",
                    'class_id'=>'required',
                    'section_id'=>'required',
                ]);
            $student=Student::find($request->school_student_id);
            $student->student_name=$request->student_name;
            $student->father_name=$request->father_name;
            $student->mother_name=$request->mother_name;
            $student->guardian_mobile=$request->guardian_mobile;
            $student->gender=$request->gender;
            $student->religion=$request->religion;
            $student->birth_reg_number=$request->birth_reg_number;
            $student->village=$request->village;
            $student->post_office=$request->post_office;
            $student->thana=$request->thana;
            $student->district=$request->district;
            $student->student_as=$request->student_as;
            $student->student_id=$request->student_id;
            $student->student_roll=$request->student_roll;
            $student->class_id=$request->class_id;
            $student->section_id=$request->section_id;
            $student->study_group=$request->study_group;
            $student->session_year=$request->session_year;
            $student->published_status=$request->published_status;
            $student->save();
        }
        return redirect()->back()->with('message', $student->student_name.' | Student Update Successfully');

    }

    public function deleteSchoolStudentInfo($id){
        $studentInfoById=Student::findorFail($id);
        $studentInfoById->delete();
        if (file_exists($studentInfoById->student_image)){
            unlink($studentInfoById->student_image);
        }
        return redirect('manage-school-student')->with('message', $studentInfoById->student_name.' | Student Info Deleted');
    }

    public function manageCollegeStudentInfo(){
        $collegeStudents=Student::orderBy('id','desc')->where('student_as','college-student')->where('published_status',1)->get();
        return view('admin.students.manage-college-students',compact('collegeStudents'));
    }

    public function detailsCollegeStudentInfo($id){
        $detailsCollegeIStudent=Student::where('student_as','college-student')->where('id',$id)->first();

        return view('admin.students.details-college-student',['detailsCollegeIStudent'=>$detailsCollegeIStudent]);
    }

    public function editCollegeStudentInfo($id){
        $classes=ClassOfSchool::orderBy('id','desc')->where('status',1)->pluck('class_name','id');
        $studentInfoById=Student::find($id);
        $sections=ClassSection::orderBy('id','desc')->where('class_of_school_id',$studentInfoById->class_id)->where('status',1)->pluck('section_name','id');

        return view('admin.students.edit-college-student-form',
            [
                'classes'=>$classes,
                'sections'=>$sections,
                'studentInfoById'=>$studentInfoById
            ]);
    }

    public function updateCollegeStudentInfo(Request $request){
        $studentImage=$request->file('student_image');
        if ($studentImage){
            $this->validate($request,
                [
                    'student_name'=>'required',
                    'father_name'=>'required',
                    'mother_name'=>'required',
                    "guardian_mobile"=>"required|unique:students,guardian_mobile,$request->college_student_id|size:11|regex:/(01)[0-9]{9}/",
                    'gender'=>'required',
                    'religion'=>'required',
                    'village'=>'required',
                    'student_as'=>'required',
                    'student_id'=>"required|unique:students,student_id,$request->college_student_id",
                    'class_id'=>'required',
                    'section_id'=>'required',
                    'student_image'=>'required|mimes:jpeg,png,PNG,gif,svg|max:1024'
                ]);
            $student=Student::find($request->college_student_id);
            if (file_exists($student->student_image)){
                unlink($student->student_image);
            }
            $imageName=$studentImage->getClientOriginalName();
            $imageName=uniqid().$imageName;

            $directory='front/img/students/';
            $imgUrl=$directory.$imageName;
            Image::make($studentImage)->save($imgUrl);

            $student->student_name=$request->student_name;
            $student->father_name=$request->father_name;
            $student->mother_name=$request->mother_name;
            $student->guardian_mobile=$request->guardian_mobile;
            $student->gender=$request->gender;
            $student->religion=$request->religion;
            $student->birth_reg_number=$request->birth_reg_number;
            $student->village=$request->village;
            $student->post_office=$request->post_office;
            $student->thana=$request->thana;
            $student->district=$request->district;
            $student->student_as=$request->student_as;
            $student->student_id=$request->student_id;
            $student->student_roll=$request->student_roll;
            $student->class_id=$request->class_id;
            $student->section_id=$request->section_id;
            $student->study_group=$request->study_group;
            $student->session_year=$request->session_year;
            $student->student_image=$imgUrl;
            $student->published_status=$request->published_status;
            $student->save();
        }else{
            $this->validate($request,
                [
                    'student_name'=>'required',
                    'father_name'=>'required',
                    'mother_name'=>'required',
                    "guardian_mobile"=>"required|unique:students,guardian_mobile,$request->college_student_id|size:11|regex:/(01)[0-9]{9}/",
                    'gender'=>'required',
                    'religion'=>'required',
                    'village'=>'required',
                    'student_as'=>'required',
                    'student_id'=>"required|unique:students,student_id,$request->college_student_id",
                    'class_id'=>'required',
                    'section_id'=>'required',
                ]);
            $student=Student::find($request->college_student_id);
            $student->student_name=$request->student_name;
            $student->father_name=$request->father_name;
            $student->mother_name=$request->mother_name;
            $student->guardian_mobile=$request->guardian_mobile;
            $student->gender=$request->gender;
            $student->religion=$request->religion;
            $student->birth_reg_number=$request->birth_reg_number;
            $student->village=$request->village;
            $student->post_office=$request->post_office;
            $student->thana=$request->thana;
            $student->district=$request->district;
            $student->student_as=$request->student_as;
            $student->student_id=$request->student_id;
            $student->student_roll=$request->student_roll;
            $student->class_id=$request->class_id;
            $student->section_id=$request->section_id;
            $student->study_group=$request->study_group;
            $student->session_year=$request->session_year;
            $student->published_status=$request->published_status;
            $student->save();
        }
      return redirect()->back()->with('message', $student->student_name.' | Student Update Successfully');

    }

    public function deleteCollegeStudentInfo($id){
        $studentInfoById=Student::find($id);
        $studentInfoById->delete();
        if (file_exists($studentInfoById->dstudent_image)){
            unlink($studentInfoById->dstudent_image);
        }
        return redirect('manage-college-student')->with('message', $studentInfoById->student_name.' | Student Info Deleted');
    }

}
