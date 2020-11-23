<?php

namespace App\Http\Controllers;

use App\Routine;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
    public function classRoutine(){
        $classRoutines=Routine::where('routine_as','class-routine')->where('published_status',1)->orderBy('id','desc')->get();
        return view('front.routine.class-routine.class-routine',['classRoutines'=>$classRoutines]);
    }
    public function examRoutine(){
        $examRoutines=Routine::where('routine_as','exam-routine')->where('published_status',1)->orderBy('id','desc')->get();
        return view('front.routine.exam-routine.exam-routine',['examRoutines'=>$examRoutines]);
    }

    public function showAddRoutineForm(){
        return view('admin.routine.add-routine-form');
    }

    public function saveNewRoutineInfo(Request $request){

        $this->validate($request,
            [
                'subject'=>'required',
                'routine_file'=>'required|mimes:pdf,jpeg,png,gif,svg|max:3072',
                'routine_as'=>'required',
            ]);

        $routineFile=$request->file('routine_file');
        $routineName=$routineFile->getClientOriginalName();
        $routineName=uniqid().$routineName;

        $directory='front/routine/';
        $fileUrl=$directory.$routineName;
        $routineFile->move($directory, $routineName);

        $routine=new Routine();
        $routine->subject=$request->subject;
        $routine->routine_file=$fileUrl;
        $routine->routine_as=$request->routine_as;
        $routine->published_status=$request->published_status;
        $routine->save();
        return redirect('/add-routine')->with('message', $routine->subject.' | Save Successfully');
    }

    public function manageRoutineInfo(){
        $routines=Routine::orderBy('id','desc')->get();
        return view('admin.routine.manage-routine',['routines'=>$routines]);
    }
    public function unpublishedRoutine($id){
        $routineById=Routine::find($id);
        $routineById->published_status=0;
        $routineById->save();
        return redirect('/manage-routine')->with('message', $routineById->subject.' | Unpublished Successfully');
    }
    public function publishedRoutine($id){
        $routineById=Routine::find($id);
        $routineById->published_status=1;
        $routineById->save();
        return redirect('/manage-routine')->with('message', $routineById->subject.' | Published Successfully');
    }

    public function showEditRoutineFoem($id){
        $routineById=Routine::find($id);
        return view('admin.routine.edit-routine-form',['routineById'=>$routineById]);
    }

    public function updateRoutineInfo(Request $request){
        $routineFile=$request->file('routine_file');
        if ($routineFile){
            $this->validate($request,
                [
                    'subject'=>'required',
                    'routine_file'=>'required|mimes:pdf,jpeg,png,gif,svg|max:3072',
                    'routine_as'=>'required',
                ]);

            $routine=Routine::find($request->routine_id);
            if (file_exists($routine->routine_file)){
                unlink($routine->routine_file);
            }

            $routineName=$routineFile->getClientOriginalName();
            $routineName=uniqid().$routineName;

            $directory='front/routine/';
            $fileUrl=$directory.$routineName;
            $routineFile->move($directory, $routineName);


            $routine->subject=$request->subject;
            $routine->routine_file=$fileUrl;
            $routine->routine_as=$request->routine_as;
            $routine->published_status=$request->published_status;
            $routine->save();
        }else{
            $this->validate($request,
                [
                    'subject'=>'required',
                    'routine_as'=>'required',
                ]);

            $routine=Routine::find($request->routine_id);
            $routine->subject=$request->subject;
            $routine->routine_as=$request->routine_as;
            $routine->published_status=$request->published_status;
            $routine->save();
        }
        return redirect('/manage-routine')->with('message', $routine->subject.' | Update Successfully');
    }

    public function deleteRoutineInfo($id){
        $routineById=Routine::find($id);
        if (file_exists($routineById->routine_file)){
            unlink($routineById->routine_file);
        }
        $routineById->delete();
        return redirect('/manage-routine')->with('message', $routineById->subject.' | Delete Successfully');
    }
}
