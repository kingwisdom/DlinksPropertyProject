@extends('layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Area</h1>
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
                <div class="row col-3">
                    <a href="{{ route('admin.create') }}" class="btn btn-primary w-10">Create Property</a>
                </div>
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-9 m-15px-tb">
                            <article class="article">
                                <div class="row">
                                    @foreach ($props as $item)
                                        <div class="col-md-4 col-sm-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h3>{{ $item->name }}</h3>
                                                    <p>{{ $item->type }} | #{{ $item->price }}</p>
                                                    <p>{{ $item->created_at }}</p>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="#" class="btn btn-primary">View</a>
                                                    <a href="{{ route('admin.delete') }}" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </article>

                        </div>
                        <div class="col-lg-3 m-15px-tb blog-aside">
                            <!-- Latest Post -->
                            @include('partials.adminsidebar')
                            <!-- End Latest Post -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
@endsection
