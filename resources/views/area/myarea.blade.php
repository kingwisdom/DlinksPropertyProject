@extends('layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">My Area</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">My Area</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="blog-single gray-bg">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-9 m-15px-tb">
                            <article class="article">
                                <div class="row">
                                    @foreach ($props as $item)
                                        <div class="col-md-4 col-sm-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h3>{{ $item->property_name }}</h3>
                                                    <p>{{ $item->property_type }} by {{ $item->inspector }}</p>
                                                    <p>{{ date('d-F-Y g:i a', strtotime($item->inspection_date)) }}</p>
                                                    @if ($item->isRequested)
                                                        <p class="badge bg-warning">Pending request</p>
                                                    @else
                                                        <p class="badge bg-success">Request Accepted</p>
                                                    @endif
                                                </div>
                                                <div class="card-footer">
                                                    @if ($item->inspection_date != null)
                                                        <a href="{{ 'https://wa.me/' . $item->inspect_url }}"
                                                            class="btn btn-primary">Connect
                                                            Now</a> |
                                                    @endif
                                                    <a href="{{ url('paynow/' . $item->id) }}" class="btn btn-success">Pay
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </article>

                        </div>
                        <div class="col-lg-3 m-15px-tb blog-aside">
                            <!-- Latest Post -->
                            <div class="widget widget-latest-post">
                                <div class="widget-title">
                                    <h3>Quick Actions</h3>
                                </div>
                                <div class="widget-body">
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="#">Book Inspect Properties</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="#">Inspected Properties</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="#">Paid Properties</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Latest Post -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
@endsection
