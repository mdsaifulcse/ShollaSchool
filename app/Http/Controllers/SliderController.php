<?php

namespace App\Http\Controllers;
use App\Sliders;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller
{
    public function showSliderForm(){
        return view('admin.slider.slider-form');
    }

    public function saveSliderInfo(Request $request){

        $sliderImage=$request->file('slider_image');
        $imageName=$sliderImage->getClientOriginalName();
        $imageName=uniqid().$imageName;
        $this->validate($request, [
            'slider_image'=>'required|image:jpeg,png,gif,svg|max:1024'
        ]);

        $directory='front/img/slider/';
        $imgUrl=$directory.$imageName;
        Image::make($sliderImage)->resize(800, 533)->save($imgUrl);

        $sliders= new Sliders();
        $sliders->title=$request->title;
        $sliders->caption=$request->caption;
        $sliders->slider_image=$imgUrl;
        $sliders->published_status=$request->published_status;
        $sliders->save();
        return redirect('/add-slider')->with('message','Slider Image Successfully Saved');
    }

    public function manageSliderInfo(){
        $sliders=Sliders::all();
        return view('admin.slider.manage-slider',['sliders'=>$sliders]);
    }

    public function unpublishedSlider($id){
        $sliderById=Sliders::find($id);
        $sliderById->published_status=0;
        $sliderById->save();
        return redirect('/manage-slider')->with('message','Slider Successfully Unpublished');
    }
    public function publishedSlider($id){
        $sliderById=Sliders::find($id);
        $sliderById->published_status=1;
        $sliderById->save();
        return redirect('/manage-slider')->with('message','Slider Successfully Published');
    }

    public function editSlider($id){
        $sliderInfById=Sliders::find($id);
        return view('admin.slider.edit-slider', ['sliderInfById'=>$sliderInfById]);
    }

    public function updateSliderInfo(Request $request){
        $sliderImage=$request->file('slider_image');
        if ($sliderImage){
            $slider=Sliders::find($request->slider_id);
            $this->validate($request, [
                'slider_image'=>'required|image:jpeg,png,gif,svg|max:1024'
            ]);

            if (file_exists($slider->slider_image)){
                unlink($slider->slider_image);
            }


            $imageName=$sliderImage->getClientOriginalName();
            $imageName=uniqid().$imageName;
            $directory='front/img/slider/';
            $imgUrl=$directory.$imageName;
            Image::make($sliderImage)->resize(800, 533)->save($imgUrl);

            $slider->title=$request->title;
            $slider->caption=$request->caption;
            $slider->slider_image=$imgUrl;
            $slider->published_status=$request->published_status;
            $slider->save();
        }else{
            $slider=Sliders::find($request->slider_id);
            $slider->title=$request->title;
            $slider->caption=$request->caption;
            $slider->published_status=$request->published_status;
            $slider->save();
        }
        return redirect('/manage-slider')->with('message','Slider Update Successfull');

    }

    public function deleteSlider($id){
        $sliderById=Sliders::find($id);
        $slider_image=$sliderById->slider_image;
        if (file_exists($slider_image)){
            unlink($slider_image);
        }
        $sliderById->delete();
        return redirect('/manage-slider')->with('message','Slider Successfully Deleted');
    }
}
