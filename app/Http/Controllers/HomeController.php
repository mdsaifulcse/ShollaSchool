<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home.home-content');
    }

    // -------------- My Custome Code --------------(Md.Saiful Islam)
    protected function showAdminUpdateForm(){
        $user=User::all()->first();
        return view('admin.login.update-admin',['user'=>$user]);
    }

    protected function updateExistingAdminInfo(Request $request){
        $this->validate($request,
            [
                'name' => 'required|string|max:15',
                'mobile' => "required|digits:11|unique:users,id",
                'email' => "required|string|email|max:255|unique:users,id",
                'password' => 'required|string|min:6|confirmed',
            ]);
        $userById=User::find($request->user_id);
        $userById->name=$request->name;
        $userById->mobile=$request->mobile;
        $userById->email=$request->email;
        $userById->password=bcrypt($request->password);
        $userById->save();
        return redirect('/update-admin')->with('message', $userById->name.' | All Information Update Successfully !');
    }

}
