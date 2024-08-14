<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    function categorystore(){
        $categorys = Category::all();
        return view('backend.category',['categorys'=>$categorys]);

    }
    function categoryinsert(Request $request){
        $request->validate([
            'category_name' => 'required|unique:categories',
            'category_image' => 'required|file|max:5120|mimes:jpg,jpeg,png,bmp,gif,webp',


        ], [
            'category_name.required' => 'Entry this name',
            'category_image.required' => 'Entry this Image',
            'category_image.image' => 'Image Formate Plz',
        ]);
        $image_name = str_replace('', '-', str::lower($request->category_name)) . '-' . rand(1000000, 99999999);
        $upload_file = $request->category_image;
        $extension = $upload_file->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
        $new_name = $image_name . "." . $extension;
        $img = $manager->read($upload_file);
        $img->tojpeg(200)->save(base_path('public/categoryimage/' . $new_name));
        Category::insert([
            'category_name' => $request->category_name,
            'addedby' => Auth::id(),
            'category_image' => $new_name,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }
    function categorydelete($id) {
        $image_delete = Category::where('id', $id)->first()->category_image;
        $delete_for_file = public_path('categoryimage/' . $image_delete );
      unlink($delete_for_file);
        Category::find($id)->delete();
        return back();
    }
}
