<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\MyProfile\MyProfileController;
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

});


//* FRONTEND ROUTES

require __DIR__.'/auth.php';










