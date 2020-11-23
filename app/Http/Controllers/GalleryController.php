<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Image;
class GalleryController extends Controller
{
    public function nationalEventsPhoto(){
        $nationalEventPhotos=Gallery::where('photo_event','national-event')->where('published_status',1)->get();
        return view('front.gallery.national-events-photo.national-events-photo',['nationalEventPhotos'=>$nationalEventPhotos]);
    }
    public function examEesultPhoto(){
        $examResultPhotos=Gallery::where('photo_event','exam-result')->where('published_status',1)->get();
        return view('front.gallery.exam-result-photo.exam-result-photo',['examResultPhotos'=>$examResultPhotos]);
    }
    public function studyTourPhoto(){
        $studyTourPhotos=Gallery::where('photo_event','study-tour')->where('published_status',1)->get();
        return view('front.gallery.study-tour-photo.study-tour-photo',['studyTourPhotos'=>$studyTourPhotos]);
    }
    public function culturalEventPhoto(){
        $culturalEventPhotos=Gallery::where('photo_event','cultural-event')->where('published_status',1)->get();
        return view('front.gallery.cultural-event-photo.cultural-event-photo',['culturalEventPhotos'=>$culturalEventPhotos]);
    }
    public function sportsPhoto(){
        $sportsPhotos=Gallery::where('photo_event','sports')->where('published_status',1)->get();
        return view('front.gallery.sports-photo.sports-photo',['sportsPhotos'=>$sportsPhotos]);
    }

    public function memoryPhoto(){
        $memoryPhotos=Gallery::where('photo_event','memory')->where('published_status',1)->get();
        return view('front.gallery.memory-photo.memory-photo',['memoryPhotos'=>$memoryPhotos]);
    }
    public function otherPhoto(){
        $otherPhotos=Gallery::where('photo_event','other')->where('published_status',1)->get();
        return view('front.gallery.other-photo.other-photo',['otherPhotos'=>$otherPhotos]);
    }



    public function showAddPhotoForm(){
        return view('admin.gallery.add-gallery-photo');
    }

    public function saveGalleryPhoto(Request $request){
        $this->validate($request,
            [
                'caption'=>'required|max:50',
                'gallery_photo'=>'required|image:jpeg,png,gif,svg|max:1024',
                'photo_event'=>'required',
            ]);

        $gallryImage=$request->file('gallery_photo');
        $imageName=$gallryImage->getClientOriginalName();
        $imageName=uniqid().$imageName;

        $directory='front/img/gallery/';
        $imgUrl=$directory.$imageName;
        Image::make($gallryImage)->save($imgUrl);

        $gallery=new Gallery();
        $gallery->caption=$request->caption;
        $gallery->gallery_photo=$imgUrl;
        $gallery->photo_event=$request->photo_event;
        $gallery->published_status=$request->published_status;
        $gallery->save();
        return redirect('add-photo')->with('message',$gallery->photo_event.' | Gallery Photo Save Successfully');
    }
    public function manageGalleryPhoto(){
        $galleryPhotos=Gallery::orderBy('id','desc')->get();
        return view('admin.gallery.manage-gallery-photo',['galleryPhotos'=>$galleryPhotos]);
    }

    public function unpublishedGalleryPhoto($id){
        $galleryPhotoById=Gallery::find($id);
        $galleryPhotoById->published_status=0;
        $galleryPhotoById->save();
        return redirect('manage-photo')->with('message',$galleryPhotoById->photo_event.' | Gallery Photo Unpublished Successfully');
    }

    public function publishedGalleryPhoto($id){
        $galleryPhotoById=Gallery::find($id);
        $galleryPhotoById->published_status=1;
        $galleryPhotoById->save();
        return redirect('manage-photo')->with('message',$galleryPhotoById->photo_event.' | Gallery Photo Published Successfully');
    }

    public function editGalleryPhotoForm($id){
        $galleryPhotoById=Gallery::find($id);
        return view('admin.gallery.edit-gallery-photo',['galleryPhotoById'=>$galleryPhotoById]);
    }

    public function updateGalleryPhotoForm(Request $request){
        $gallryImage=$request->file('gallery_photo');
        if ($gallryImage){
            $this->validate($request,
                [
                    'caption'=>'required|max:50',
                    'gallery_photo'=>'image:jpeg,png,gif,svg|max:1024',
                    'photo_event'=>'required',
                ]);
            $gallery=Gallery::find($request->gallery_photo_id);
            if (file_exists($gallery->gallery_photo)){
                unlink($gallery->gallery_photo);
            }

            $imageName=$gallryImage->getClientOriginalName();
            $imageName=uniqid().$imageName;

            $directory='front/img/gallery/';
            $imgUrl=$directory.$imageName;
            Image::make($gallryImage)->save($imgUrl);


            $gallery->caption=$request->caption;
            $gallery->gallery_photo=$imgUrl;
            $gallery->photo_event=$request->photo_event;
            $gallery->published_status=$request->published_status;
            $gallery->save();
        }else{
            $this->validate($request,
                [
                    'caption'=>'required|max:50',
                    'photo_event'=>'required',
                ]);
            $gallery=Gallery::find($request->gallery_photo_id);

            $gallryImage=$request->file('gallery_photo');

            $gallery->caption=$request->caption;
            $gallery->photo_event=$request->photo_event;
            $gallery->published_status=$request->published_status;
            $gallery->save();
        }
        return redirect('manage-photo')->with('message',$gallery->photo_event.' | Gallery Photo Save Successfully');

    }

    public function deleteGalleryPhoto($id){
        $galleryPhotoById=Gallery::find($id);
        if (file_exists($galleryPhotoById->gallery_photo)){
            unlink($galleryPhotoById->gallery_photo);
        }
        $galleryPhotoById->delete();
        return redirect('manage-photo')->with('message',$galleryPhotoById->photo_event.' | Gallery Photo Delete Successfully');
    }
}
