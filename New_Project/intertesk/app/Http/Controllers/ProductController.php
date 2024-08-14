<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Thumbnail_Image;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    function product_page()
    {
        $categorys = Category::all();
        $sub_categorys = Subcategory::all();
        $products = Product::all();

        return view('backend\product', ['categorys' => $categorys, 'sub_categorys' => $sub_categorys,'products'=>$products]);
    }
    function product_store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_reguler_price' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'preview' => 'required|file|max:5120|mimes:jpg,jpeg,png,bmp,gif,webp',


        ], [
            'product_name.required' => 'Entry this Product  name',
            'product_reguler_price.required' => 'Entry this Must Be Product Reguler Price ',
            'short_description.required' => 'Entry this Product  Short Description',
            'long_description.required' => 'Entry this Product long Description',
            'preview.required' => 'Entry this Product Preview',
        ]);

        $image_name = str_replace('', '-', str::lower($request->product_name)) . '-' . rand(1000000, 99999999);
        $upload_file = $request->preview;
        $extension = $upload_file->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
        $new_name = $image_name . "." . $extension;
        $img = $manager->read($upload_file);
        $img->tojpeg(200)->save(base_path('public/product/' . $new_name));
        $product_id = Product::insertGetId([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'product_name' => $request->product_name,
            'product_reguler_price' => $request->product_reguler_price,
            'product_discount_price' => $request->product_discount_price,
            'product_after_discount_price' => ($request->product_reguler_price - ($request->product_reguler_price * $request->product_discount_price) / 100),
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'preview' => $new_name,
            'product_slug' => str_replace('', '-', Str::lower($request->product_name)) . '-' . rand(1000000, 99999999),
            'created_at' => Carbon::now(),
        ]);

        $thumbnail_loads = $request->thumbnails;
        foreach ($thumbnail_loads as $thumbnail_load) {
            $image_name = str_replace('', '-', str::lower($request->product_name)) . '-' . rand(1000000, 99999999);
            $extension = $thumbnail_load->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $new_name = $image_name . "." . $extension;
            $img = $manager->read($thumbnail_load);
            $img->tojpeg(200)->save(base_path('public/product/product_tham' . $new_name));
            Thumbnail_Image::insert([
                'product_id' => $product_id,
                'thumbnails' => $new_name,
                'created_at' => Carbon::now(),
            ]);
        }
        return back();
    }
}
