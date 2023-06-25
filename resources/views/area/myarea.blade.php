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
                <h2 class="text-primary font-secondary">About Us</h2>
                <h3 class="text-primary text-uppercase">Welcome To De-Links Property Limited</h3>
            </div>
            <div class="row gx-5">
                <div class="col-lg-3 mb-5 mb-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="assets/img/Zion park.jpg"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-8 pb-5">
                    <h4 class="mb-4">Vision</h4>
                    <p class="mb-5">Delinks Property Limited believes that everybody created by God deserve to live in a
                        decent place. This explains why we are committed to providing affordable landed property and housing
                        for everyone—irrespective of social class, income level and all else.</p>
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4"
                                style="width: 90px; height: 90px;">
                                <i class="fa fa-heartbeat fa-2x text-white"></i>
                            </div>
                            <h4 class="text-uppercase">Our Core Values</h4>
                            <p class="mb-0">
                                <li>
                                    Transparency </li>
                                <li>Honesty </li>
                                <li>Customer Satisfaction</li>
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4"
                                style="width: 90px; height: 90px;">
                                <i class="fa fa-award fa-2x text-white"></i>
                            </div>
                            <h4 class="text-uppercase">Our Laurels</h4>
                            <p class="mb-0">
                                <li> Best Real Estate Company 2022</li>
                                <li> Premium Times Real Estate Company of the year (2022) </li>
                                <li>Real Estate Company of the year (2023)</li>
                                </li>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
@endsection
