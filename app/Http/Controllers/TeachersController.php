<?php

namespace App\Http\Controllers;

use App\TeacherEducation;
use App\TeacherPersonal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Mockery\Exception;

class TeachersController extends Controller
{
    public function teacherList(){
       $teachers= DB::table('teacher_personals')
            ->join('teacher_educations','teacher_personals.id', '=',  'teacher_educations.teacher_id')
            ->select('teacher_personals.*', 'teacher_educations.designation')
           ->where('teacher_status',1)->orderBy('serial_no','asc')->get();

        return view('front.teacher-stuff.teachers.teachers',['teachers'=>$teachers]);
    }

    public function teacherInfo($id){

        $teacherInfoById= DB::table('teacher_personals')
            ->join('teacher_educations','teacher_personals.id', '=',  'teacher_educations.teacher_id')
            ->select('teacher_personals.*', 'teacher_educations.*')
            ->where('teacher_personals.id',$id)
            ->first();
        if (empty($teacherInfoById)){
            return redirect()->back();
        }
        return view('front.teacher-stuff.teachers.teacher-info',['teacherInfoById'=>$teacherInfoById]);
    }

    public function showAddTeacherForm(){
        $teacherSerial=TeacherPersonal::max('serial_no');
        return view('admin.teachers.add-teacher',compact('teacherSerial'));
    }

    public function saveNewTeacherInfo(Request $request){
        $teacherImage=$request->file('image');
        $imageName=$teacherImage->getClientOriginalName();
        $imageName=uniqid().$imageName;
        $this->validate($request,
            [
                'name'=>'required',
                'father_name'=>'required',
                'mother_name'=>'required',
                'mobile'=>'required|size:11|regex:/(01)[0-9]{9}/|unique:teacher_personals,mobile',
                'email'=>'required|email|unique:teacher_personals,email',
                'image'=>'required|image:jpeg,jpg,png,gif,svg|max:2048',
                'parmanent_address'=>'required',
                'serial_no'=>'required',
            ]);


        //return $teacherImage;

        $directory='front/img/teachers/';
        $imgUrl=$directory.$imageName;
        Image::make($teacherImage)->resize(300, 300)->save($imgUrl);

        $teacherPersonsl=new TeacherPersonal();
        $teacherPersonsl->name=$request->name;
        $teacherPersonsl->father_name=$request->father_name;
        $teacherPersonsl->mother_name=$request->mother_name;
        $teacherPersonsl->gender=$request->gender;
        $teacherPersonsl->blood_group=$request->blood_group;
        $teacherPersonsl->religion=$request->religion;
        $teacherPersonsl->marital_status=$request->marital_status;
        $teacherPersonsl->mobile=$request->mobile;
        $teacherPersonsl->email=$request->email;
        $teacherPersonsl->date_of_birth=date('Y-m-d',strtotime($request->date_of_birth));
        $teacherPersonsl->image=$imgUrl;
        $teacherPersonsl->teacher_status=$request->teacher_status;
        $teacherPersonsl->present_address=$request->present_address;
        $teacherPersonsl->parmanent_address=$request->parmanent_address;
        $teacherPersonsl->serial_no=$request->serial_no;
        $teacherPersonsl->save();

        return redirect('/add-teacher')->with('message',
            "$teacherPersonsl->name " .'Information Save Successfully');
    }

    public function teacherEducation(){
        $teachersPersonalInfos=TeacherPersonal::where('teacher_status',1)->orderBy('id','desc')->get();
        return view('admin.teachers.teacher-education',['teachersPersonalInfos'=>$teachersPersonalInfos]);
    }
    public function saveTeacherEducation(Request $request){
       $teacher_education=new TeacherEducation();

        $teacher_education->teacher_id=$request->teacher_id;
        $teacher_education->b_ed=$request->b_ed;
        $teacher_education->bed_subject=$request->bed_subject;
        $teacher_education->bed_board=$request->bed_board;
        $teacher_education->bed_result=$request->bed_result;
        $teacher_education->bed_passing_year=date('Y-m-d',strtotime($request->bed_passing_year));
        $teacher_education->masters=$request->masters;
        $teacher_education->masters_subject=$request->masters_subject;
        $teacher_education->masters_board=$request->masters_board;
        $teacher_education->masters_result=$request->masters_result;
        $teacher_education->masters_passing_year=date('Y-m-d',strtotime($request->masters_passing_year));
        $teacher_education->graduation=$request->graduation;
        $teacher_education->graduation_subject=$request->graduation_subject;
        $teacher_education->graduation_board=$request->graduation_board;
        $teacher_education->graduation_result=$request->graduation_result;
        $teacher_education->graduation_passing_year=date('Y-m-d',strtotime($request->graduation_passing_year));
        $teacher_education->hsc=$request->hsc;
        $teacher_education->hsc_group=$request->hsc_group;
        $teacher_education->hsc_board=$request->hsc_board;
        $teacher_education->hsc_result=$request->hsc_result;
        $teacher_education->hsc_passing_year=date('Y-m-d',strtotime($request->hsc_passing_year));
        $teacher_education->ssc=$request->ssc;
        $teacher_education->ssc_group=$request->ssc_group;
        $teacher_education->ssc_board=$request->ssc_board;
        $teacher_education->ssc_result=$request->ssc_result;
        $teacher_education->designation=$request->designation;
        $teacher_education->ssc_passing_year=date('Y-m-d',strtotime($request->ssc_passing_year));
        $teacher_education->special_in=$request->special_in;
        $teacher_education->teacher_type=$request->teacher_type;
        $teacher_education->join_date=date('Y-m-d',strtotime($request->join_date));
        $teacher_education->save();

        return redirect('/teacher-education')->with('message','Teacher Education info Save Successfully');
    }

    public function manageTeacherInfo(){
        $teacherspersonalInfo=TeacherPersonal::orderBy('serial_no','asc')->get();
        return view('/admin.teachers.manage-teacher',['teacherspersonalInfo'=>$teacherspersonalInfo]);
    }

    public function editTeacherPersonalInfo($id){
        $teacherPersonalInfoById=TeacherPersonal::find($id);
        return view('admin.teachers.edit-teacher',['teacherPersonalInfoById'=>$teacherPersonalInfoById]);
    }

    public function deleteTeacherPersonalInfo($id)
    {
        $teacherPersona = TeacherPersonal::findOrFail($id);
        $teacherEducation=TeacherEducation::where('teacher_id',$teacherPersona->id)->first();
        if (!empty($teacherEducation)){
            return redirect()->back()->with('message','Please delete teacher education info first to delete of this teacher personal info.');
        }

        try {
            $teacherPersona->delete();
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('message','Delete Successful Teacher Education Info.');
        }else{
            return redirect()->back()->with('message','Something Error Found !, Please try again.'.$bug1);
        }
    }



    public function updateTeacherInfo(Request $request){
        $teacherImage=$request->file('image');
        if ($teacherImage) {
            $imageName = $teacherImage->getClientOriginalName();
            $imageName = uniqid() . $imageName;
            $this->validate($request,
                [
                    'name' => 'required',
                    'father_name' => 'required',
                    'mother_name' => 'required',
                    'mobile' => "required|size:11|regex:/(01)[0-9]{9}/|unique:teacher_personals,mobile,$request->teacher_id",
                    'email' => "required|email|unique:teacher_personals,email,$request->teacher_id",
                    'image' => 'required|image:jpeg,jpg,png,gif,svg|max:2048',
                    'parmanent_address' => 'required',
                    'serial_no'=>'required',
                ]);


            //return $teacherImage;
            $teacherPersonsl=TeacherPersonal::find($request->teacher_id);
            if (file_exists($teacherPersonsl->image)){
                unlink($teacherPersonsl->image);
            }


            $directory = 'front/img/teachers/';
            $imgUrl = $directory . $imageName;
            Image::make($teacherImage)->resize(300, 300)->save($imgUrl);

            $teacherPersonsl->name = $request->name;
            $teacherPersonsl->father_name = $request->father_name;
            $teacherPersonsl->mother_name = $request->mother_name;
            $teacherPersonsl->gender = $request->gender;
            $teacherPersonsl->blood_group = $request->blood_group;
            $teacherPersonsl->religion = $request->religion;
            $teacherPersonsl->marital_status = $request->marital_status;
            $teacherPersonsl->mobile = $request->mobile;
            $teacherPersonsl->email = $request->email;
            $teacherPersonsl->date_of_birth = date('Y-m-d',strtotime($request->date_of_birth));
            $teacherPersonsl->image = $imgUrl;
            $teacherPersonsl->teacher_status = $request->teacher_status;
            $teacherPersonsl->present_address = $request->present_address;
            $teacherPersonsl->parmanent_address = $request->parmanent_address;
            $teacherPersonsl->serial_no=$request->serial_no;
            $teacherPersonsl->save();
        }else{
            $this->validate($request,
                [
                    'name' => 'required',
                    'father_name' => 'required',
                    'mother_name' => 'required',
                    'mobile' => "required|size:11|regex:/(01)[0-9]{9}/|unique:teacher_personals,mobile,$request->teacher_id",
                    'email' => "required|email|unique:teacher_personals,email,$request->teacher_id",
                    'parmanent_address' => 'required',
                ]);;
            $teacherPersonsl=TeacherPersonal::find($request->teacher_id);

            $teacherPersonsl->name = $request->name;
            $teacherPersonsl->father_name = $request->father_name;
            $teacherPersonsl->mother_name = $request->mother_name;
            $teacherPersonsl->gender = $request->gender;
            $teacherPersonsl->blood_group = $request->blood_group;
            $teacherPersonsl->religion = $request->religion;
            $teacherPersonsl->marital_status = $request->marital_status;
            $teacherPersonsl->mobile = $request->mobile;
            $teacherPersonsl->email = $request->email;
            $teacherPersonsl->date_of_birth = date('Y-m-d',strtotime($request->date_of_birth));
            $teacherPersonsl->teacher_status = $request->teacher_status;
            $teacherPersonsl->present_address = $request->present_address;
            $teacherPersonsl->parmanent_address = $request->parmanent_address;
            $teacherPersonsl->serial_no=$request->serial_no;
            $teacherPersonsl->save();
        }

        return redirect()->back()->with('message',
            "$teacherPersonsl->name " .'Information Update Successfully');

    }

    public function manageTeacherEducationInfo(){

        $teacherEducationInfos=DB::table('teacher_educations')
            ->join('teacher_personals', 'teacher_educations.teacher_id','=','teacher_personals.id')
            ->select('teacher_educations.*', 'teacher_personals.name')
            ->orderBy('id','desc')
            ->get();

        return view('admin.teachers.manage-education',['teacherEducationInfos'=>$teacherEducationInfos]);
    }

    public function editTeacherEducationInfo($id){
        $teachersPersonalInfos=TeacherPersonal::where('teacher_status',1)->orderBy('id','desc')->get();
        $teacherEducationInfoById=TeacherEducation::find($id);
        return view('admin.teachers.edit-education',
            [
                'teachersPersonalInfos'=>$teachersPersonalInfos,
                'teacherEducationInfoById'=>$teacherEducationInfoById

            ]);
    }

    public function deleteTeacherEducationInfo($id)
    {
        $teacherEducation = TeacherEducation::findOrFail($id);

        try {
            $teacherEducation->delete();
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('message','Delete Successful Teacher Education Info.');
        }else{
            return redirect()->back()->with('message','Something Error Found !, Please try again.'.$bug1);
        }
    }

    public function updateTeacherEducationInfo(Request $request){

        $educationInfoById=TeacherEducation::find($request->education_id);
        $educationInfoById->teacher_id=$request->teacher_id;
        $educationInfoById->b_ed=$request->b_ed;
        $educationInfoById->bed_subject=$request->bed_subject;
        $educationInfoById->bed_board=$request->bed_board;
        $educationInfoById->bed_result=$request->bed_result;
        $educationInfoById->bed_passing_year=date('Y-m-d',strtotime($request->bed_passing_year));
        $educationInfoById->masters=$request->masters;
        $educationInfoById->masters_subject=$request->masters_subject;
        $educationInfoById->masters_board=$request->masters_board;
        $educationInfoById->masters_result=$request->masters_result;
        $educationInfoById->masters_passing_year=date('Y-m-d',strtotime($request->masters_passing_year));
        $educationInfoById->graduation=$request->graduation;
        $educationInfoById->graduation_subject=$request->graduation_subject;
        $educationInfoById->graduation_board=$request->graduation_board;
        $educationInfoById->graduation_result=$request->graduation_result;
        $educationInfoById->graduation_passing_year=date('Y-m-d',strtotime($request->graduation_passing_year));
        $educationInfoById->hsc=$request->hsc;
        $educationInfoById->hsc_group=$request->hsc_group;
        $educationInfoById->hsc_board=$request->hsc_board;
        $educationInfoById->hsc_result=$request->hsc_result;
        $educationInfoById->hsc_passing_year=date('Y-m-d',strtotime($request->hsc_passing_year));
        $educationInfoById->ssc=$request->ssc;
        $educationInfoById->ssc_group=$request->ssc_group;
        $educationInfoById->ssc_board=$request->ssc_board;
        $educationInfoById->ssc_result=$request->ssc_result;
        $educationInfoById->designation=$request->designation;
        $educationInfoById->ssc_passing_year=date('Y-m-d',strtotime($request->ssc_passing_year));
        $educationInfoById->special_in=$request->special_in;
        $educationInfoById->teacher_type=$request->teacher_type;
        $educationInfoById->join_date=date('Y-m-d',strtotime($request->join_date));
        $educationInfoById->save();

        return redirect()->back()->with('message','Teacher Education info Update Successfully');
    }

}
