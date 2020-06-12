@extends('layouts.frontend.app')

@section('content')
<section id="aa-myaccount">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="aa-myaccount-area">         
          <div class="row"  style="display: flex; justify-content: center;">
            <div class="col-md-8 col-sm-8 col-xs-10">
                 <div class="aa-myaccount-login">
                 <h4>Register</h4>
                    <form class="aa-login-form" method="POST" action="{{ route('register') }}">
                        @csrf
                   <label for="name">Name<span>*</span></label>
                   <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                   @error('name')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror

                   <label for="email">Email address<span>*</span></label>
                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                   @error('email')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror  

                   <label for="password">Password<span>*</span></label>
                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                   @error('password')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror

                   <label for="password-confirm">Confirm Password<span>*</span></label>
                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                     <button type="submit" class="aa-browse-btn">Register</button>
                   </form>
                 </div>
               </div>
             </div>          
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection









