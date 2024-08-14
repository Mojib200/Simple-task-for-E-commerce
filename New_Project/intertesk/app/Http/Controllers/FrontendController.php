<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Thumbnail_Image;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;


class FrontendController extends Controller
{
    function index()
    {
        $categorys = Category::all();
        $products = Product::all();
        $featured_products = Product::latest()->take(5)->get();
        return view('frontend\index', [
            'categorys' => $categorys, 'products' => $products,
            'featured_products' => $featured_products,
        ]);
    }
}
