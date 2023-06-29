@extends('layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Create</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Create Property</a>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="container">
            <div class="blog-single gray-bg">

                <div class="container">
                    <div class="row align-items-start">
                        @include('partials.message')
                        <div class="col-lg-9 m-15px-tb">
                            <article class="article">
                                <form method="post" action="{{ route('admin.create_product') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="row g-3">
                                        <div class="col-sm-12">
                                            <input type="text" name="name" class="form-control px-4"
                                                placeholder="Property Name" style="height: 55px;">
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control px-4" name="location"
                                                placeholder="Full Address" style="height: 55px;">
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control px-4" name="price"
                                                placeholder="Price" style="height: 55px;">
                                        </div>
                                        <div class="col-sm-12">
                                            <select class="form-control px-4" name="type" style="height: 55px;">
                                                <option value="">Select>></option>
                                                <option value="Land">Land</option>
                                                <option value="Cascass House">Cascass House</option>
                                                <option value="Complete House">Complete House</option>
                                            </select>

                                        </div>
                                        <div class="col-sm-12">
                                            <input type="file" name="image" class="form-control px-4"
                                                style="height: 55px;">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea class="form-control px-4 py-3" name="description" rows="4" placeholder="Description..."></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="btn btn-primary bg-primary border-inner w-100 py-3"
                                                type="submit">Create Property</button>
                                        </div>
                                    </div>
                                </form>

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
    <!-- Page Header End -->
@endsection
