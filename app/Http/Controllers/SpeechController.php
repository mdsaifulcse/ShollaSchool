<?php

namespace App\Http\Controllers;

use App\Speech;
use Illuminate\Http\Request;
use Image;

class SpeechController extends Controller
{
    public function presidentSpeech(){
        $presidentSpeech=Speech::where('speech_person','president-speech')->first();
        return view('front.our-institute.president-speech.president-speech',['presidentSpeech'=>$presidentSpeech]);
    }

    public function principalSpeech(){
        $principalSpeech=Speech::where('speech_person','principal-speech')->first();
        return view('front.our-institute.principal-speech.principal-speech',['principalSpeech'=>$principalSpeech]);
    }

    public function showSpeechForm(){
        return view('admin.speech.add-speech');
    }

    public function saveNewSpeech(Request $request){
        $personImage=$request->file('person_image');
        $imageName=$personImage->getClientOriginalName();
        $imageName=uniqid().$imageName;
        $this->validate($request, [
            'person_image'=>'required|image:jpeg,png,gif,svg|max:1024'
        ]);

        $directory='front/img/speech-person/';
        $imgUrl=$directory.$imageName;
        Image::make($personImage)->resize(450, 350)->save($imgUrl);


        $speech= new Speech();
        $speech->person_image=$imgUrl;
        $speech->speech_content=$request->speech_content;
        $speech->speech_person=$request->speech_person;
        $speech->save();
        return redirect('add-speech')->with('message', 'Speech Info Save Successfully');
    }

    public function manageSpeech(){
        $speechs=Speech::orderBy('id','desc')->get();
        return view('admin.speech.manage-speech',['speechs'=>$speechs]);
    }

    public function editSpeech($id){
        $speechById=Speech::find($id);
        return view('admin.speech.edit-speech-form',['speechById'=>$speechById]);
    }

    public function updateSpeech(Request $request){
        $personImage=$request->file('person_image');
        if ($personImage){
            $this->validate($request, [
                'person_image'=>'required|image:jpeg,png,gif,svg|max:1024'
            ]);
            $speechInfById=Speech::find($request->Speech_id);

            if (file_exists($speechInfById->person_image)){
                unlink($speechInfById->person_image);
            }

            $imageName=$personImage->getClientOriginalName();
            $imageName=uniqid().$imageName;

            $directory='front/img/speech-person/';
            $imgUrl=$directory.$imageName;
            Image::make($personImage)->resize(450, 350)->save($imgUrl);

            $speechInfById->person_image=$imgUrl;
            $speechInfById->speech_content=$request->speech_content;
            $speechInfById->speech_person=$request->speech_person;
            $speechInfById->save();
        }else{
            $speechInfById=Speech::find($request->Speech_id);
            $speechInfById->speech_content=$request->speech_content;
            $speechInfById->speech_person=$request->speech_person;
            $speechInfById->save();

        }
        return redirect('manage-speech')->with('message', $speechInfById->speech_person.' Info Update Successfully');
    }
}
