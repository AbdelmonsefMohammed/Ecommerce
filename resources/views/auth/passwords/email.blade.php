@extends('layouts.frontend.app')

@section('content')
<section id="aa-myaccount">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="aa-myaccount-area">         
             <div class="row" style="display: flex; justify-content: center;">
               <div class="col-md-8 col-sm-8 col-xs-10">
                 <div class="aa-myaccount-login">
                 <h4>Reset Password</h4>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="aa-login-form" method="POST" action="{{ route('password.email') }}">
                        @csrf
                   <label for="email">Email address<span>*</span></label>
                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                   @error('email')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror 

                     <button type="submit" class="aa-browse-btn">Send Password Reset Link</button>
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
