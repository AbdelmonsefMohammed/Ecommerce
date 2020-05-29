<div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
    <aside class="aa-sidebar">
      <!-- single sidebar -->
      <div class="aa-sidebar-widget">
        <h3>Category</h3>
        <ul class="aa-catg-nav">
          <li><a href="{{route('shop.index')}}">All Categories</a></li>
          @foreach ($allcategories as $category)
            <li><a href="{{route('shop.index', ['category' => $category->name])}}">{{ucfirst(trans($category->name))}}</a></li>
          @endforeach  
        </ul>
      </div>
      <!-- single sidebar -->
      <div class="aa-sidebar-widget">
        <h3>Tags</h3>
        <div class="tag-cloud">
          @foreach ($tags as $tag)
          <a href="{{route('shop.index', ['tag' => $tag->name])}}">{{ucfirst(trans($tag->name))}}</a>
        @endforeach  

        </div>
      </div>
      <!-- single sidebar -->
      <div class="aa-sidebar-widget">
        <h3>Shop By Price</h3>              
        <!-- price range -->
        <div class="aa-sidebar-price-range">
         <form action="">
            <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
            </div>
            <span id="skip-value-lower" class="example-val">30.00</span>
           <span id="skip-value-upper" class="example-val">100.00</span>
           <button class="aa-filter-btn" type="submit">Filter</button>
         </form>
        </div>              

      </div>

      <!-- single sidebar -->
      {{-- <div class="aa-sidebar-widget">
        <h3>Top Rated Products</h3>
        <div class="aa-recently-views">
          <ul>
            <li>
              <a href="#" class="aa-cartbox-img"><img alt="img" src="{{ asset('frontend') }}/img/woman-small-2.jpg"></a>
              <div class="aa-cartbox-info">
                <h4><a href="#">Product Name</a></h4>
                <p>1 x $250</p>
              </div>                    
            </li>
            <li>
              <a href="#" class="aa-cartbox-img"><img alt="img" src="{{ asset('frontend') }}/img/woman-small-1.jpg"></a>
              <div class="aa-cartbox-info">
                <h4><a href="#">Product Name</a></h4>
                <p>1 x $250</p>
              </div>                    
            </li>
             <li>
              <a href="#" class="aa-cartbox-img"><img alt="img" src="{{ asset('frontend') }}/img/woman-small-2.jpg"></a>
              <div class="aa-cartbox-info">
                <h4><a href="#">Product Name</a></h4>
                <p>1 x $250</p>
              </div>                    
            </li>                                      
          </ul>
        </div>                            
      </div> --}}
    </aside>
  </div>