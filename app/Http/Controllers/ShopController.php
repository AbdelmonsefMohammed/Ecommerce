<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Tag;
use App\Category;

class ShopController extends Controller
{
    public function index()
    {
        if(request()->tag){
            $products = Product::with('tags')->whereHas('tags', function($query){
                $query->where('name', request()->tag);
            })->paginate(12);
            $pagename = optional(Tag::where('name', request()->tag)->first())->name;
        }elseif(request()->category){
            $products = Product::with('category')->whereHas('category', function($query){
                $query->where('name', request()->category);
            })->paginate(12);
            $pagename = optional(Category::where('name', request()->category)->first())->name;
        }else{
            $products = Product::inRandomOrder()->paginate(12);
            $pagename = 'Products';
        }
        return view('frontend.shop',compact('products','pagename'));
    }

    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        $mightalsolike = Product::where('slug', '!=' ,$slug)->inRandomOrder()->take(8)->get();
        return view('frontend.product',compact('product','mightalsolike'));
    }
}
