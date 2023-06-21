@extends('layouts.master')

@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid bg-dark bg-img p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">Testimonial</h1>
            <a href="index.html">Home</a>
            <i class="far fa-square text-primary px-2"></i>
            <a href="">Testimonial</a>
        </div>
    </div>
</div>
<!-- Page Header End -->


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
                    <img class="img-fluid flex-shrink-0" src="assets/img/Delinks Testimonial 4.jpg" style="width: 60px; height: 60px;">
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