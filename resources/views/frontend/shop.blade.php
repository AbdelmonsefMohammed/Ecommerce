@extends('layouts.frontend.app')

@section('content')   

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  @include('layouts.frontend.categorybanner')

   <!-- product category -->
   <section id="aa-product-category">
     <div class="container">
       <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
           <div class="aa-product-catg-content">
             <div class="aa-product-catg-head">
               <div class="aa-product-catg-head-left">
                 <form action="" class="aa-sort-form">
                   <label for="">Sort by</label>
                   <select name="">
                     <option value="1" selected="Default">Default</option>
                     <option value="2">Name</option>
                     <option value="3">Price</option>
                     <option value="4">Date</option>
                   </select>
                 </form>
                 <form action="" class="aa-show-form">
                   <label for="">Show</label>
                   <select name="">
                     <option value="1" selected="12">12</option>
                     <option value="2">24</option>
                     <option value="3">36</option>
                   </select>
                 </form>
               </div>
               <div class="aa-product-catg-head-right">
                 <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                 <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
               </div>
             </div>
             <div class="aa-product-catg-body">
               <ul class="aa-product-catg">
                 <!-- start single product item -->
                 @foreach ($products as $product)
                     
                 <li>
                   <figure>
                     <a class="aa-product-img" href="{{ route('shop.show', $product->slug)}}"><img src="{{ asset('frontend') }}/img/women/girl-1.png" alt="polo shirt img"></a>
                     <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                     <figcaption>
                       <h4 class="aa-product-title"><a href="{{ route('shop.show', $product->slug)}}">{{$product->name}}</a></h4>
                       <span class="aa-product-price">${{$product->price}}</span><span class="aa-product-price"><del>$65.50</del></span>
                       <p class="aa-product-descrip">{{$product->details}}</p>
                     </figcaption>
                   </figure>                         
                   <div class="aa-product-hvr-content">
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                     <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#{{$product->id}}"><span class="fa fa-search"></span></a>                            
                   </div>
                   <!-- product badge -->
                   <span class="aa-badge aa-sale" href="#">SALE!</span>
                   {{-- <span class="aa-badge aa-sold-out" href="#">Sold Out!</span> --}}
                   {{-- <span class="aa-badge aa-hot" href="#">HOT!</span> --}}
                 </li>

                 @endforeach
                                        
               </ul>

 
              <!-- quick view modal --> 
               @foreach ($products as $product)
                                       
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
                                       <a class="simpleLens-lens-image" data-lens-image="{{ asset('frontend') }}/img/view-slider/large/polo-shirt-1.png">
                                           <img src="{{ asset('frontend') }}/img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
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
                             <h4>Size</h4>
                             <div class="aa-prod-view-size">
                               <a href="#">S</a>
                               <a href="#">M</a>
                               <a href="#">L</a>
                               <a href="#">XL</a>
                             </div>
                             <div class="aa-prod-quantity">

                               <p class="aa-prod-category">
                                 Category: <a href="#">{{$product->category->name}}</a>
                               </p>
                             </div>
                             <div class="aa-prod-view-bottom">
                               <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                               <a href="{{ route('shop.show', $product->slug)}}" class="aa-add-to-cart-btn">View Details</a>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>                        
                   </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
               </div> 
               @endforeach
               <!-- / quick view modal -->   
             </div>
             <div class="aa-product-catg-pagination">
               <nav>
                 <ul class="pagination">
                   <li>
                     <a href="#" aria-label="Previous">
                       <span aria-hidden="true">&laquo;</span>
                     </a>
                   </li>
                   <li><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li><a href="#">4</a></li>
                   <li><a href="#">5</a></li>
                   <li>
                     <a href="#" aria-label="Next">
                       <span aria-hidden="true">&raquo;</span>
                     </a>
                   </li>
                 </ul>
               </nav>
             </div>
           </div>
         </div>
@include('layouts.frontend.sidebar')
        
       </div>
     </div>
   </section>
   <!-- / product category -->

   @include('layouts.frontend.subsection')

@endsection