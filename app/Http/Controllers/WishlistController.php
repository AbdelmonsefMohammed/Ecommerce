<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class WishlistController extends Controller
{
    public function index()
    {
        return view('frontend.wishlist');
    }

    public function store(Request $request)
    {   
        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id == $request->id;
        });
        if($duplicates->isNotEmpty()){
            return response()->json([
                'success' => false,
                'message' => 'Item exists in Wishlist!'
            ]);
        }
        Cart::instance('wishlist')->add($request->id, $request->name, 1, $request->price, $request->weight)->associate('App\Product');

        return response()->json([
            'success' => true,
            'message' => 'Item added to Wishlist!',

        ]);
    }

    public function destroy($id)
    {
        Cart::instance('wishlist')->remove($id);
        return back()->with('success','Item removed from Wishlist');
    }

    public function switchToCart($id)
    {   
        $item = Cart::instance('wishlist')->get($id);
        Cart::instance('wishlist')->remove($id);
        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId == $id;
        });
        if($duplicates->isNotEmpty()){
            return back()->with('info','Item exists in cart');
        }
        Cart::instance('default')->add($item->id, $item->name, 1, $item->price, $item->weight)->associate('App\Product');

        return redirect()->back()->with('success','Item moved to Cart');
    }
}
