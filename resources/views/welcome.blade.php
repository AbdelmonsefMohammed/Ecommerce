{{-- Images --}}
{{-- src={{ asset('frontend/img/products/' . $product->slug . '.png') }} --}}

@extends('layouts.frontend.app')

@section('title')
    Home
@endsection

@section('content')
    @include('layouts.frontend.slider')    

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  
<!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="{{ asset('frontend') }}/img/carusel/promo-banner-women.jpg" alt="img">                    
                    <div class="aa-prom-content">
                      <span>New Arrivals</span>
                      <h4><a href="{{route('shop.index', ['category' => 'women'])}}">Women</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{ asset('frontend') }}/img/carusel/promo-banner-men.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Exclusive Item</span>
                        <h4><a href="{{route('shop.index', ['category' => 'men'])}}">Men</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{ asset('frontend') }}/img/carusel/promo-banner-sports.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>New Arrivals</span>
                        <h4><a href="{{route('shop.index', ['category' => 'sports'])}}">Sports</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{ asset('frontend') }}/img/carusel/promo-banner-electronics.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>New Arrivals</span>
                        <h4><a href="{{route('shop.index', ['category' => 'electronics'])}}">Electronics</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{ asset('frontend') }}/img/carusel/promo-banner-perfumes.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Comming soon</span>
                        <h4><a>Perfumes</a></h4>                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--    / Promo section   -->

    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="aa-product-area">
                  <div class="aa-product-inner">
                    <!-- start prduct navigation -->
                      <ul class="nav nav-tabs aa-products-tab">
                       @foreach ($categories as $category)
                        <li class="<?php if($loop->first){ echo 'active';} ?>"><a href="#{{$category->name}}" data-toggle="tab">{{$category->name}}</a></li>
                       @endforeach
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <!-- Start men product category -->
                        @foreach ($categories as $category)

                            
                        <div class="tab-pane fade<?php if($loop->first){ echo 'in active';} ?>" style="text-align: center;padding-bottom: 35px;" id="{{$category->name}}">

                          <ul class="aa-product-catg">
                            <!-- start single product item -->
                            @foreach ($category->products->take(8) as $product)
                            <li>
                              <figure>
                                <a class="aa-product-img" href="{{ route('shop.show', $product->slug)}}"><img style="width:250px;height:300px" src="{{ asset('storage/' . $product->image) }}" alt="{{$product->slug}} img"></a>
                                {{-- <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a> --}}
                                @if ($product->quantity > 0)
                                <form id="cart_form" method="POST" style="display:inline" action="{{route('cart.store')}}">
                                  @csrf
                                  <input type="hidden" name="id" value="{{$product->id}}">
                                  <input type="hidden" name="name" value="{{$product->name}}">
                                  <input type="hidden" name="price" value="{{$product->price}}">
                                  <input type="hidden" name="weight" value="{{$product->weight}}">
                                  <button type="submit" style="width:100%;border:none" class="aa-add-card-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</button>
                               </form>
                               @endif
                               
                                  <figcaption>
                                  <h4 title="{{$product->name}}" class="aa-product-title"><a href="{{ route('shop.show', $product->slug)}}">{{\Str::limit($product->name, 30)}}</a></h4>
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
                              {{-- <span class="aa-badge aa-sale" href="#">SALE!</span> --}}
                            </li>
                            @endforeach
                    
                          </ul>
                          <a class="aa-browse-btn" href="{{route('shop.index', ['category' => $product->category->name])}}">Browse more Product <span class="fa fa-long-arrow-right"></span></a>
                        </div>

                        @endforeach
                        <!-- / men product category -->



                        
 
                      <!-- quick view modal -->   
                      @foreach ($categories as $category)
                          @foreach ($category->products as $product)
                              @include('layouts.frontend.quickmodelview')
                          @endforeach
                      @endforeach    
                      <!-- / quick view modal -->             
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Products section -->


        <!-- banner section -->
  <section id="aa-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">        
          <div class="row">
            <div class="aa-banner-area">
            <a href="{{ route('shop.index')}}"><img src="{{ asset('frontend') }}/img/carusel/fashion-banner.jpg" alt="fashion banner img"></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- popular section -->
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                {{-- <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li> --}}
                <li class="active"><a href="#featured" data-toggle="tab">Featured</a></li>
                <li><a href="#latest" data-toggle="tab">Latest</a></li>                    
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                {{-- <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img style="width:250px;height:300px" src="{{ asset('frontend') }}/img/products/man-model-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">ssst</a></h4>
                          <span class="aa-product-price">$45.50</span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                                                                             
                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div> --}}
                <!-- / popular product category -->
                
                <!-- start featured product category -->
                <div class="tab-pane fade in active" id="featured">
                 <ul class="aa-product-catg aa-featured-slider">
                   @foreach ($featuredproducts as $product)
                       
                   <li>
                    <figure>
                      <a class="aa-product-img" href="{{ route('shop.show', $product->slug)}}"><img style="width:250px;height:300px" src="{{ asset('storage/' . $product->image) }}" alt="polo shirt img"></a>
                      {{-- <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a> --}}
                      <form id="cart_form" method="POST" style="display:inline" action="{{route('cart.store')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="name" value="{{$product->name}}">
                        <input type="hidden" name="price" value="{{$product->price}}">
                        <input type="hidden" name="weight" value="{{$product->weight}}">
                        <button type="submit" style="width:100%;border:none" class="aa-add-card-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</button>
                     </form>
                     
                        <figcaption>
                        <h4 title="{{$product->name}}" class="aa-product-title"><a href="{{ route('shop.show', $product->slug)}}">{{\Str::limit($product->name, 30)}}</a></h4>
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
                    {{-- <span class="aa-badge aa-sale" href="#">SALE!</span> --}}

                  </li>
                    @endforeach             
                  </ul>
                  <a class="aa-browse-btn" href="{{route('shop.index')}}">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / featured product category -->

                <!-- start latest product category -->
                <div class="tab-pane fade" id="latest">
                  <ul class="aa-product-catg aa-latest-slider">
                    
                    <!-- start single product item -->
                    @foreach ($latestproducts as $product)
                       
                    <li>
                     <figure>
                       <a class="aa-product-img" href="{{ route('shop.show', $product->slug)}}"><img style="width:250px;height:300px" src="{{ asset('storage/' . $product->image) }}" alt="polo shirt img"></a>
                       {{-- <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a> --}}
                       <form id="cart_form" method="POST" style="display:inline" action="{{route('cart.store')}}">
                         @csrf
                         <input type="hidden" name="id" value="{{$product->id}}">
                         <input type="hidden" name="name" value="{{$product->name}}">
                         <input type="hidden" name="price" value="{{$product->price}}">
                         <input type="hidden" name="weight" value="{{$product->weight}}">
                         <button type="submit" style="width:100%;border:none" class="aa-add-card-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</button>
                      </form>
                      
                         <figcaption>
                         <h4 title="{{$product->name}}" class="aa-product-title"><a href="{{ route('shop.show', $product->slug)}}">{{\Str::limit($product->name, 30)}}</a></h4>
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
                     {{-- <span class="aa-badge aa-sale" href="#">SALE!</span> --}}
 
                   </li>
                     @endforeach      
                    
                    
                  </ul>
                   <a class="aa-browse-btn" href="{{route('shop.index')}}">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / latest product category -->              
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 DAYS MONEY BACK</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->

@include('layouts.frontend.subsection')


@endsection


