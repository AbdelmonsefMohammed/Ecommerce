@extends('layouts.frontend.app')
@section('title')
    Shop
@endsection

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

                  
                   <span for="">Sort by price</span>
                  
                    <div  class="dropdown" style="display:inline-block;background-color:#fff;border:1px solid;margin-right:15px">
                      <a class="btn dropdown-toggle" style="padding:0 15px 0 0" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        {{request()->sort? request()->sort : 'Default'}}
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="{{route('shop.index', ['category'=> request()->category, 'tag' => request()->tag, 'sort' => 'low_high', 'paginate' => request()->paginate])}}">Low to High</a></li>
                        <li><a href="{{route('shop.index', ['category'=> request()->category, 'tag' => request()->tag, 'sort' => 'high_low', 'paginate' => request()->paginate])}}">High to Low</a></li>
                      </ul>
                    </div>


                    <span for="">show</span>
                    <div class="dropdown" style="display:inline-block;background-color:#fff;border:1px solid">
                      <a class="btn dropdown-toggle" style="padding:0 15px 0 0" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        {{request()->paginate? request()->paginate : 12}}
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="{{route('shop.index', ['category'=> request()->category, 'tag' => request()->tag, 'sort' => request()->sort, 'paginate' => 12])}}">12</a></li>
                        <li><a href="{{route('shop.index', ['category'=> request()->category, 'tag' => request()->tag, 'sort' => request()->sort, 'paginate' => 24])}}">24</a></li>
                        <li><a href="{{route('shop.index', ['category'=> request()->category, 'tag' => request()->tag, 'sort' => request()->sort, 'paginate' => 36])}}">36</a></li>
                      </ul>
                    </div>

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
                     <a class="aa-product-img" href="{{ route('shop.show', $product->slug)}}"><img style="width:250px;height:300px" src="{{ asset('storage/' . $product->image) }}" alt="polo shirt img"></a>
                     {{-- <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a> --}}
                     @if ($product->quantity > 0)
                          <form id="cart_form" method="POST" class="aa-add-card-btn" action="{{route('cart.store')}}">
                          @csrf
                          <input type="hidden" name="id" value="{{$product->id}}">
                          <input type="hidden" name="name" value="{{$product->name}}">
                          <input type="hidden" name="price" value="{{$product->price}}">
                          <input type="hidden" name="weight" value="{{$product->weight}}">
                          <button type="submit" style="background-color: black;border: none;text-transform: uppercase;" ><span class="fa fa-shopping-cart"></span>Add To Cart</button>
                          </form>
                     @endif
                     <figcaption>
                       <h4 class="aa-product-title"><a href="{{ route('shop.show', $product->slug)}}">{{$product->name}}</a></h4>
                       <span class="aa-product-price">${{$product->price}}</span>
                       <p class="aa-product-descrip">Avilability: <span style="color:{{getStockLevel($product->quantity)[1]}}">
                        {{getStockLevel($product->quantity)[0]}}?></span></p>
                       <p class="aa-product-descrip">{{$product->details}}</p>
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
                   {{-- <span class="aa-badge aa-sold-out" href="#">Sold Out!</span> --}}
                   {{-- <span class="aa-badge aa-hot" href="#">HOT!</span> --}}
                 </li>

                 @endforeach
                                        
               </ul>

 
              <!-- quick view modal --> 
               @foreach ($products as $product)
                    @include('layouts.frontend.quickmodelview')
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
    function submitform()
    {
    document.getElementById("orderby").submit();
    }
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