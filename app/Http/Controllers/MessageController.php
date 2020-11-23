<?php

namespace App\Http\Controllers;

use App\MeritoriousStudent;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function saveNewMessage(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required|size:11|regex:/(01)[0-9]{9}/',
            'location'=>'required',
            'message'=>'required',
        ]);

        $message=New Message();
        $message->name=$request->name;
        $message->email=$request->email;
        $message->mobile=$request->mobile;
        $message->location=$request->location;
        $message->message=$request->message;
        $message->save();

        return redirect('/contact-us')->with('message','Thank You Very Much For Your valuable Information');
    }

    public function showMessage(){
        $messages=Message::orderBy('id','desc')->get();
        return view('admin.contact-message.message-list',['messages'=>$messages]);
    }

    public function deleteMessage($id){
        $messageById=Message::find($id);
        $messageById->delete();
        return redirect('message-list')->with('message','Message Successfully Delete !');
    }
}
