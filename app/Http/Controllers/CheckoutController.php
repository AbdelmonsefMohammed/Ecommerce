<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderProduct;
use App\Mail\OrderPlaced;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CheckoutRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
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
        return view('frontend.checkout',compact('discount','newSubtotal','newTax','newTotal'));
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
    public function store(CheckoutRequest $request)
    {
        //check race condition when there are less items available to purchase
        if($this->productsAreNoLongerAvailable())
        {
            return back()->with('errors','Sorry! One of the items in your cart is no longer available.');
        }
        
        $tax = config('cart.tax') / 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $code = session()->get('coupon')['name'] ?? null;
        $newSubtotal = (Cart::subtotal() - $discount);
        if($newSubtotal < 0){
            $newSubtotal = 0;
        }
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal + $newTax;


        $contents = Cart::content()->map(function ($item){
            return $item->model->slug.','.$item->qty;
        })->values()->toJson();
        try {
            $charge = Stripe::charges()->create([
                'amount' => $newTotal,
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' =>[
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),
                    'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]);
            //insert into order table
            
            $order = Order::create([
                'user_id'               =>  auth()->user() ? auth()->user()->id : null,
                'billing_email'         => $request->email,
                'billing_name'          => $request->name,
                'billing_address'       => $request->address,
                'billing_city'          => $request->city,
                'billing_town'          => $request->town,
                'billing_postalcode'    => $request->postalcode,
                'billing_phone'         => $request->phone,
                'billing_name_on_card'  => $request->name_on_card,
                'billing_discount'      => $discount,
                'billing_discount_code' => $code,
                'billing_subtotal'      => $newSubtotal,
                'billing_tax'           => $newTax,
                'billing_total'         => $newTotal,
                'error'                 => null,

            ]);

            //insert into prder_product table

            foreach (Cart::content() as $item) {
                OrderProduct::create([
                    'order_id'    => $order->id,
                    'product_id'  => $item->model->id,
                    'quantity'    => $item->qty,
                ]);
            }
            //send mail after success
            // Mail::send(new OrderPlaced($order));
            //decrease the quantity of the purchased products
            $this->decreaseQuantities();
            // Successful
            Cart::instance('default')->destroy();
            session()->forget('coupon');
            return redirect()->route('welcome')->with('success','Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {

            //insert into order table
            
            $order = Order::create([
                'user_id'               =>  auth()->user() ? auth()->user()->id : null,
                'billing_email'         => $request->email,
                'billing_name'          => $request->name,
                'billing_address'       => $request->address,
                'billing_city'          => $request->city,
                'billing_town'          => $request->town,
                'billing_postalcode'    => $request->postalcode,
                'billing_phone'         => $request->phone,
                'billing_name_on_card'  => $request->name_on_card,
                'billing_discount'      => $discount,
                'billing_discount_code' => $code,
                'billing_subtotal'      => $newSubtotal,
                'billing_tax'           => $newTax,
                'billing_total'         => $newTotal,
                'error'                 => $e->getMessage(),

            ]);

            //insert into prder_product table

            foreach (Cart::content() as $item) {
                OrderProduct::create([
                    'order_id'    => $order->id,
                    'product_id'  => $item->model->id,
                    'quantity'    => $item->qty,
                ]);
            }


            return back()->with('errors', $e->getMessage());
        }
    }

 
    protected function decreaseQuantities()
    {
        foreach (Cart::content() as $item) {
            $product = Product::findOrFail($item->model->id);
            $product->update(['quantity' => $product->quantity - $item->qty]);
        }
    }

    protected function productsAreNoLongerAvailable()
    {
        foreach (Cart::content() as $item) {
            $product = Product::findOrFail($item->model->id);
            if($product->quantity < $item->qty)
            {
                return true;
            }
        }
        return false;
    }
}
