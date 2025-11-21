<?php

namespace App\Http\Controllers\RolePermission;

use App\Models\User;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;


class RolePermissionController extends Controller
{
    //*createUser
    public function createUser(){
        return view('backend.rolePermission.createUser');
    }

    //*storeUser
    public function storeUser(Request $request){
        // dd( $request->all());
         $request->validate([
            // 'user_image' => 'required|max:2000|png,jpg,webp',
            'user_image' => 'required|mimes:png,jpg,jpeg,webp|max:2000',
            'user_name' => 'required',
            'user_email' => 'required',
            'user_password' => 'required|min:6',
         ]);

         if( $request->user_password !=  $request->user_confirm_password){
            return back()->with('pass_error', 'confirm password not matched!');
         }

         $userInfo = new User();

         if($request->hasFile('user_image')){
            $image = $request->file('user_image');
            $uniName = 'user-image-' . time() . '-' . $image->getClientOriginalName();
            $image->storeAs('profileImages/', $uniName, 'public');
            $userInfo ->profile_image = $uniName;
         }

         $userInfo->name = $request->user_name;
         $userInfo->email = $request->user_email;
         $userInfo->email = $request->user_email;
         $userInfo->password = Hash::make($request->user_password);
         $userInfo->save();
        //  * SweetAlert notification
        Swal::success([
        'title' => 'New user added successfully!',
           ]);
        return back();
    }


    //* listUsers
    public function listUsers(){
        $users = User::latest()->get();
        return view('backend.rolePermission.listUser', compact('users'));
    }

    //* editUsers
    public function editUsers($id){
        $editUser = User::find($id);
        // dd($editUser);
        return view('backend.rolePermission.editUser', compact('editUser'));
    }

    //* updateUser
    public function updateUser(Request $request, $id){
        // dd($request->all());
         $request->validate([
            'user_name' => 'required',
            'user_email' => 'required',
            'user_password' => 'required|min:6',
         ]);

         if( $request->user_password !=  $request->user_confirm_password){
            return back()->with('pass_error', 'confirm password not matched!');
         }

         $userInfo = User::find($id);

         if($request->hasFile('user_image')){
            $image = $request->file('user_image');
            $uniName = 'user-image-' . time() . '-' . $image->getClientOriginalName();
            $image->storeAs('profileImages/', $uniName, 'public');
            $userInfo ->profile_image = $uniName;
         }

         $userInfo->name = $request->user_name;
         $userInfo->email = $request->user_email;
         $userInfo->email = $request->user_email;
         $userInfo->password = Hash::make($request->user_password);
         $userInfo->save();
        //  * SweetAlert notification
        Swal::success([
        'title' => 'User Info Updated successfully!',
           ]);
        return back();
    }

    //* deleteUser
    public function deleteUser($id){
        User::find($id)->delete();
        // toastr()->success('User Deleted Successfully!');
        //  * SweetAlert notification
        Swal::success([
        'title' => 'User Deleted Successfully!',
           ]);
        return back();
    }

    //* roleList
    public function roleList($id){
        $user = User::find($id);
        $roles = Role::latest()->get();
        return view('backend.rolePermission.roleList', compact('roles' ,'user'));
    }

    //* roleListStore
    public function roleListStore(Request $request){
        $user = User::find($request->user_id);
        $user->syncRoles($request->roles);
          //  * SweetAlert notification
        Swal::success([
        'title' => 'Role Assigned Successfully!',
           ]);
        return back();
    }


    //* createRole
    public function createRole(){
        return view('backend.rolePermission.createRole');
    }

    //* createRoleStore
    public function createRoleStore(Request $request){
    //   dd($request->all());
      $role = new Role();
      $role->name = $request->role_name;
      $role->guard_name = 'web';
      $role->save();
      //  * SweetAlert notification
        Swal::success([
        'title' => 'Role Created Successfully!',
           ]);
    return back();
    }


    //*allRoles
    public function allRoles(){
        $roles = Role::get();
        return view('backend.rolePermission.allRoles', compact('roles'));
    }

//* PENDING    //* editRole
    public function editRole($id){
    $editRole = User::find($id);
    dd($editRole);
    }

    //* deleteRole
    public function deleteRole($id){
    User::find($id)->delete();
    //  * SweetAlert notification
        Swal::success([
        'title' => 'Role Deleted Successfully!',
           ]);
    return back();
    }

    //* permissions
    public function permissions($id){
        $role = Role::find($id);
        $permissions = Permission::latest()->get();
        return view('backend.rolePermission.permissions', compact('role', 'permissions'));
    }

    //*permissionsStore
    public function permissionsStore(Request $request){
    //   dd($request->all());
      $role = Role::find($request->role_name);
      $role->syncPermissions($request->permissions);
      //  * SweetAlert notification
        Swal::success([
        'title' => 'Permissions Assigned Successfully!',
           ]);
        return back();
    }








}


