@extends('layouts.app')

@section('content')

<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Our Product</h1>
            <p class="text-muted">
                Explore our high quality packaging and printing solutions.
            </p>
        </div>

        <div class="row">

@foreach($products as $product)

<div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <div id="product{{ $product->id }}"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                @foreach($product->images as $key => $img)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <a href="/product/{{ $product->id }}">
                        <img src="{{ asset('storage/' . $img->path) }}"
                             class="d-block w-100 img-fluid">
                    </a>
                </div>
                @endforeach

            </div>

            <div class="carousel-indicators mb-0">
                @foreach($product->images as $key => $img)
                    <button type="button"
                        data-bs-target="#product{{ $product->id }}"
                        data-bs-slide-to="{{ $key }}"
                        class="{{ $key == 0 ? 'active' : '' }}">
                    </button>
                @endforeach
            </div>

        </div>

        <div class="card-body text-center">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">
                {{ $product->description }}
            </p>
        </div>

    </div>
</div>

@endforeach

</div>


@endsection
