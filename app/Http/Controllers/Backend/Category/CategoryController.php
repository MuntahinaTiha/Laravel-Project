<?php

namespace App\Http\Controllers\Backend\Category;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
// use App\Models\Category\Category;
use SweetAlert2\Laravel\Swal;
use App\Models\Category\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //* index
    public function index(){
        $categories = Category::select('id','title')->get();
        return view('backend.category.index', compact('categories'));
    }

    //* categoryStore
    public function categoryStore(Request $request){
        $request->validate([
           'title' => "required"
        ]);

        $category = new Category();
        $category->title = $request->title;
        $category->slug = Str::slug($request->title) . uniqid();
        $category->category_id = $request->category_id;
        $category->meta_title = $request->meta_title;
        // $category->image = $request->category_id;

        // $categoryImage = new User();

        //  if($request->hasFile('user_image')){
        //     $image = $request->file('user_image');
        //     $uniName = 'user-image-' . time() . '-' . $image->getClientOriginalName();
        //     $image->storeAs('categoryImages/', $uniName, 'public');
        //     $categoryImage ->image = $uniName;
        //  }




        $category->description = $request->meta_description;
        $category->keywords = $request->meta_keywords;
        $category->save();
        //  * SweetAlert notification
        Swal::success([
        'title' => 'Category Addedd Successfully!',
           ]);
        return back();
    }


    //* categoryView
    public function categoryView(){
        $categories = Category::get();
        return view('backend.category.viewCategory', compact('categories'));
    }

    //* categoryDelete
    public function categoryDelete($id){
        Category::find($id)->delete();
        //  * SweetAlert notification
        Swal::success([
        'title' => 'Category Deleted Successfully!',
           ]);
        return back();
    }















}
