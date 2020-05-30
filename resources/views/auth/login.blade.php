@extends('layouts.frontend.app')

@section('content')
<section id="aa-myaccount">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="aa-myaccount-area">         
             <div class="row">
               <div style="    left: 25%;" class="col-md-6">
                 <div class="aa-myaccount-login">
                 <h4>Login</h4>
                    <form class="aa-login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                   <label for="email">Email address<span>*</span></label>
                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                   @error('email')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror 
                   <label for="password">Password<span>*</span></label>
                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                   @error('password')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                     <button type="submit" class="aa-browse-btn">Login</button>
                     <label class="rememberme" for="rememberme"><input type="checkbox" name="remember" id="rememberme" {{ old('remember') ? 'checked' : '' }}> Remember me </label>
                     <p class="aa-lost-password">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Lost your password?') }}
                        </a>
                       @endif
                    </p>

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


