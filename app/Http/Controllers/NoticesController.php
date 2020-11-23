<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use Image;

class NoticesController extends Controller
{
    public function allNoticseList(){
        $publishedNotices=Notice::where('published_status',1)->orderBy('id','desc')->get();
        return view('front.notice-events.notice.notice-list',
            ['publishedNotices'=>$publishedNotices]);
    }

    public function showNoticeForm(){
        return view('admin.notice.notice-form');
    }

    public function saveNoticeInfo(Request $request){
        $noticeFile=$request->file('notice_file');
        $fileName=$noticeFile->getClientOriginalName();
        $fileName=uniqid().$fileName;
        $this->validate($request, [
            'notice_file'=>'required|mimes:pdf|max:5120']);

        $directory='front/notice/files/';
        $fileUrl=$directory.$fileName;
        $noticeFile->move($directory, $fileName);

        $notice=new Notice();
        $notice->subject=$request->subject;
        $notice->notice_file=$fileUrl;
        $notice->published_status=$request->published_status;
        $notice->save();
        return redirect('/add-notice')->with('message', 'Notice File Successfully Saved');
    }

    public function manageNoticeInfo(){
        $notices=Notice::orderBy('id','desc')->get();
        return view('admin.notice.manage-notice',['notices'=>$notices]);
    }

    public function unpublishedNotic($id){
        $noticeById=Notice::find($id);
        $noticeById->published_status=0;
        $noticeById->save();
        return redirect('/manage-notice')->with('message','Notice Successfully Unpublished');
    }
    public function publishedNotic($id){
        $noticeById=Notice::find($id);
        $noticeById->published_status=1;
        $noticeById->save();
        return redirect('/manage-notice')->with('message','Notice Successfully Published');
    }
    public function editNotic($id){
        $noticeById=Notice::find($id);
        return view('admin.notice.edit-notice',['noticeById'=>$noticeById]);
    }

    public function updateNotice(Request $request){
        $noticeFile=$request->file('notice_file');
        if ($noticeFile){
            $this->validate($request, [
                'notice_file'=>'required|mimes:pdf|max:5120'
            ]);

            $noticeById=Notice::find($request->notice_id);
            if (file_exists($noticeById->notice_file)){
                unlink($noticeById->notice_file);
            }

            $fileName=$noticeFile->getClientOriginalName();
            $fileName=uniqid().$fileName;

            $directory='front/notice/files/';
            $fileUrl=$directory.$fileName;

            $noticeFile->move($directory, $fileName);

            $noticeById->subject=$request->subject;
            $noticeById->notice_file=$fileUrl;
            $noticeById->published_status=$request->published_status;
            $noticeById->save();
        }else{
            $noticeById=Notice::find($request->notice_id);
            $noticeById->subject=$request->subject;
            $noticeById->published_status=$request->published_status;
            $noticeById->save();
        }

        return redirect('/manage-notice')->with('message', 'Notice File Successfully Update');
    }

    public function deleteNotic($id){
        $noticeById=Notice::find($id);
        //return $noticeById;
        $notice_file=$noticeById->notice_file;
        if (file_exists($notice_file)){
            unlink($notice_file);
        }
        $noticeById->delete();
        return redirect('/manage-notice')->with('message','Notice Successfully Deleted');
    }
}
