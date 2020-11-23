<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function academicResult(){
        $academicResults=Result::where('result_as','academic-result')->where('published_status',1)->orderBy('id','desc')->get();
        return view('front.results.academic-result.academic-result',['academicResults'=>$academicResults]);
    }

    public function jscResult(){
        $jscResults=Result::where('result_as','jsc-result')->where('published_status',1)->orderBy('id','desc')->get();
        return view('front.results.jsc-result.jsc-result',['jscResults'=>$jscResults]);
    }

    public function sscResult(){
        $sscResults=Result::where('result_as','ssc-result')->where('published_status',1)->orderBy('id','desc')->get();
        return view('front.results.ssc-result.ssc-result',['sscResults'=>$sscResults]);
    }

    public function hscResult(){
        $hscResults=Result::where('result_as','hsc-result')->where('published_status',1)->orderBy('id','desc')->get();
        return view('front.results.hsc-result.hsc-result',['hscResults'=>$hscResults]);
    }

    public function showAddNewResultForm(){
        return view('admin.result.add-result-form');
    }

    public function saveNewResultInfo(Request $request){
        $this->validate($request,
            [
               'title'=>'required',
               'result_file'=>'required|mimes:pdf,jpeg,png,gif,svg|max:3072',
               'result_as'=>'required',
               'published_status'=>'required',
            ]);

        $resultFile=$request->file('result_file');
        $resultName=$resultFile->getClientOriginalName();
        $resultName=uniqid().$resultName;

        $directory='front/result/';
        $fileUrl=$directory.$resultName;
        $resultFile->move($directory, $resultName);

        $result= new Result();
        $result->title=$request->title;
        $result->result_file=$fileUrl;
        $result->result_as=$request->result_as;
        $result->published_status=$request->published_status;
        $result->save();
        return redirect('/add-result')->with('message',  $result->title.' | Info Save Successfully');
    }
    public function manageResultInfo(){
        $results=Result::orderBy('id','desc')->get();
        return view('admin.result.manage-result',['results'=>$results]);
    }

    public function unpublishedResultInfo($id){
        $resultInfoById=Result::find($id);
        $resultInfoById->published_status=0;
        $resultInfoById->save();
        return redirect('/manage-result')->with('message',  $resultInfoById->title.' | Unpublished Successfully');
    }

    public function publishedResultInfo($id){
        $resultInfoById=Result::find($id);
        $resultInfoById->published_status=1;
        $resultInfoById->save();
        return redirect('/manage-result')->with('message',  $resultInfoById->title.' | Published Successfully');
    }

    public function editResultInfo($id){
        $resultInfoById=Result::find($id);
        return view('admin.result.edit-result-form',['resultInfoById'=>$resultInfoById]);
    }


    public function updateResultInfo(Request $request){
        $resultFile=$request->file('result_file');
        if ($resultFile) {
            $this->validate($request,
                [
                    'title' => 'required',
                    'result_file' => 'required|mimes:pdf,jpeg,png,gif,svg|max:3072',
                    'result_as' => 'required',
                    'published_status' => 'required',
                ]);
            $result=Result::find($request->result_id);

            $resultName = $resultFile->getClientOriginalName();
            $resultName = uniqid() . $resultName;

            $directory = 'front/result/';
            $fileUrl = $directory . $resultName;
            $resultFile->move($directory, $resultName);

            $result->title = $request->title;
            $result->result_file = $fileUrl;
            $result->result_as = $request->result_as;
            $result->published_status = $request->published_status;
            $result->save();
        }else{
            $result=Result::find($request->result_id);
            $result->title = $request->title;
            $result->result_as = $request->result_as;
            $result->published_status = $request->published_status;
            $result->save();
        }
        return redirect('/manage-result')->with('message',  $result->title.' | Indo Update Successfully');
    }

    public function deleteResultInfo($id){
        $resultInfoById=Result::find($id);
        if (file_exists($resultInfoById->result_file)){
            unlink($resultInfoById->result_file);
        }
        $resultInfoById->delete();
        return redirect('/manage-result')->with('message',  $resultInfoById->title.' | Successfully Delete');
    }
}
