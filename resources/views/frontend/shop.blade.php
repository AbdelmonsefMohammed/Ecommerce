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

                  
                   <label for="">Sort by price</label>
                   <select name="">
                     <option value="1" selected="Default"></option>
                     <option value="2"><a href="#">Low to High</a></option>
                     <option value="3"><a href="#">High to Low</a></option>
                   </select>


                   <label for="">Show</label>
                   <select name="">
                     <option value="1" selected="12">12</option>
                     <option value="2">24</option>
                     <option value="3">36</option>
                   </select>

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
                     <a class="aa-product-img" href="{{ route('shop.show', $product->slug)}}"><img style="width:250px;height:300px" src="{{ asset('frontend') }}/img/products/{{$product->slug}}.png" alt="polo shirt img"></a>
                     {{-- <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a> --}}
                     <form method="POST" class="aa-add-card-btn" action="{{route('cart.store')}}">
                      @csrf
                      <input type="hidden" name="id" value="{{$product->id}}">
                      <input type="hidden" name="name" value="{{$product->name}}">
                      <input type="hidden" name="price" value="{{$product->price}}">
                      <input type="hidden" name="weight" value="{{$product->weight}}">
                      <button type="submit" style="background-color: black;border: none;text-transform: uppercase;" ><span class="fa fa-shopping-cart"></span>Add To Cart</button>
                      </form>
                     <figcaption>
                       <h4 class="aa-product-title"><a href="{{ route('shop.show', $product->slug)}}">{{$product->name}}</a></h4>
                       <span class="aa-product-price">${{$product->price}}</span>
                       <p class="aa-product-descrip">{{$product->details}}</p>
                     </figcaption>
                   </figure>                         
                   <div class="aa-product-hvr-content">
                    <form method="POST" style="display:inline; " action="{{route('wishlist.store')}}">
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
                                       <a class="simpleLens-lens-image" data-lens-image="{{ asset('frontend') }}/img/products/{{$product->slug}}.png">
                                           <img src="{{ asset('frontend') }}/img/products/{{$product->slug}}.png" class="simpleLens-big-image">
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
                              <form method="POST" style="display:inline" action="{{route('cart.store')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="name" value="{{$product->name}}">
                                <input type="hidden" name="price" value="{{$product->price}}">
                                <input type="hidden" name="weight" value="{{$product->weight}}">
                                <button type="submit" style="background-color:#fff" class="aa-add-to-cart-btn">Add To Cart</button>
                             </form>
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
                      {{$products->appends(request()->input())->links()}}
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

@section('extra-js')
    <script>
      jQuery(function(){

       var skipSlider = document.getElementById('skipstep');
        noUiSlider.create(skipSlider, {
            range: {
                'min': 0,
                '10%': 10,
                '20%': 20,
                '30%': 30,
                '40%': 40,
                '50%': 50,
                '60%': 60,
                '70%': 70,
                '80%': 80,
                '90%': 90,
                'max': 100
            },
            snap: true,
            connect: true,
            start: [20, 70]
        });
        // for value print
        var skipValues = [
          document.getElementById('skip-value-lower'),
          document.getElementById('skip-value-upper')
        ];

        skipSlider.noUiSlider.on('update', function( values, handle ) {
          skipValues[handle].innerHTML = values[handle];
        });
    });
    </script>
@endsection