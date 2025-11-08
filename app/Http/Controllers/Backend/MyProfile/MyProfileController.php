<?php

namespace App\Http\Controllers\Backend\MyProfile;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    //* VIEW MY PROFILE
    public function view(){
        $user = Auth::user();
        return view('backend.myProfile.profileView' , compact('user'));
    }

    //* MY PROFILE INFO STORE
    public function profileInfo(Request $request){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'email' => 'required|unique:users,email',
        ]);
        $userInfo = Auth::user();
        $userInfo->designation = $request->designation;
        $userInfo->email = $request->email;
        $userInfo->save();
        return back();
    }
}
