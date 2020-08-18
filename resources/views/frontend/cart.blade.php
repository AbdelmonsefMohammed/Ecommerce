@extends('layouts.frontend.app')
@section('title')
    Cart
@endsection
@section('content')   

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="{{ asset('frontend') }}/img/header-bg.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>Cart Page</h2>
         <ol class="breadcrumb">
           <li><a href="index.html">Home</a></li>                   
           <li class="active">Cart</li>
         </ol>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->


    
  <!-- Cart view section -->
  <section id="cart-view">
    <div class="container">
      @if (Cart::count() > 0)
      <div class="row">
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table">
                <div class="table-responsive">
                   <table class="table">
                     <thead>
                       <tr>
                         <th></th>
                         <th></th>
                         <th></th>
                         <th>Product</th>
                         <th>Price</th>
                         <th>Quantity</th>
                         <th>Total</th>
                       </tr>
                     </thead>
                     <tbody id="cart_products">
                       
                       @foreach (Cart::content() as $item)
                           
                       <tr id="item{{$item->model->id}}">
                         <td>
                           <form style="display:inline-block;" method='POST' action='{{route("cart.destroy", $item->rowId)}}' >
                              @csrf
                              @method('DELETE')
                              <button title="Delete" type="submit" style="background-color:#F5F5F5; border:none;" class="remove"><fa class="fa fa-close"></fa></button>
                           </form>
                         </td>
                         <td>
                          <form style="display:inline-block;" method='POST' action='{{route("cart.switchtowishlist", $item->rowId)}}' >
                            @csrf
                            <button title="Add to wishlist" type="submit" style="background-color:#F5F5F5; border:none;color:#a5d549;"><fa class="fa fa-heart-o"></fa></button>
                         </form>

                         </td>
                         <td><a href="{{ route('shop.show', $item->model->slug)}}"><img src="{{ asset('storage/' . $item->model->image) }}" alt="img"></a></td>
                         <td><a class="aa-cart-title" href="{{ route('shop.show', $item->model->slug)}}">{{$item->model->name}}</a></td>
                         <td>${{$item->model->price}}</td>
                         <td><input class="aa-cart-quantity quantity" type="number" data-id="{{ $item->rowId }}" data-productQuantity="{{$item->model->quantity}}" value="{{$item->qty}}"></td>  
                          <td>${{$item->qty * $item->model->price}}</td>
                       </tr>
                       @endforeach


                       <tr>
                         <td colspan="7" class="aa-cart-view-bottom">
                          @if (!session()->has('coupon'))
                           <form action="{{ route('coupon.store')}}" method="POST">
                            @csrf
                           <div class="aa-cart-coupon">
                             <input class="aa-coupon-code" type="text" name="coupon_code" placeholder="Coupon">
                             <input class="aa-cart-view-btn" type="submit" value="Apply Coupon">
                           </div>
                          </form>
                          @endif

                           <a class="aa-cart-view-btn"  href="{{ route('cart.index')}}">Update Cart</a>
                         </td>
                       </tr>


                       </tbody>
                   </table>
                 </div>
              <!-- Cart Total view -->
              <div class="cart-view-total">
                <h4>Cart Totals</h4>
                <table class="aa-totals-table">
                  <tbody>
                    <tr>
                      <th>Subtotal</th>
                      <td>${{Cart::subtotal()}}</td>
                    </tr>
                    @if (session()->has('coupon'))
                    <tr>
                        <th>
                          <form style="display:inline-block;" method='POST' action='{{route("coupon.destroy")}}' >
                            @csrf
                            @method('DELETE')
                            <button title="Delete" type="submit" style="background-color:#F5F5F5; border:none;" ><fa class="fa fa-close" style="color:#ff0000;"></fa></button>
                          </form>
                          Discount({{session()->get('coupon')['name']}})
                        </th>
                        <td>-${{$discount}}</td>
                    </tr>
                    <tr>
                      <th>New Subtotal</th>
                      <td>${{$newSubtotal}}</td>
                    </tr>
                    @endif
                    <tr>
                      <th>Tax</th>
                      <td>${{$newTax}}</td>
                    </tr>
                    <tr>
                      <th>Total</th>
                      <td>${{$newTotal}}</td>
                    </tr>
                  </tbody>
                </table>
                <a href="{{ route('checkout.index')}}" class="aa-cart-view-btn">Proced to Checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @else
      <h3>Cart items (0)</h3>
      <a class="aa-browse-btn" href="{{ route('shop.index')}}">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
      @endif
    </div>
  </section>
  <!-- / Cart view section -->

 

  @include('layouts.frontend.subsection')

  @endsection

  @section('extra-js')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
     <script>
       (function(){
           const classname = document.querySelectorAll('.quantity');
           
           Array.from(classname).forEach(function(element){
              element.addEventListener('change' , function(){
                const id = element.getAttribute('data-id')
                const productQuantity = element.getAttribute('data-productQuantity')
                axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function (response) {
                         console.log(response);
                        // window.location.href = '{{ route('cart.index') }}';
                    })
                    .catch(function (error) {
                        //console.log(error);
                        // window.location.href = '{{ route('cart.index') }}'
                    });
              })
           });
       })();
     </script>
  @endsection