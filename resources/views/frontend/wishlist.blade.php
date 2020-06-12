@extends('layouts.frontend.app')

@section('title')
    Wishlist
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
         <h2>Wishlist Page</h2>
         <ol class="breadcrumb">
           <li><a href="index.html">Home</a></li>                   
           <li class="active">Wishlist</li>
         </ol>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->
 
  <!-- Cart view section -->
  <section id="cart-view">
    <div class="container">
    @if (Cart::instance('wishlist')->count() > 0)
      <div class="row">
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table aa-wishlist-table">
                <div class="table-responsive">
                   <table class="table">
                     <thead>
                       <tr>
                         <th></th>
                         <th></th>
                         <th>Product</th>
                         <th>Price</th>
                         <th>Stock Status</th>
                         <th></th>
                       </tr>
                     </thead>
                     <tbody>
                      @foreach (Cart::instance('wishlist')->content() as $item)
                       <tr>
                         <td>
                             <form style="display:inline-block;" method='POST' action='{{route("wishlist.destroy", $item->rowId)}}' >
                                @csrf
                                @method('DELETE')
                                <button title="Delete" type="submit" style="background-color:#F5F5F5; border:none;" class="remove"><fa class="fa fa-close"></fa></button>
                             </form>
                         </td>
                         <td><a href="{{ route('shop.show', $item->model->slug)}}"><img src="{{ asset('storage/' . $item->model->image) }}" alt="img"></a></td>
                         <td><a class="aa-cart-title" href="{{ route('shop.show', $item->model->slug)}}">{{$item->model->name}}</a></td>
                         <td>${{$item->model->price}}</td>
                         <td>In Stock</td>
                         <td>
                             <form style="display:inline-block;" method='POST' action='{{route("wishlist.switchtocart", $item->rowId)}}' >
                                @csrf
                                <button type="submit" style="background-color:#fff" class="aa-add-to-cart-btn">Add To Cart</button>
                             </form>
                         </td>
                       </tr>
                       @endforeach
                   
                       </tbody>
                   </table>
                 </div>           
            </div>
          </div>
        </div>
      </div>
      @else
      <h3>Wishlist items (0)</h3>
      <a class="aa-browse-btn" href="{{ route('shop.index')}}">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
      @endif
    </div>
  </section>
  <!-- / Cart view section -->

  @include('layouts.frontend.subsection')

  @endsection