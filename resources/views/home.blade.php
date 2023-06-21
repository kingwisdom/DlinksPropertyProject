@extends('layouts.master')

@section('content')
   
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
      <div class="container py-5">
          <div class="row justify-content-start">
              <div class="col-lg-8 text-center text-lg-start">
                  <h1 class="font-secondary text-primary mb-4">Welcome to</h1>
                  <h2 class="font-secondary text-white text-uppercase text-primary mb-4">De-Links Property Limited</h2>
                  <h4 class="text-light text-white">Home of affordable properties</h4>
                  <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                      <a href="" class="btn btn-primary bg-primary border-inner py-3 px-5 me-5">Read More</a>
                      <button type="button" class="btn-play" data-bs-toggle="modal"
                          data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                          <span></span>
                      </button>
                      <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block">Play Video</h5>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Hero End -->


  <!-- Video Modal Start -->
  <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content rounded-0">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- 16:9 aspect ratio -->
                  <div class="ratio ratio-16x9">
                      <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                          allow="autoplay"></iframe>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Video Modal End -->


  <!-- About Start -->
  <div class="container-fluid pt-5">
      <div class="container">
          <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
              <h2 class="text-primary font-secondary">About Us</h2>
              <h3 class="text-primary text-uppercase">Welcome To De-Links Property Limited</h3>
          </div>
          <div class="row gx-5">
              <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
                  <div class="position-relative h-100">
                      <img class="position-absolute w-100 h-100" src="assets/img/Zion park.jpg" style="object-fit: cover;">
                  </div>
              </div>
              <div class="col-lg-6 pb-5">
                  <h4 class="mb-4">Vision</h4>
                  <p class="mb-5">Delinks Property Limited believes that everybody created by God deserve to live in a decent place. This explains why we are committed to providing affordable landed property and housing for everyone—irrespective of social class, income level and all else.</p>
                  <div class="row g-5">
                      <div class="col-sm-6">
                          <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                              <i class="fa fa-heartbeat fa-2x text-white"></i>
                          </div>
                          <h4 class="text-uppercase">Our Core Values</h4>
                          <p class="mb-0"><li>
                              Transparency </li>
                              <li>Honesty </li>
                              <li>Customer Satisfaction</li>
                          </p>
                      </div>
                      <div class="col-sm-6">
                          <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                              <i class="fa fa-award fa-2x text-white"></i>
                          </div>
                          <h4 class="text-uppercase">Our Laurels</h4>
                          <p class="mb-0"><li> Best Real Estate Company 2022</li>
                              <li> Premium Times Real Estate Company of the year (2022) </li>
                              <li>Real Estate Company of the year (2023)</li>
                          </li></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->


  <!-- Facts Start -->
  <div class="container-fluid bg-img py-5 mb-5">
      <div class="container py-5">
          <div class="row gx-5 gy-4">
              <div class="col-lg-3 col-md-6">
                  <div class="d-flex">
                      <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                          <i class="fa fa-star text-white"></i>
                      </div>
                      <div class="ps-4">
                          <h6 class="text-primary text-uppercase">Houses sold</h6>
                          <h1 class="display-5 text-white mb-0" data-toggle="counter-up">123</h1>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="d-flex">
                      <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                          <i class="fa fa-users text-white"></i>
                      </div>
                      <div class="ps-4">
                          <h6 class="text-primary text-uppercase">Plot of land sold</h6>
                          <h1 class="display-5 text-white mb-0" data-toggle="counter-up">345</h1>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="d-flex">
                      <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                          <i class="fa fa-check text-white"></i>
                      </div>
                      <div class="ps-4">
                          <h6 class="text-primary text-uppercase">Complete Project</h6>
                          <h1 class="display-5 text-white mb-0" data-toggle="counter-up">445</h1>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="d-flex">
                      <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                          <i class="fa fa-mug-hot text-white"></i>
                      </div>
                      <div class="ps-4">
                          <h6 class="text-primary text-uppercase">Happy Clients</h6>
                          <h1 class="display-5 text-white mb-0" data-toggle="counter-up">845</h1>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Facts End -->


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
                                      <img class="img-fluid" src="assets/img/Delink cleared1.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/Delink clear.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/APPROACH.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/delinks testimonial 4.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/Foundation.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/cake-1.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/home.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/Car.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/Cascass6.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/Cascass4.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/Cascass3.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/Cascass1.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/Home 3.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/Home.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/Home 4.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/Delink home.jpg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/Delinks home2.jpeg" alt="" style="width: 150px; height: 85px;">
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
                                      <img class="img-fluid" src="assets/img/Delinks House.jpeg" alt="" style="width: 150px; height: 85px;">
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
  <!-- Service Ends -->


  <!-- Team Start -->
  <div class="container-fluid py-5">
      <div class="container">
          <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
              <h2 class="text-primary font-secondary">Management Team Members</h2>
              <h1 class="display-4 text-uppercase">Board of Directors</h1>
          </div>
          <div class="row g-5">
              <div class="col-lg-4 col-md-6">
                  <div class="team-item">
                      <div class="position-relative overflow-hidden">
                          <img class="img-fluid w-100" src="assets/img/CEO.jpg" alt="">
                          <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                              <div class="d-flex align-items-center justify-content-start">
                                  <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                  <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                  <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                              </div>
                          </div>
                      </div>
                      <div class="bg-dark border-inner text-center p-4">
                          <h4 class="text-uppercase text-primary"> Rotimi Paul</h4>
                          <p class="text-white m-0">MD/CEO</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="team-item">
                      <div class="position-relative overflow-hidden">
                          <img class="img-fluid w-100" src="assets/img/ED.jpg" alt="">
                          <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                              <div class="d-flex align-items-center justify-content-start">
                                  <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                  <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                  <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                              </div>
                          </div>
                      </div>
                      <div class="bg-dark border-inner text-center p-4">
                          <h4 class="text-uppercase text-primary">Sam Adewumi</h4>
                          <p class="text-white m-0">Executive Director</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="team-item">
                      <div class="position-relative overflow-hidden">
                          <img class="img-fluid w-100" src="assets/img/HR.jpg" alt="">
                          <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                              <div class="d-flex align-items-center justify-content-start">
                                  <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                  <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                  <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                              </div>
                          </div>
                      </div>
                      <div class="bg-dark border-inner text-center p-4">
                          <h4 class="text-uppercase text-primary">Rotimi Mogaji</h4>
                          <p class="text-white m-0">Human Resource Manager</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Team End -->


  <!-- Offer Start 
  <div class="container-fluid bg-offer my-5 py-5">
      <div class="container py-5">
          <div class="row gx-5 justify-content-center">
              <div class="col-lg-7 text-center">
                  <div class="section-title position-relative text-center mx-auto mb-4 pb-3" style="max-width: 600px;">
                      <h2 class="text-primary font-secondary">Special Kombo Pack</h2>
                      <h1 class="display-4 text-uppercase text-white">Super Crispy Cakes</h1>
                  </div>
                  <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
                  <a href="" class="btn btn-primary border-inner py-3 px-5 me-3">Shop Now</a>
                  <a href="" class="btn btn-dark border-inner py-3 px-5">Read More</a>
              </div>
          </div>
      </div>
  </div>
  -->


  <!-- Testimonial Start -->
  <div class="container-fluid py-5">
      <div class="container">
          <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
              <h2 class="text-primary font-secondary">Testimonial</h2>
              <h1 class="display-4 text-uppercase">Our Clients Have These To Say</h1>
          </div>
          <div class="owl-carousel testimonial-carousel">
              <div class="testimonial-item bg-dark text-white border-inner p-4">
                  <div class="d-flex align-items-center mb-3">
                      <img class="img-fluid flex-shrink-0" src="assets/img/Delinks Testimonial 3.jpg" style="width: 60px; height: 60px;">
                      <div class="ps-3">
                          <h4 class="text-primary text-uppercase mb-1">Ajayi Temitope</h4>
                          <span>Importer</span>
                      </div>
                  </div>
                  <p class="mb-0">When it come to real estate here in Lagos, De-Links Property limited is in it own class.
                  </p>
              </div>
              <div class="testimonial-item bg-dark text-white border-inner p-4">
                  <div class="d-flex align-items-center mb-3">
                      <img class="img-fluid flex-shrink-0" src="assets/img/Delinks Testimonial.jpg" style="width: 60px; height: 60px;">
                      <div class="ps-3">
                          <h4 class="text-primary text-uppercase mb-1">Mr. Seun Adeoye</h4>
                          <span>Developer</span>
                      </div>
                  </div>
                  <p class="mb-0">I bought a house from De-Links Property limited and the the keys were released immediately I completed the payment. This is Waoh!
                  </p>
              </div>
              <div class="testimonial-item bg-dark text-white border-inner p-4">
                  <div class="d-flex align-items-center mb-3">
                      <img class="img-fluid flex-shrink-0" src="assets/img/Delinks Testimonial2.jpg" style="width: 60px; height: 60px;">
                      <div class="ps-3">
                          <h4 class="text-primary text-uppercase mb-1">Ochidi Ikanni</h4>
                          <span>Civil Service</span>
                      </div>
                  </div>
                  <p class="mb-0">It is a great pleasure buying from De-Links Property. They were transparent and straightforward. I can recommend them.
                  </p>
              </div>
              <div class="testimonial-item bg-dark text-white border-inner p-4">
                  <div class="d-flex align-items-center mb-3">
                      <img class="img-fluid flex-shrink-0" src="img/Delinks Testimonial 4.jpg" style="width: 60px; height: 60px;">
                      <div class="ps-3">
                          <h4 class="text-primary text-uppercase mb-1">Tanko Daniel</h4>
                          <span>Public Servant</span>
                      </div>
                  </div>
                  <p class="mb-0">I am happy buying land from De-Links Property Limited. Nice doing business with them. 
                  </p>
              </div>
          </div>
      </div>
  </div>
  <!-- Testimonial End -->
@endsection