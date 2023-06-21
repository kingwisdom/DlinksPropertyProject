@extends('layouts.master')

@section('content')
 <!-- Page Header Start -->
 <div class="container-fluid bg-dark bg-img p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">Menu & Pricing</h1>
            <a href="">Home</a>
            <i class="far fa-square text-primary px-2"></i>
            <a href="">Menu & Pricing</a>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Products Start -->
<div class="container-fluid about py-5">
    <div class="container">
        <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
            <h2 class="text-primary font-secondary">Products & Pricing</h2>
            <h3 class="text-primary text-uppercase">Explore Our Products</h3>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase border-inner p-4 mb-5">
                <li class="nav-item">
                    <a class="nav-link text-white active" data-bs-toggle="pill" href="#tab-1">Land</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-2">Cascass House</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-3">Complete House</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/Delink cleared1.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#2 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Plot of land @ Home Life</h5>
                                    <span>Plots of dry land are available for sale at HomeLife Garden Mowe/Ofada</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/Delink clear.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">3.5 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Plots of Land @ Royal Garden</h5>
                                    <span>There are several plots of land for sale at our Royal Garden, Ikorodu</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/APPROACH.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#1.2 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Plots of Land @ Zion Park Siun</h5>
                                    <span>Plots of dry land for sale at our Zion Park located at along Abeokuta/Sagamu Expressway Siun</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/delinks testimonial 4.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#2.5 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Plots of land @ Golden Valley </h5>
                                    <span>Plots of dry land are available at our Golden Villey, Ibeju Lekki at affordable prices</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/Foundation.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#1.2 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Plots of land @ Alpha Garden</h5>
                                    <span>We have plots of land for sale at our Alpha Garden located at Ibadan, Oyo State</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/cake-1.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#1 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">Plots of land @ Greenfield Garden</h5>
                                    <span>Plots of land are available at our Greenfield Garden located at Abeokuta</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/home.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#8 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">3-Bedroom Carcass Bungalow </h5>
                                    <span>3-Bedroom Bungalow is availabe at our Homelife Garden, Mowe/Ofada</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/Car.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#7 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">2-Bedroom</h5>
                                    <span>We have 2-Bedroom bungalow (Carcass) for sale at our Homelife Garden Mowe/Ofada</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/Cascass6.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#8 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">3-Bedroom @ Homelife Garden</h5>
                                    <span>3-Bedroom Bungalow is avaliable at our Homelife Garden Mowe/Ofada</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/Cascass4.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#6 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">2-Bedroom @ Zion Park</h5>
                                    <span>2-Bedroom semi detach bungalow is available at our Zion Park Estate, Siun</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/Cascass3.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#9 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">3-Bedroom @ Zion Park</h5>
                                    <span>We have 3-Bedroom bungalow for sell at our Zion Park Estate Siun</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/Cascass1.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#10 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">2-Beedroom @ King's Court</h5>
                                    <span>2-Bedroom bungalow is available at our King's Court Estate, Ikorodu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/Home 3.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#14 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">3-Bedroom Carcass Bungalow </h5>
                                    <span>3-Bedroom Bungalow is availabe at our Homelife Garden, Mowe/Ofada</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/Home.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#17 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">2-Bedroom</h5>
                                    <span>We have 2-Bedroom bungalow (Carcass) for sale at our Homelife Garden Mowe/Ofada</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/Home 4.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#18.5 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">3-Bedroom @ Homelife Garden</h5>
                                    <span>3-Bedroom Bungalow is avaliable at our Homelife Garden Mowe/Ofada</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/Delink home.jpg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#12.9 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">2-Bedroom @ Zion Park</h5>
                                    <span>2-Bedroom semi detach bungalow is available at our Zion Park Estate, Siun</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/Delinks home2.jpeg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#18.2 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">3-Bedroom @ Zion Park</h5>
                                    <span>We have 3-Bedroom bungalow for sell at our Zion Park Estate Siun</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex h-100">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="img/Delinks House.jpeg" alt="" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">#19 Million</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                    <h5 class="text-uppercase">2-Beedroom @ King's Court</h5>
                                    <span>2-Bedroom bungalow is available at our King's Court Estate, Ikorodu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->


<!-- Service Start -->
<div class="container-fluid service position-relative px-5 mt-5" style="margin-bottom: 135px;">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <h4 class="text-uppercase mb-3">Our Land</h4>
                    <p>We have plots of land scattered around our estates across Lagos, Ogun and Oyo State. The plots of land are affordable and free from government acquisition.</p>
                    <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
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
<!-- Service Start -->

@endsection