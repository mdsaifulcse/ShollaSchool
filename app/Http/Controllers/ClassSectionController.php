<?php

namespace App\Http\Controllers;

use App\ClassSection;
use Illuminate\Http\Request;

class ClassSectionController extends Controller
{
    public function showAddNewClassSectionForm(){
        return view('admin.class-section.add-class-section-form');
    }

    public function saveddNewClassSectionInfo(Request $request){
        $classSection=new ClassSection();
        $classSection->class_name=$request->class_name;
        $classSection->section_name=$request->section_name;
        $classSection->published_status=$request->published_status;
        $classSection->save();

        return redirect('/add-class-section')->with('message', $classSection->section_name.' | Save Successfylly');
    }

    public function manageClassSectionInfo(){
        $classSections=ClassSection::orderBy('id','desc')->get();
        return view('/admin.class-section.manage-class-section',['classSections'=>$classSections]);
    }

    public function deleteClassSectionInfo($id){
        $classSectionInfoById=ClassSection::find($id);
        $classSectionInfoById->delete();
        return redirect('/manage-class-section')->with('message', $classSectionInfoById->section_name.' | Delete Successfylly');
    }

    public function updateClassSectionInfo(Request $request){
        $classSectionInfoById = ClassSection::find($request->class_section_id);
        $classSectionInfoById->class_name=$request->class_name;
        $classSectionInfoById->section_name=$request->section_name;
        $classSectionInfoById->published_status=$request->published_status;
        $classSectionInfoById->save();
        return redirect('/manage-class-section')->with('message', $classSectionInfoById->section_name.' | Update Successfylly');
    }

    public function showEditClassSectionForm($id){
        $classSectionInfoById = ClassSection::find($id);
        return view('admin.class-section.edit-class-section-form',['classSectionInfoById'=>$classSectionInfoById]);
    }

}
