@extends('layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">About Us</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Register</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Register</h2>
            </div>
            <form method="post" action="{{ route('register.perform') }}">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="role" value="user" />

                <img class="mb-4"
                    src="https://www.michalsons.com/wp-content/uploads/2012/04/cryptography-provider-e1564149944821.jpg"
                    alt="" height="150">

                <h1 class="h3 mb-3 fw-normal">Register</h1>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                        placeholder="User Doe" required="required" autofocus>
                    <label for="floatingName">Full Name</label>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}"
                        placeholder="name@example.com" required="required" autofocus>
                    <label for="floatingEmail">Email Address</label>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                        placeholder="Password" required="required">
                    <label for="floatingPassword">Password</label>
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="password" class="form-control" name="password_confirmation"
                        value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                    <label for="floatingConfirmPassword">Confirm Password</label>
                    @if ($errors->has('password_confirmation'))
                        <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}"
                        placeholder="phone" autofocus>
                    <label for="floatingName">Phone Number</label>
                    @if ($errors->has('phone'))
                        <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}"
                        placeholder="address" autofocus>
                    <label for="floatingName">Your Address</label>
                    @if ($errors->has('address'))
                        <span class="text-danger text-left">{{ $errors->first('address') }}</span>
                    @endif
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

            </form>

        </div>
    </div>

    <!-- About End -->
@endsection
