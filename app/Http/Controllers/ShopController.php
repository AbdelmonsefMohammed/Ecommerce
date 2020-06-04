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
        if(request()->category){
            $products = Product::with('category')->whereHas('category', function($query){
                $query->where('name', request()->category);
            });
            $pagename = optional(Category::where('name', request()->category)->first())->name;
        }else{
            $products = Product::inRandomOrder();
            $pagename = 'Products';
        }

        //if there is tag
        if(request()->tag){
            $products = $products->whereHas('tags', function($query){
                $query->where('name', request()->tag);
            });
        }else{
            $products = $products;
        }

        // if there is sorting from high to low or from low to high
        if (request()->sort == 'low_high') {
            $products = $products->orderBy('price');
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc');
        } else {
            $products = $products;
        }

        // if there is pagination
        if(request()->paginate){
            $pagination = request()->paginate;
            $products = $products->paginate($pagination);
        }else {
            $products = $products->paginate(12);
        }
        
        return view('frontend.shop',compact('products','pagename'));
    }

    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        $mightalsolike = Product::where('slug', '!=' ,$slug)->inRandomOrder()->take(8)->get();
        return view('frontend.product',compact('product','mightalsolike'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3', 
           ]);
        $query = $request->input('query');
        $products = Product::search($query)->paginate(12);
        return view('frontend.search-results', compact('products'));
    }
}
