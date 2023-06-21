@extends('layouts.master')

@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid bg-dark bg-img p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">Services</h1>
            <a href="">Home</a>
            <i class="far fa-square text-primary px-2"></i>
            <a href="">Services</a>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
<div class="container-fluid service position-relative px-5 mt-5" style="margin-bottom: 135px;">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <h4 class="text-uppercase mb-3">Our Land</h4>
                    <p>We have plots of land scattered around our estates across Lagos, Ogun and Oyo State. The plots of land are affordable and free from government acquisition.</p>
                    <a class="text-uppercase text-dark" href="SignUp.html">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <h4 class="text-uppercase mb-3">Cascass Building</h4>
                    <p>We sell Carcass building. Carcass building is completed but unfurnished. In this type of house, the buyer have the liberty to decide how the interior will look like. </p>
                    <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <h4 class="text-uppercase mb-3">Complete House</h4>
                    <p>We have 1-bedroom, 2-Bedroom and 3-Bedroom Bungalows scattered in our Estates across Lagos, Ogun and Ibadan State.</p>
                    <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-12 col-md-6 text-center">
                <h1 class="text-uppercase text-light mb-4">New Year Promo 30% Discount</h1><h4 class="text-light mb-4">You will get 30% discount on all the land and 20% on any of our houses. </h4><h5 class="text-light mb-4">Promo span between Sept 15 and Dec. 31<br> (Note: term and condition apply)</h5>
                <a href="" class="btn btn-primary bg-primary border-inner py-3 px-5 me-5">Call Us Today</a>
            </div>
        </div>
    </div>
</div>
<!-- Service Ends -->
@endsection