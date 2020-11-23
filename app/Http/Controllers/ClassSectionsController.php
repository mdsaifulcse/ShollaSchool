<?php

namespace App\Http\Controllers;

use App\ClassOfSchool;
use App\ClassSection;
use Illuminate\Http\Request;
use Validator;

class ClassSectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->back();
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
            'section_name' => 'required|max:100',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            ClassSection::create($input);
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('message','New Section Created Successfully.');
        }else{
            return redirect()->back()->with('message','Something Error Found! '.$bug1);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classOfSchool=ClassOfSchool::findOrFail($id);
        $sections=ClassSection::orderBy('id','desc')->where('class_of_school_id',$id)->get();
        return view('admin.class-section.index',compact('classOfSchool','sections'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->except('_token');

        $validator = Validator::make($request->all(),[
            'section_name' => 'required|max:100',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $sectionById=ClassSection::findOrFail($id);

        try {
            $sectionById->update($input);
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('message',' Old Section Update Successfully.');
        }else{
            return redirect()->back()->with('message','Something Error Found! '.$bug1);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sectionById=ClassSection::findOrFail($id);
        try {
            $sectionById->delete();
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('message',' Section Delete Successfully.');
        }else{
            return redirect()->back()->with('message','Something Error Found! '.$bug1);
        }
    }
}
