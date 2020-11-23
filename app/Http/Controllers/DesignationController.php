<?php

namespace App\Http\Controllers;

use App\Designation;
use Illuminate\Http\Request;
use Validator;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designations=Designation::orderBy('id','desc')->get();
        return view('admin.designations.index',compact('designations'));
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
            'designation_name' => 'required|max:100',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            Designation::create($input);
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('message','New Designation Successfully.');
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
        //
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
            'designation_name' => 'required|max:100',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $getDesignationById=Designation::findOrFail($id);
        try
        {
            $getDesignationById->update($input);
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('message','Old  Designation Info Update Successfully.');
        }
        else{
            return redirect()->back()->with('message','Something Error Found to update! '.$bug1);
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

        $getDesignationById=Designation::findOrFail($id);
        try
        {
            $getDesignationById->delete();
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('message','Old  Designation Info Delete Successfully.');
        }elseif ($bug==1451){
            return redirect()->back()->with('message','Sorry this data already used another table! '.$bug1);
        }
        else{
            return redirect()->back()->with('message','Something Error Found to update! '.$bug1);
        }
    }
}
