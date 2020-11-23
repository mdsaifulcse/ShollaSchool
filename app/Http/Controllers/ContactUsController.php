<?php

namespace App\Http\Controllers;

use App\Contact_us;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUsInfo(){
        //$contactInfo=Contact_us::all()->first();
        return view('front.contact-us.contact-us');
    }

    public function editContactInfo($id){
        $contactInfo=Contact_us::find($id);
        return view('admin.contact-message.contact-info',['contactInfo'=>$contactInfo]);
    }

    public function manageContactUsInfo(){
        $contactInfo=Contact_us::all()->first();
        return view('admin.contact-message.manage-contact-info',['contactInfo'=>$contactInfo]);
    }

    public function updateContactInfo(Request $request){
        $contactUs=Contact_us::find($request->contact_id);
        $contactUs->content_address=$request->content_address;
        $contactUs->first_mobile=$request->first_mobile;
        $contactUs->second_mobile=$request->second_mobile;
        $contactUs->contact_email=$request->contact_email;
        $contactUs->save();
        return redirect('/manage-contact-info')->with('message','Contact Info Successfully Updated');
    }
}
