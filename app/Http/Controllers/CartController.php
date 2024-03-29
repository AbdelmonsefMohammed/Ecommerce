<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subtotal =str_replace( ',', '', Cart::subtotal() );
        $tax = config('cart.tax') / 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $newSubtotal = ($subtotal - $discount);
        if($newSubtotal < 0){
            $newSubtotal = 0;
        }
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal + $newTax;
        return view('frontend.cart',compact('discount','newSubtotal','newTax','newTotal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        Cart::add($request->id, $request->name, 1, $request->price, $request->weight)->associate('App\Product');
        return response()->json([
            'success' => true,
            'message' => 'Item added to your cart!',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'quantity'  =>  'required|numeric'
        ]);
        if($validator->fails()){
            session()->flash('errors','Quantity must be numerical.');
            return response()->json(['success' => false],400);
        }
        if($request->quantity > $request->productQuantity)
        {
            session()->flash('errors','Not enough items in stock!');
            return response()->json(['success' => false]);
        }

        Cart::update($id, $request->quantity);
        session()->flash('success','Cart updated successfully!');
        return response()->json(['success' => ture]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success','Item removed from cart');
    }

    public function switchToWishlist($id)
    {   
        $item = Cart::get($id);
        Cart::remove($id);
        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId == $id;
        });
        if($duplicates->isNotEmpty()){
            return back()->with('info','Item exists in Watchlist');
        }
        Cart::instance('wishlist')->add($item->id, $item->name, 1, $item->price, $item->weight)->associate('App\Product');

        return redirect()->back()->with('success','Item added to Wishlist');
    }
}
