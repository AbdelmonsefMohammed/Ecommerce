<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->paginate(12);
        return view('frontend.shop',compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        $mightalsolike = Product::where('slug', '!=' ,$slug)->inRandomOrder()->take(8)->get();
        return view('frontend.product',compact('product','mightalsolike'));
    }
}
