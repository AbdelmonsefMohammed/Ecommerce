@extends('layouts.frontend.app')
@section('title')
    Product
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
         <h2>T-Shirt</h2>
         <ol class="breadcrumb">
           <li><a href="index.html">Home</a></li>         
           <li><a href="#">Product</a></li>
           <li class="active">T-shirt</li>
         </ol>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->
 
   <!-- product category -->
   <section id="aa-product-details">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="aa-product-details-area">
             <div class="aa-product-details-content">
               <div class="row">
                 <!-- Modal view slider -->
                 <div class="col-md-5 col-sm-5 col-xs-12">                              
                   <div class="aa-product-view-slider">                                
                     <div id="demo-1" class="simpleLens-gallery-container">
                       <div class="simpleLens-container">
                         <div class="simpleLens-big-image-container"><a data-lens-image="{{ asset('storage/' . $product->image) }}" class="simpleLens-lens-image"><img src="{{ asset('storage/' . $product->image) }}" class="simpleLens-big-image"></a></div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- Modal view content -->
                 <div class="col-md-7 col-sm-7 col-xs-12">
                   <div class="aa-product-view-content">
                     <h3>{{ucfirst(trans($product->name))}}</h3>
                     <div class="aa-price-block">
                       <span class="aa-product-view-price">${{$product->price}}</span>
                       <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                     </div>
                     <p>{{$product->details}}</p>
                     <h4>Rating</h4>
                     <div class="aa-product-rating">
                       @for($i=0;$i<5;$i++)
                         @if ($i < $product->rating)
                             <span style="color:#ff6600" class="fa fa-star"></span>
                         @else
                             <span style="color:#ff6600" class="fa fa-star-o"></span>
                         @endif
                       @endfor
                     </div>
                     <div class="aa-prod-quantity">
                       <form action="">
                         <select id="" name="">
                           <option selected="1" value="0">1</option>
                           <option value="1">2</option>
                           <option value="2">3</option>
                           <option value="3">4</option>
                           <option value="4">5</option>
                           <option value="5">6</option>
                         </select>
                       </form>
                       <p class="aa-prod-category">
                         Category: <a href="{{route('shop.index', ['category' => $product->category->name])}}">{{$product->category->name}}</a>
                       </p>
                     </div>
                     <div class="aa-prod-view-bottom">
                       {{-- <a class="aa-add-to-cart-btn" href="#">Add To Cart</a> --}}
                       <form id="cart_form" method="POST" style="display:inline" action="{{route('cart.store')}}">
                          @csrf
                          <input type="hidden" name="id" value="{{$product->id}}">
                          <input type="hidden" name="name" value="{{$product->name}}">
                          <input type="hidden" name="price" value="{{$product->price}}">
                          <input type="hidden" name="weight" value="{{$product->weight}}">
                          <button type="submit" style="background-color:#fff" class="aa-add-to-cart-btn">Add To Cart</button>
                       </form>
                       <form id="wishlist_form" method="POST" style="display:inline" action="{{route('wishlist.store')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="name" value="{{$product->name}}">
                        <input type="hidden" name="price" value="{{$product->price}}">
                        <input type="hidden" name="weight" value="{{$product->weight}}">
                        <button type="submit" style="background-color:#fff" class="aa-add-to-cart-btn">Add To Wishlist</button>
                     </form>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="aa-product-details-bottom">
               <ul class="nav nav-tabs" id="myTab2">
                 <li><a href="#description" data-toggle="tab">Description</a></li>
                 <li><a href="#review" data-toggle="tab">Reviews</a></li>                
               </ul>
 
               <!-- Tab panes -->
               <div class="tab-content">
                 <div class="tab-pane fade in active" id="description">
                   <p>{!!$product->description!!}</p>
 
                 </div>
                 <div class="tab-pane fade " id="review">
                  <div class="aa-product-review-area">
                    <h4>2 Reviews for {{$product->name}}</h4> 
                    <ul class="aa-review-nav">
                      <li>
                         <div class="media">
                           <div class="media-left">
                             <a href="#">
                               <img class="media-object" src="{{ asset('frontend') }}/img/testimonial-img-3.jpg" alt="girl image">
                             </a>
                           </div>
                           <div class="media-body">
                             <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                             <div class="aa-product-rating">
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star-o"></span>
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                           </div>
                         </div>
                       </li>
                       <li>
                         <div class="media">
                           <div class="media-left">
                             <a href="#">
                               <img class="media-object" src="{{ asset('frontend') }}/img/testimonial-img-3.jpg" alt="girl image">
                             </a>
                           </div>
                           <div class="media-body">
                             <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                             <div class="aa-product-rating">
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star-o"></span>
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                           </div>
                         </div>
                       </li>
                    </ul>
                    <h4>Add a review</h4>
                    <div class="aa-your-rating">
                      <p>Your Rating</p>
                      <a href="#"><span class="fa fa-star-o"></span></a>
                      <a href="#"><span class="fa fa-star-o"></span></a>
                      <a href="#"><span class="fa fa-star-o"></span></a>
                      <a href="#"><span class="fa fa-star-o"></span></a>
                      <a href="#"><span class="fa fa-star-o"></span></a>
                    </div>
                    <!-- review form -->
                    <form action="" class="aa-review-form">
                       <div class="form-group">
                         <label for="message">Your Review</label>
                         <textarea class="form-control" rows="3" id="message"></textarea>
                       </div>
                       <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" class="form-control" id="name" placeholder="Name">
                       </div>  
                       <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                       </div>
 
                       <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                    </form>
                  </div>
                 </div>            
               </div>
             </div>
             <!-- Related product -->
             <div class="aa-product-related-item">
               <h3>Might also like ...</h3>
               <ul class="aa-product-catg aa-related-item-slider">
                 <!-- start single product item -->
                 @foreach ($mightalsolike as $product)
                     
                 <li>
                   <figure>
                     <a class="aa-product-img" href="{{ route('shop.show', $product->slug)}}"><img style="width:250px;height:300px" src="{{ asset('storage/' . $product->image) }}" alt="polo shirt img"></a>
                     <form id="cart_form" method="POST" style="display:inline" action="{{route('cart.store')}}">
                      @csrf
                      <input type="hidden" name="id" value="{{$product->id}}">
                      <input type="hidden" name="name" value="{{$product->name}}">
                      <input type="hidden" name="price" value="{{$product->price}}">
                      <input type="hidden" name="weight" value="{{$product->weight}}">
                      <button type="submit" style="width:100%;border:none" class="aa-add-card-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</button>
                      </form>
                      <figcaption>
                       <h4 class="aa-product-title"><a href="{{ route('shop.show', $product->slug)}}">{{$product->name}}</a></h4>
                        <span class="aa-product-price">${{$product->price}}</span>
                     </figcaption>
                   </figure>                     
                   <div class="aa-product-hvr-content">
                    <form id="wishlist_form" method="POST" style="display:inline; " action="{{route('wishlist.store')}}">
                      @csrf
                      <input type="hidden" name="id" value="{{$product->id}}">
                      <input type="hidden" name="name" value="{{$product->name}}">
                      <input type="hidden" name="price" value="{{$product->price}}">
                      <input type="hidden" name="weight" value="{{$product->weight}}">
                      <button style="background-color:#fff;border:none;width:36px;height:32px;;" data-toggle="tooltip" data-placement="top" title="Add to Wishlist" type="submit"><span class="fa fa-heart-o"></span></button>
                   </form>
                     <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#{{$product->id}}"><span class="fa fa-search"></span></a>                            
                   </div>
                   <!-- product badge -->
                   <span class="aa-badge aa-sale" href="#">SALE!</span>
                 </li>
                 @endforeach
                                       
               </ul>
               <!-- / quick view modal --> 
               @foreach ($mightalsolike as $product)
                                       
               <div class="modal fade quick-view-modal" id="{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">                      
                     <div class="modal-body">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                       <div class="row">
                         <!-- Modal view slider -->
                         <div class="col-md-6 col-sm-6 col-xs-12">                              
                           <div class="aa-product-view-slider">                                
                             <div class="simpleLens-gallery-container" id="demo-1">
                               <div class="simpleLens-container">
                                   <div class="simpleLens-big-image-container">
                                       <a class="simpleLens-lens-image" data-lens-image="{{ asset('storage/' . $product->image) }}">
                                           <img src="{{ asset('storage/' . $product->image) }}" class="simpleLens-big-image">
                                       </a>
                                   </div>
                               </div>
                             </div>
                           </div>
                         </div>
                         <!-- Modal view content -->
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="aa-product-view-content">
                             <h3 title="{{$product->name}}">{{\Str::limit($product->name, 28)}}</h3>
                             <div class="aa-price-block">
                               <span class="aa-product-view-price">${{$product->price}}</span>
                               <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                             </div>
                             <p>{{$product->details}}</p>
                             <h4>Rating</h4>
                             <div class="aa-product-rating">
                               @for($i=0;$i<5;$i++)
                                 @if ($i < $product->rating)
                                     <span style="color:#ff6600" class="fa fa-star"></span>
                                 @else
                                     <span style="color:#ff6600" class="fa fa-star-o"></span>
                                 @endif
                               @endfor
                             </div>
                             <div class="aa-prod-quantity">

                               <p class="aa-prod-category">
                                 Category: <a href="{{route('shop.index', ['category' => $product->category->name])}}">{{$product->category->name}}</a>
                               </p>
                             </div>
                             <div class="aa-prod-view-bottom">
                              <form id="cart_form" method="POST" style="display:inline" action="{{route('cart.store')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="name" value="{{$product->name}}">
                                <input type="hidden" name="price" value="{{$product->price}}">
                                <input type="hidden" name="weight" value="{{$product->weight}}">
                                <button type="submit" style="background-color:#fff" class="aa-add-to-cart-btn">Add To Cart</button>
                             </form>
                               <a href="{{ route('shop.show', $product->slug)}}  " class="aa-add-to-cart-btn">View Details</a>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>                        
                   </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
               </div><!-- / quick view modal --> 
               @endforeach
             </div>  
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- / product category -->

   @include('layouts.frontend.subsection')

   @endsection
 