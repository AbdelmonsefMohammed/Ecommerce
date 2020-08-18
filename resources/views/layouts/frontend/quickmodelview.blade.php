                                       
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
                                      <p class="aa-product-avilability">Avilability: <span style="color:{{getStockLevel($product->quantity)[1]}}">{{getStockLevel($product->quantity)[0]}}</span></p>
                                    </div>
                                    <p>{{$product->details}}</p>
                                    {{-- <h4>Size</h4>
                                    <div class="aa-prod-view-size">
                                      <a href="#">S</a>
                                      <a href="#">M</a>
                                      <a href="#">L</a>
                                      <a href="#">XL</a>
                                    </div> --}}
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
                                      {{-- <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a> --}}
                                      @if ($product->quantity > 0)
                                      <form id="cart_form" method="POST" style="display:inline" action="{{route('cart.store')}}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="hidden" name="name" value="{{$product->name}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        <input type="hidden" name="weight" value="{{$product->weight}}">
                                        <button type="submit" style="background-color:#fff" class="aa-add-to-cart-btn">Add To Cart</button>
                                     </form>
                                     @endif
                                      <a href="{{ route('shop.show', $product->slug)}}" class="aa-add-to-cart-btn">View Details</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>                        
                          </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                      </div>