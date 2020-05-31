@extends('layouts.frontend.app')

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
        <h2>Checkout Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Checkout</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
          <form action="{{route('checkout.store')}}" method="POST" id="payment-form">
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">

                    <!-- Shipping Address -->
                    @csrf
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Shippping Address
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                @auth
                                  <input type="text" name="email" placeholder="Email Address" value="{{ auth()->user()->email }}" readonly>
                                @else
                                  <input type="text" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                                @endauth

                              </div>                             
                            </div>                            
                          </div> 
                         <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                @auth
                                  <input name="name" type="text" placeholder="Name" value="{{ auth()->user()->name }}" readonly>
                                @else
                                  <input name="name" type="text" placeholder="Name" value="{{ old('name') }}" required>
                                @endauth
                              </div>                             
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input name="address" id="address" type="text" placeholder="Address" value="{{ old('address') }}" required>
                              </div>                             
                            </div>                            
                          </div>  
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input name="city" id="city" type="text" placeholder="City" value="{{ old('city') }}" required>
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input name="town" id="town" type="text" placeholder="Town" value="{{ old('town') }}" required>
                              </div>
                            </div>
                          </div>   
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input name="postalcode" id="postalcode" type="text" placeholder="Postalcode / ZIP" value="{{ old('postalcode') }}" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input name="phone" id="phone" type="text" placeholder="Phone" value="{{ old('phone') }}" required>
                              </div>                             
                            </div>
                          </div>             
                        </div>
                      </div>
                    </div>
                    <!-- Billing Details -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Billing Details
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input id="name_on_card" name="name_on_card" type="text" placeholder="Name on card" value="{{ old('name_on_card') }}" required>
                              </div>                             
                            </div>                            
                          </div> 




                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <div id="card-element">
                                  <!-- A Stripe Element will be inserted here. -->
                                </div>
                            
                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                              </div>                             
                            </div>                            
                          </div>
                          
                                   
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="checkout-right">
                  <h4>Order Summary</h4>
                  <div class="aa-order-summary-area">
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach (Cart::content() as $item)                  
                        <tr>
                            <td title="{{$item->model->name}}">{{\Str::limit($item->model->name,20)}}<strong> x  {{$item->qty}}</strong></td>
                          <td>${{$item->model->price}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Subtotal</th>
                          <td>${{Cart::subtotal()}}</td>
                        </tr>
                        @if (session()->has('coupon'))
                        <tr>
                            <th>
                              Discount ({{session()->get('coupon')['name']}})
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
                      </tfoot>
                    </table>
                  </div>
                  <h4>Payment Method</h4>
                  <div class="aa-payment-method">                    
                    <label for="cashdelivery"><input type="radio" id="cashdelivery" > Cash on Delivery </label>
                    <label for="paypal"><input type="radio" id="paypal"  checked> Via Paypal </label>
                    <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">    
                    <input type="submit" id="complete-order" value="Place Order" class="aa-browse-btn">                
                  </div>
                </div>
              </div>
            </div>
          </form>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

 @endsection

 @section('extra-js')
     
 <script>
   (function() {
     // Create a Stripe client.
var stripe = Stripe('pk_test_sQf3CUguSLYznFgdH9vl3A7r00pfBrMnvI');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {
  style: style,
  hidePostalCode: true,
  });

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  //disable the submit button after  click once
  document.getElementById('complete-order').disabled = true;

  var options = {
    name: document.getElementById('name_on_card').value,
    address_line1: document.getElementById('address').value,
    address_city: document.getElementById('city').value,
    address_state: document.getElementById('town').value,
    address_zip: document.getElementById('postalcode').value
  }

  stripe.createToken(card, options).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;

      //enable the submit button after  click once
       document.getElementById('complete-order').disabled = false;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
   })();
 </script>
 @endsection