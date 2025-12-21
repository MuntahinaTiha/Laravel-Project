<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\Backend\MyProfile\MyProfileController;
use App\Http\Controllers\Backend\Product\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\RolePermission\RolePermissionController;



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
    Route::prefix('role-permission/')->middleware('can:edit')->name('rolePermission.')->group(function(){
        Route::get('create-user', [RolePermissionController::class,'createUser'])->name(name: 'create.user');
        Route::post('create-user', [RolePermissionController::class,'storeUser'])->name(name: 'store.user');
        Route::get('list-users', [RolePermissionController::class,'listUsers'])->name(name: 'list.users');
        Route::get('edit-users/{id}', [RolePermissionController::class,'editUsers'])->name(name: 'edit.user');
        Route::put('update-users/{id}', [RolePermissionController::class,'updateUser'])->name(name: 'update.user');
        Route::get('delete-users/{id}', [RolePermissionController::class,'deleteUser'])->name(name: 'delete.user');
        Route::get('create-role', [RolePermissionController::class,'createRole'])->name(name: 'create.role');
        Route::post('create-role', [RolePermissionController::class,'createRoleStore'])->name(name: 'create.role.store');
        Route::get('role-list/{id}', [RolePermissionController::class,'roleList'])->name(name: 'role.list');
        Route::post('role-list', [RolePermissionController::class,'roleListStore'])->name(name: 'role.list.store');
        Route::get('all-roles', [RolePermissionController::class,'allRoles'])->name(name: 'roles.all');
//* PENDING
        Route::get('edit-role/{id}', [RolePermissionController::class,'editRole'])->name(name: 'edit.role');

        Route::get('delete-role/{id}', [RolePermissionController::class,'deleteRole'])->name(name: 'delete.role');


        Route::get('permissions/{id}', [RolePermissionController::class,'permissions'])->name(name: 'permissions');
        Route::post('permissions', [RolePermissionController::class,'permissionsStore'])->name(name: 'permissions.store');

    });


    //* CATEGORY
    Route::prefix('category/')->name('category.')->group(function(){
        Route::get('/', [CategoryController::class,'index'])->name(name: 'index');
        Route::post('/', [CategoryController::class,'categoryStore'])->name(name: 'store');
        Route::get('/view', [CategoryController::class,'categoryView'])->name(name: 'view');
        Route::get('/edit/{slug}', [CategoryController::class,'categoryEdit'])->name(name: 'edit');
        Route::put('/update/{slug}', [CategoryController::class,'categoryUpdate'])->name(name: 'update');
        Route::get('delete/{id}', [CategoryController::class, 'categoryDelete'])->name('delete');
    });



    //* PRODUCTS
    Route::prefix('product')->name('product.')->group(function(){
        Route::get('/', [ProductController::class,'index'])->name(name: 'index');
        Route::post('/store', [ProductController::class,'store'])->name(name: 'store');
        Route::get('/show', [ProductController::class,'show'])->name(name: 'show');
        Route::get('/edit/{slug}', [ProductController::class,'edit'])->name(name: 'edit');
        Route::put('/update/{id}', [ProductController::class,'update'])->name(name: 'update');
        Route::get('/delete-image/{id}', [ProductController::class,'imageDelete'])->name(name: 'delete');

        Route::get('/delete/{id}', [ProductController::class,'deleteProduct'])->name(name: 'deleteProduct');

    });


});




//* FRONTEND ROUTES


Route::get('/', [FrontendController::class,'index'])->name(name: 'home.index');


require __DIR__.'/auth.php';










