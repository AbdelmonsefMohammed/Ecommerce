  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="{{ asset('frontend') }}/img/flag/english.jpg" alt="english flag">ENGLISH
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="{{ asset('frontend') }}/img/flag/english.jpg" alt="">ENGLISH</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-usd"></i>USD
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-usd"></i>USD</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>00-56-658-658</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="#">My Account</a></li>
                  <li class="hidden-xs"><a href="{{route('wishlist.index')}}">Wishlist</a></li>
                  <li class="hidden-xs"><a href="{{route('cart.index')}}">My Cart</a></li>
                  <li class="hidden-xs"><a href="{{route('checkout.index')}}">Checkout</a></li>

                  @guest
                    <li class="hidden-xs"><a href="{{ route('login') }}">{{ __('Login') }}</a></li>

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                  @else
                  <li class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      {{ Auth::user()->name }}
                      <span class="caret"></span>
                    </a>
                    <ul style="min-width: 0;" class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <li style="padding: 0 7px;"><a style="border:none;" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                    
                    </li>
                    </ul>
                  </li>
                  @endguest


                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="{{route('welcome')}}">
                  <span class="fa fa-shopping-cart"></span>
                  <p>Elite<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="{{route('cart.index')}}">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
                  <span class="aa-cart-notify">{{Cart::instance('default')->count()}}</span>
                </a>
                @if (Cart::count() > 0)
                <div class="aa-cartbox-summary">
                  <ul>
                    @foreach (Cart::content()->take(3) as $item)
                        
                    <li>
                      <a class="aa-cartbox-img" href="{{ route('shop.show', $item->model->slug)}}"><img src="{{ asset('storage/' . $item->model->image) }}" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="{{ route('shop.show', $item->model->slug)}}">{{$item->model->name}}</a></h4>
                        <p>{{$item->qty}} x ${{$item->model->price}}</p>
                      </div>
                      {{-- <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a> --}}
                      <form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color:#F5F5F5;border:none" class="aa-remove-product"><span class="fa fa-times"></span></button>
                     </form>
                    </li> 
                    @endforeach                
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        ${{Cart::total()}}
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="{{route('checkout.index')}}">Checkout</a>
                </div>
                @endif
              </div>
              <!-- / cart box -->

              <!-- search box -->
              <div class="aa-search-box">
                <form action="{{route('search')}}" method="GET">
                  <input type="text" name="query" value="{{request()->input('query')}}" placeholder="Search here ex. 'man' ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->  

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="{{route('welcome')}}">Home</a></li>
              <li><a href="{{route('shop.index')}}">All Categories</a></li>
              @foreach ($allcategories as $category)
                <li><a href="{{route('shop.index', ['category' => $category->name])}}">{{ucfirst(trans($category->name))}}</a></li>
              @endforeach  
              <li><a href="#">Contact</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->