@extends('layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
      <div class="row">
          <div class="col-12 text-center">
              <h1 class="display-4 text-uppercase text-white">About Us</h1>
              <a href="">Home</a>
              <i class="far fa-square text-primary px-2"></i>
              <a href="">About</a>
          </div>
      </div>
  </div>
  <!-- Page Header End -->


  <!-- About Start -->
  <div class="container-fluid pt-5">
      <div class="container">
          <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
              <h2 class="text-primary font-secondary">Login</h2>
          </div>
          <div class="row gx-5">
            <form method="post" action="{{ route('login.perform') }}">
        
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
                
                <h1 class="h3 mb-3 fw-normal">Login</h1>
        
                @include('partials.message')
        
                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="email" required="required" autofocus>
                    <label for="floatingName">Email</label>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                
                <div class="form-group form-floating mb-3">
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                    <label for="floatingPassword">Password</label>
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>
        
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                
            </form>
          </div>
      </div>
  </div>
  
  <!-- About End -->


  

@endsection