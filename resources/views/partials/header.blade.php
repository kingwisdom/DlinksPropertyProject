

 <!-- Topbar Start -->
 <div class="container-fluid px-0 d-none d-lg-block">
  <div class="row gx-0">
      <div class="col-lg-4 text-center bg-secondary py-3">
          <div class="d-inline-flex align-items-center justify-content-center">
              <i class="bi bi-envelope fs-1 text-primary me-3"></i>
              <div class="text-start">
                  <h6 class="text-uppercase mb-1">Email Us</h6>
                  <span>info@delinksproperty.com</span>
              </div>
          </div>
      </div>
      <div class="col-lg-4 text-center bg-primary border-inner py-3">
          <div class="d-inline-flex align-items-center justify-content-center">
              <a href="index.html" class="navbar-brand">
                  <h5 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-dark me-3"></i>De-Links Property Limited</h5>
              </a>
          </div>
      </div>
      <div class="col-lg-4 text-center bg-secondary py-3">
          <div class="d-inline-flex align-items-center justify-content-center">
              <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
              <div class="text-start">
                  <h6 class="text-uppercase mb-1">Call Us</h6>
                  <span>+2347065663365</span>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
  <a href="{{ route('pages.index') }}" class="navbar-brand d-block d-lg-none">
      <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>De-Links Property Limited</h1>
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto mx-lg-auto py-0">
          <a href="{{ route('pages.index') }}" class="nav-item nav-link active">Home</a>
          <a href="{{ route('pages.about') }}" class="nav-item nav-link">About Us</a>
          <a href="{{ route('pages.products') }}" class="nav-item nav-link">Products</a>
          <a href="{{route('pages.service')}}" class="nav-item nav-link">Services</a>
          <a href="{{route('pages.team')}}" class="nav-item nav-link">Our Team</a>
          <a href="{{route('pages.contact')}}" class="nav-item nav-link">Contact Us</a>
          <a href="{{route('pages.testimonial')}}" class="nav-item nav-link">Testimonial</a>
         
          </div>
          
      </div>
  </div>
</nav>
<!-- Navbar End -->