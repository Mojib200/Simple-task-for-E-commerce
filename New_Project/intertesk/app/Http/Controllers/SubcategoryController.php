<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
class SubcategoryController extends Controller
{
    function sub_category()
    {
        $categorys = Category::All();
        $sub_categorys = Subcategory::All();
        return view('backend.subcategory', ['categorys' => $categorys,'sub_categorys'=> $sub_categorys]);
    }
    function sub_category_store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'sub_category_name' => 'required',
            'sub_category_image' => 'required|file|max:5120|mimes:jpg,jpeg,png,bmp,gif,webp',
        ], [
            'category_id.required' => 'Entry this Category Id Selecte ',
            'sub_category_name.required' => 'Entry this name',
            'sub_category_image.required' => 'Entry this Image',
            'sub_category_image.image' => 'Image Formate Plz',
        ]);
        $image_name = str_replace('', '-', str::lower($request->sub_category_name)) . '-' . rand(1000000, 99999999);
        $upload_file = $request->sub_category_image;
        $extension = $upload_file->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
        $new_name = $image_name . "." . $extension;
        $img = $manager->read($upload_file);
        $img->tojpeg(200)->save(base_path('public/subcategory/' . $new_name));
        Subcategory::insert([
            'category_id' => $request->category_id,
            'sub_category_name' => $request->sub_category_name,
            'sub_category_image' => $new_name,
            'addedby' => Auth::id(),
            'created_at' => Carbon::now(),
        ]);
        return back();
    }
    function sub_category_delete($id)
    {
        $sub_category_image = Subcategory::find($id)->sub_category_image;
        $delete = public_path('subcategory/' . $sub_category_image);
        unlink($delete);
      Subcategory::find($id)->forceDelete();
        return back();
    }
}
