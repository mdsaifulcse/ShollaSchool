<?php

namespace App\Http\Controllers;

use App\Stuff;
use Illuminate\Http\Request;
use Image;

class StuffsController extends Controller
{
    public function stuffList(){
        $activeStuffs=Stuff::orderBy('id','desc')->where('stuff_status',1)->get();
        return view('front.teacher-stuff.stuff.stuff-list',['activeStuffs'=>$activeStuffs]);
    }

    public function stuffInfo($id){
        $stuffById=Stuff::find($id);
        if (empty($stuffById)){
            return redirect()->back();
        }
        return view('front.teacher-stuff.stuff.stuff-info',['stuffById'=>$stuffById]);
    }

    public function showAddStuffForm(){
        return view('admin.stuff.add-stuff-form');
    }

    public function saveNewStuffInfo(Request $request){
        $stuffImage=$request->file('image');
        $imageName=$stuffImage->getClientOriginalName();
        $imageName=uniqid().$imageName;
        $this->validate($request,
            [
                'name'=>'required',
                'stuff_type'=>'required',
                'image'=>'required|image:jpeg,jpg,png,gif,svg|max:1024',
                'present_address'=>'required',
            ]);

        $directory='front/img/stuff/';
        $imgUrl=$directory.$imageName;
        Image::make($stuffImage)->resize(300, 300)->save($imgUrl);

        $stuff=new Stuff();
        $stuff->name=$request->name;
        $stuff->gender=$request->gender;
        $stuff->blood_group=$request->blood_group;
        $stuff->religion=$request->religion;
        $stuff->mobile=$request->mobile;
        $stuff->stuff_type=$request->stuff_type;
        $stuff->email=$request->email;
        $stuff->image=$imgUrl;
        $stuff->present_address=$request->present_address;
        $stuff->parmanent_address=$request->parmanent_address;
        $stuff->stuff_status=$request->stuff_status;
        $stuff->save();

        return redirect('/add-stuff')->with('message',
            "$stuff->name " .'Information Save Successfully');
    }

    public function manageStuffInfo(){
        $stuffs=Stuff::orderBy('id','desc')->get();
        return view('admin.stuff.manage-stuff',['stuffs'=>$stuffs]);
    }
    public function showEditStuffInfoForm($id){
        $stuffInfoById=Stuff::find($id);
        return view('admin.stuff.edit-stuff-form',['stuffInfoById'=>$stuffInfoById]);
    }

    public function updateStuffInfo(Request $request){
        $stuffImage=$request->file('image');
        if ($stuffImage) {
            $stuffInfoById=Stuff::find($request->stuff_id);
            $imageName = $stuffImage->getClientOriginalName();
            $imageName = uniqid() . $imageName;
            $this->validate($request,
                [
                    'name' => 'required',
                    'stuff_type' => 'required',
                    'image' => 'required|image:jpeg,jpg,png,gif,svg|max:1024',
                    'present_address' => 'required',
                ]);

            if (file_exists($stuffInfoById->image)){
                unlink($stuffInfoById->image);
            }

            $directory = 'front/img/stuff/';
            $imgUrl = $directory . $imageName;
            Image::make($stuffImage)->resize(300, 300)->save($imgUrl);

            $stuffInfoById->name = $request->name;
            $stuffInfoById->gender = $request->gender;
            $stuffInfoById->blood_group = $request->blood_group;
            $stuffInfoById->religion = $request->religion;
            $stuffInfoById->mobile = $request->mobile;
            $stuffInfoById->stuff_type = $request->stuff_type;
            $stuffInfoById->email = $request->email;
            $stuffInfoById->image = $imgUrl;
            $stuffInfoById->present_address = $request->present_address;
            $stuffInfoById->parmanent_address = $request->parmanent_address;
            $stuffInfoById->stuff_status = $request->stuff_status;
            $stuffInfoById->save();
        }else{
            $this->validate($request,
                [
                    'name' => 'required',
                    'stuff_type' => 'required',
                    'present_address' => 'required',
                ]);


            $stuffInfoById=Stuff::find($request->stuff_id);
            $stuffInfoById->name = $request->name;
            $stuffInfoById->gender = $request->gender;
            $stuffInfoById->blood_group = $request->blood_group;
            $stuffInfoById->religion = $request->religion;
            $stuffInfoById->mobile = $request->mobile;
            $stuffInfoById->stuff_type = $request->stuff_type;
            $stuffInfoById->email = $request->email;
            $stuffInfoById->present_address = $request->present_address;
            $stuffInfoById->parmanent_address = $request->parmanent_address;
            $stuffInfoById->stuff_status = $request->stuff_status;
            $stuffInfoById->save();
        }

        return redirect('/manage-stuff')->with('message',
            "$stuffInfoById->name " .'Information Update Successfully');

    }
}
