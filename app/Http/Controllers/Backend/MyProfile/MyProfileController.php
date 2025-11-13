<?php

namespace App\Http\Controllers\Backend\MyProfile;


use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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
            'email' => 'required',
        ]
        // ,[
        //     'designation.required' => 'koi?'
        // ]
    );
        $userInfo = Auth::user();
        $userInfo->name = $request->name;
        $userInfo->designation = $request->designation;
        $userInfo->email = $request->email;
        $userInfo->save();
        //* SweetAlert notification
       Swal::success([
       'title' => 'User Info Updated successfully!',
       ]);
        return back();
    }

   //* PASSWORD UPDATE
   public function profilePassword(Request $request){
    $userPass = Auth::user();
    if(!Hash::check($request->current_password, $userPass->password)){
       return back()->with('error', 'current password dose not match!');
    }
    if($request->new_password != $request->confirm_password){
        return back()->with('confirm_error', 'confirm password not match!');
    }else{
        $userPass->password = Hash::make($request->new_password);
        $userPass->save();
        //* SweetAlert notification
       Swal::success([
       'title' => 'User Password Updated successfully!',
       ]);
        return back();
    }
   }

   //* PROFILE IMAGE
   public function profileImage(Request $request){
    $userImage = Auth::user();
    if($request->hasFile('profile_image')){
        $image = $request->file('profile_image');
        $uniName = 'profile-' . time() . '-' . $request->profile_image->getClientOriginalName();
        $image->storeAs('profileImages/', $uniName, 'public');
        $userImage->profile_image = $uniName;
        $userImage->save();
        //* SweetAlert notification
       Swal::success([
       'title' => 'User Profile Image Upload successfully!',
       ]);
        return back();
    }
   }
}
