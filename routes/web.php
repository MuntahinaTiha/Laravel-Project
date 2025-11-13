<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\MyProfile\MyProfileController;
use App\Http\Controllers\RolePermission\RolePermissionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//* BACKEND ROUTES
Route::prefix('dashboard/')->name('dashboard.')->middleware(['auth', 'verified'])->group(function(){

    //* MY PROFILE ROUTES
    Route::get('my-profile', [MyProfileController::class,'view'])->name(name: 'my.profile.view');
    Route::post('my-profile-info', [MyProfileController::class,'profileInfo'])->name(name: 'my.profile.info');
    Route::post('my-profile-password', [MyProfileController::class,'profilePassword'])->name(name: 'my.profile.password');
    Route::post('my-profile-image', [MyProfileController::class,'profileImage'])->name(name: 'my.profile.image');


    //*ROLE & PERMISSION
    Route::prefix('role-permission/')->name('rolePermission.')->group(function(){
        Route::get('create-user', [RolePermissionController::class,'createUser'])->name(name: 'create.user');
        Route::post('create-user', [RolePermissionController::class,'storeUser'])->name(name: 'store.user');

    });


});


//* FRONTEND ROUTES

require __DIR__.'/auth.php';










