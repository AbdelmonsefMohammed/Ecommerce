<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class WelcomePageController extends Controller
{
    public function index()
    {
        $categories = Category::get()->take(4);

        $featuredproducts   = Product::where('featured', true)->take(8)->get();

        $latestproducts     = Product::orderBy('id','desc')->take(8)->get();
        return view('welcome',compact('categories','featuredproducts','latestproducts'));
    }
}
