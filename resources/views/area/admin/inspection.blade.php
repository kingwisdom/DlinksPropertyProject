@extends('layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Area</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Inspections</a>
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
                                @include('partials.message')
                                <div class="row">
                                    @foreach ($props as $item)
                                        <div class="col-md-4 col-sm-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h3>{{ $item->property_name }}</h3>
                                                    <p>{{ $item->property_type }} {{ $item->inspector }}</p>
                                                    <p>{{ $item->inspection_date }}</p>
                                                    @if ($item->isRequested)
                                                        <p class="badge bg-warning">Pending request</p>
                                                    @else
                                                        <p class="badge bg-success">Request Accepted</p>
                                                    @endif

                                                </div>
                                                <div class="card-footer">
                                                    @if ($item->isRequested)
                                                        <a data-bs-toggle="modal" data-bs-target="#itemModal"
                                                            class="btn btn-primary">Accept
                                                            Request</a>
                                                        <!-- Book Modal Start -->
                                                        <div class="modal fade" id="itemModal" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content rounded-0">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Confirm</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h3>Accept Request </h3>
                                                                        <form method="post"
                                                                            action="{{ url('update-inspection/' . $item->id) }}">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $item->id }}">
                                                                            <div class="form-group mb-3">
                                                                                <label for="">Inspection
                                                                                    Date</label>
                                                                                <input type="datetime-local"
                                                                                    class="form-control"
                                                                                    name="inspection_date" required>
                                                                            </div>
                                                                            <div class="form-group mb-3">
                                                                                <label for="">Inspection Whatsapp
                                                                                    Url (234807884493)</label>
                                                                                <input type="number" name="inspect_url"
                                                                                    class="form-control" required>
                                                                            </div>
                                                                            <div class="form-group mb-3">
                                                                                <label for="">Inspector </label>
                                                                                <input type="text" name="inspector"
                                                                                    class="form-control"
                                                                                    placeholder="Inspector">
                                                                            </div>
                                                                            <div class="d-flex">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Accept</button>
                                                                                &nbsp;&nbsp;
                                                                                <a data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                    class="btn btn-danger">Close</a>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Book Modal End -->
                                                    @endif
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
