<?php

namespace App\Http\Controllers;

use App\ClassOfSchool;
use Illuminate\Http\Request;
use Validator;

class ClassOfSchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes=ClassOfSchool::orderBy('id','desc')->get();
        return view('admin.all-classes.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');

        $validator = Validator::make($request->all(),[
            'class_name' => 'required|max:150',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            ClassOfSchool::create($input);
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('message','New Class Created Successfully.');
        }else{
            return redirect()->back()->with('message','Something Error Found! '.$bug1);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClassOfSchool  $classOfSchool
     * @return \Illuminate\Http\Response
     */
    public function show(ClassOfSchool $classOfSchool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClassOfSchool  $classOfSchool
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassOfSchool $classOfSchool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClassOfSchool  $classOfSchool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->except('_token');

        $validator = Validator::make($request->all(),[
            'class_name' => 'required|max:150',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $getClassById=ClassOfSchool::findOrFail($id);
        try
         {
            $getClassById->update($input);
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('message','Old  Class Info Update Successfully.');
        }else{
            return redirect()->back()->with('message','Something Error Found to update! '.$bug1);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClassOfSchool  $classOfSchool
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $getClassById=ClassOfSchool::findOrFail($id);
        try
        {
            $getClassById->delete();
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('message','Old  Class Info Delete Successfully.');
        }elseif ($bug==1451){
            return redirect()->back()->with('message','Sorry, This Data Already Used Another Table! '.$bug1);
        }
        else{
            return redirect()->back()->with('message','Something Error Found to update! '.$bug1);
        }
    }
}
