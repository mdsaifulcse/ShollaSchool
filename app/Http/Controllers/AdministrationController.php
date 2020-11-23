<?php

namespace App\Http\Controllers;

use App\Administrator;
use App\Designation;
use Illuminate\Http\Request;
use Image;

class AdministrationController extends Controller
{
    public function administrations(){
        $activeAdministrators=Administrator::orderBy('id','desc')->where('aministrator_status',1)->get();
        return view('front.teacher-stuff.administration.administrations', compact('activeAdministrators'));
    }

    public function administrationInfo($id){
        $administratorInfoById=Administrator::find($id);
        if (empty($administratorInfoById)){
            return redirect()->back();
        }
        return view('front.teacher-stuff.administration.administration-info',['administratorInfoById'=>$administratorInfoById]);
    }

    public function showAddAdministratorForm(){
        $designations=Designation::orderBy('id','desc')->where('status',1)->pluck('designation_name','id');
        return view('admin.administrator.add-administrator-form',compact('designations'));
    }

    public function saveNewAdministratorInfo(Request $request){
        $administratorImage=$request->file('image');
        $imageName=$administratorImage->getClientOriginalName();
        $imageName=uniqid().$imageName;
        $this->validate($request,
            [
                'name'=>'required',
                'father_name'=>'required',
                'mother_name'=>'required',
                'mobile'=>'required|size:11|regex:/(01)[0-9]{9}/|unique:administrators,mobile',
                'administrator_type'=>'required',
                'education'=>'required',
                'email'=>'email|unique:administrators,email',
                'image'=>'required|image:jpeg,jpg,png,gif,svg|max:2048',
                'designation_id'=>'required',
                'parmanent_address'=>'required',
            ]);

        $directory='front/img/administrator/';
        $imgUrl=$directory.$imageName;
        Image::make($administratorImage)->resize(300, 300)->save($imgUrl);

        $administrator=new Administrator();
        $administrator->name=$request->name;
        $administrator->father_name=$request->father_name;
        $administrator->mother_name=$request->mother_name;
        $administrator->gender=$request->gender;
        $administrator->blood_group=$request->blood_group;
        $administrator->religion=$request->religion;
        $administrator->marital_status=$request->marital_status;
        $administrator->mobile=$request->mobile;
        $administrator->administrator_type=$request->administrator_type;
        $administrator->designation_id=$request->designation_id;
        $administrator->education=$request->education;
        $administrator->email=$request->email;
        $administrator->date_of_birth=date('Y-m-d',strtotime($request->date_of_birth));
        $administrator->image=$imgUrl;
        $administrator->aministrator_status=$request->aministrator_status;
        $administrator->present_address=$request->present_address;
        $administrator->parmanent_address=$request->parmanent_address;
        $administrator->save();

        return redirect()->back()->with('message', "$administrator->name " .'Information Save Successfully');
    }

    public function manageAdministratorInfo(){
        $administrators=Administrator::orderBy('id','desc')->get();
    return view('admin.administrator.manage-administrator',['administrators'=>$administrators]);
    }

    public function editAdministratorInfo($id){
        $designations=Designation::orderBy('id','desc')->where('status',1)->pluck('designation_name','id');
        $administratorInfoById=Administrator::find($id);
        return view('admin.administrator.edit-administrator-form',compact('administratorInfoById','designations'));
    }

    public  function updateAdministratorInfo(Request $request){


        $administratorImage=$request->file('image');
        if ($administratorImage) {
            $imageName = $administratorImage->getClientOriginalName();
            $imageName = uniqid() . $imageName;
            $this->validate($request,
                [
                    'name' => 'required',
                    'father_name' => 'required',
                    'mother_name' => 'required',
                    'mobile' => "required|size:11|regex:/(01)[0-9]{9}/|unique:administrators,mobile,$request->administrator_id",
                    'administrator_type' => 'required',
                    'education' => 'required',
                    'email' => "email|unique:administrators,email,$request->administrator_id",
                    'image' => 'image:jpeg,jpg,png,gif,svg|max:2048',
                    'designation_id' => 'required',
                    'parmanent_address' => 'required',
                ]);
            $administrator = Administrator::find($request->administrator_id);
            if (file_exists($administrator->image)){
                unlink($administrator->image);
            }

            $directory = 'front/img/administrator/';
            $imgUrl = $directory . $imageName;
            Image::make($administratorImage)->resize(300, 300)->save($imgUrl);

            $administrator->name = $request->name;
            $administrator->father_name = $request->father_name;
            $administrator->mother_name = $request->mother_name;
            $administrator->gender = $request->gender;
            $administrator->blood_group = $request->blood_group;
            $administrator->religion = $request->religion;
            $administrator->marital_status = $request->marital_status;
            $administrator->mobile = $request->mobile;
            $administrator->administrator_type = $request->administrator_type;
            $administrator->designation_id = $request->designation_id;
            $administrator->education = $request->education;
            $administrator->email = $request->email;
            $administrator->date_of_birth = date('Y-m-d',strtotime($request->date_of_birth));
            $administrator->image = $imgUrl;
            $administrator->aministrator_status = $request->aministrator_status;
            $administrator->present_address = $request->present_address;
            $administrator->parmanent_address = $request->parmanent_address;
            $administrator->save();
        }else{
            $this->validate($request,
                [
                    'name'=>'required',
                    'father_name'=>'required',
                    'mother_name'=>'required',
                    'mobile'=>"required|size:11|regex:/(01)[0-9]{9}/|unique:administrators,mobile,$request->administrator_id",
                    'administrator_type'=>'required',
                    'education'=>'required',
                    'email'=>"email|unique:administrators,email,$request->administrator_id",
                    'designation_id'=>'required',
                    'parmanent_address'=>'required',
                ]);

            $administrator=Administrator::find($request->administrator_id);
            $administrator->name=$request->name;
            $administrator->father_name=$request->father_name;
            $administrator->mother_name=$request->mother_name;
            $administrator->gender=$request->gender;
            $administrator->blood_group=$request->blood_group;
            $administrator->religion=$request->religion;
            $administrator->marital_status=$request->marital_status;
            $administrator->mobile=$request->mobile;
            $administrator->administrator_type=$request->administrator_type;
            $administrator->designation_id=$request->designation_id;
            $administrator->education=$request->education;
            $administrator->email=$request->email;
            $administrator->date_of_birth=date('Y-m-d',strtotime($request->date_of_birth));
            $administrator->aministrator_status=$request->aministrator_status;
            $administrator->present_address=$request->present_address;
            $administrator->parmanent_address=$request->parmanent_address;
            $administrator->save();
        }

        return redirect('/manage-administrator')->with('message',
            "$administrator->name " .'Information Update Successfully');
    }

}
