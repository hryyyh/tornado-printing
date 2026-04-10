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

         <!-- PRODUK 1 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product1"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                <a href="/product/cup-pp-datar">
                <img src="{{ asset('images/katalog/cup datar/1.png') }}"
                    class="d-block w-100 img-fluid"
                    alt="Product Image 1">
                </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/cup-pp-datar">
                    <img src="{{ asset('images/katalog/cup datar/2.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 2">
                </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/cup-pp-datar">
                    <img src="{{ asset('images/katalog/cup datar/3.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 3">
                </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/cup-pp-datar">
                    <img src="{{ asset('images/katalog/cup datar/4.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 4">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/cup-pp-datar">
                    <img src="{{ asset('images/katalog/cup datar/5.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 5">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/cup-pp-datar">
                    <img src="{{ asset('images/katalog/cup datar/tutup1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 5">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/cup-pp-datar">
                    <img src="{{ asset('images/katalog/cup datar/tutup2.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 5">
                    </a>
                </div>

            </div>

            <!-- DOT INDICATOR -->
            <div class="carousel-indicators mb-0">
                <button type="button" data-bs-target="#product1" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#product1" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#product1" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#product1" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#product1" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#product1" data-bs-slide-to="5"></button>
                <button type="button" data-bs-target="#product1" data-bs-slide-to="6"></button>
            </div>

        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Cup PP Datar</h5>
            <p class="card-text">
                High-quality Custom Cup solutions for your brand.
            </p>
        </div>

    </div>
</div>

 <!-- PRODUK 2-->
 <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product16"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/spoon">
                    <img src="{{ asset('images/katalog/spoon/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>

        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Custom Spoon</h5>
            <p class="card-text">
                High-quality Custom Spoon solutions for your brand.
            </p>
        </div>

    </div>
</div>
         
<!-- PRODUK 3-->
  <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product3"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/sticker">
                    <img src="{{ asset('images/katalog/sticker/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/sticker">
                    <img src="{{ asset('images/katalog/sticker/2.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 2">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/sticker">
                    <img src="{{ asset('images/katalog/sticker/3.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 3">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/sticker">
                    <img src="{{ asset('images/katalog/sticker/4.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 4">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/sticker">
                    <img src="{{ asset('images/katalog/sticker/5.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 5">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/sticker">
                    <img src="{{ asset('images/katalog/sticker/6.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 6">
                    </a>
                </div>
            </div>

            <!-- DOT INDICATOR -->
            <div class="carousel-indicators mb-0">
                <button type="button" data-bs-target="#product3" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#product3" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#product3" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#product3" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#product3" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#product3" data-bs-slide-to="5"></button>
            </div>

        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Sticker</h5>
            <p class="card-text">
                High-quality Custom Sticker solutions for your brand.
            </p>
        </div>

    </div>
</div>

<!-- PRODUK 4-->
 <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product4"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/banner">
                    <img src="{{ asset('images/katalog/banner/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/banner">
                    <img src="{{ asset('images/katalog/banner/2.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 2">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/banner">
                    <img src="{{ asset('images/katalog/banner/3.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 3">
                    </a>
                </div>

            </div>

            <!-- DOT INDICATOR -->
            <div class="carousel-indicators mb-0">
                <button type="button" data-bs-target="#product4" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#product4" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#product4" data-bs-slide-to="2"></button>
            </div>

        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Banner</h5>
            <p class="card-text">
                High-quality Custom Banner solutions for your brand.
            </p>
        </div>

    </div>
</div>

<!-- PRODUK 5-->
 <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product5"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/paper-cup">
                    <img src="{{ asset('images/katalog/paper cup/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/paper-cup">
                    <img src="{{ asset('images/katalog/paper cup/2.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 2">
                    </a>
                </div>
            </div>

            <!-- DOT INDICATOR -->
            <div class="carousel-indicators mb-0">
                <button type="button" data-bs-target="#product5" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#product5" data-bs-slide-to="1"></button>
            </div>

        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Paper Cup</h5>
            <p class="card-text">
                High-quality Custom Cup solutions for your brand.
            </p>
        </div>

    </div>
</div>

<!-- PRODUK 6-->
 <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product6"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/sleeve">
                    <img src="{{ asset('images/katalog/sleeve/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>

                <div class="carousel-item active">
                    <a href="/product/sleeve">
                    <img src="{{ asset('images/katalog/sleeve/2.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 2">
                    </a>
                </div>
            </div>

        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Cup Sleeve</h5>
            <p class="card-text">
                High-quality Cup Sleeve solutions for your brand.
            </p>
        </div>

    </div>
</div>

<!-- PRODUK 7-->
 <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product7"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/cup-jumbo">
                    <img src="{{ asset('images/katalog/cup jumbo/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>
            </div>
        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Cup Jumbo</h5>
            <p class="card-text">
                High-quality custom Cup solutions for your brand.
            </p>
        </div>

    </div>
</div>

<!-- PRODUK 8-->
 <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product8"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/paper-bowl">
                    <img src="{{ asset('images/katalog/paper bowl/4.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/paper-bowl">
                    <img src="{{ asset('images/katalog/paper bowl/2.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 2">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/paper-bowl">
                    <img src="{{ asset('images/katalog/paper bowl/3.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 3">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/paper-bowl">
                    <img src="{{ asset('images/katalog/paper bowl/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 4">
                    </a>
                </div>
            </div>

            <!-- DOT INDICATOR -->
            <div class="carousel-indicators mb-0">
                <button type="button" data-bs-target="#product8" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#product8" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#product8" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#product8" data-bs-slide-to="3"></button>
            </div>

        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Paper Bowl</h5>
            <p class="card-text">
                High-quality custom Bowl solutions for your brand.
            </p>
        </div>

    </div>
</div>

<!-- PRODUK 9-->
 <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product9"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/lunch-box">
                    <img src="{{ asset('images/katalog/lunch box/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/lunch-box">
                    <img src="{{ asset('images/katalog/lunch box/2.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 2">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/lunch-box">
                    <img src="{{ asset('images/katalog/lunch box/3.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 3">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/lunch-box">
                    <img src="{{ asset('images/katalog/lunch box/4.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 4">
                    </a>
                </div>
            </div>

            <!-- DOT INDICATOR -->
            <div class="carousel-indicators mb-0">
                <button type="button" data-bs-target="#product9" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#product9" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#product9" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#product9" data-bs-slide-to="3"></button>
            </div>

        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Lunch Box</h5>
            <p class="card-text">
                High-quality Custom Lunch Box solutions for your brand.
            </p>
        </div>

    </div>
</div>

<!-- PRODUK 10-->
 <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product10"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/tumblr">
                    <img src="{{ asset('images/katalog/tumblr/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>
            </div>
        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Tumblr</h5>
            <p class="card-text">
                High-quality Custom Tumblr solutions for your brand.
            </p>
        </div>

    </div>
</div>

<!-- PRODUK 11-->
 <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product11"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/cup-injection">
                    <img src="{{ asset('images/katalog/cup injection/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/cup-injection">
                    <img src="{{ asset('images/katalog/cup injection/2.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 2">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/cup-injection">
                    <img src="{{ asset('images/katalog/cup injection/3.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 3">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/cup-injection">
                    <img src="{{ asset('images/katalog/cup injection/4.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 4">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/cup-injection">
                    <img src="{{ asset('images/katalog/cup injection/tutup.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 4">
                    </a>
                </div>
            </div>

            <!-- DOT INDICATOR -->
            <div class="carousel-indicators mb-0">
                <button type="button" data-bs-target="#product11" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#product11" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#product11" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#product11" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#product11" data-bs-slide-to="4"></button>
            </div>

        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Cup Injection</h5>
            <p class="card-text">
                High-quality Custom Cup solutions for your brand.
            </p>
        </div>

    </div>
</div>

<!-- PRODUK 12-->
  <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product12"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/custom-pet">
                    <img src="{{ asset('images/katalog/cup pet/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/custom-pet">
                    <img src="{{ asset('images/katalog/cup pet/2.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 2">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/custom-pet">
                    <img src="{{ asset('images/katalog/cup pet/3.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 3">
                    </a>
                </div>
            </div>

            <!-- DOT INDICATOR -->
            <div class="carousel-indicators mb-0">
                <button type="button" data-bs-target="#product12" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#product12" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#product12" data-bs-slide-to="2"></button>
            </div>

        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Cup Pet</h5>
            <p class="card-text">
                High-quality Custom Cup solutions for your brand.
            </p>
        </div>

    </div>
</div>

<!-- PRODUK 13-->
 <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product13"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/keychain">
                    <img src="{{ asset('images/katalog/ganci/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>
            </div>
        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Keychain</h5>
            <p class="card-text">
                High-quality Custom Keychain solutions for your brand.
            </p>
        </div>

    </div>
</div>

<!-- PRODUK 14-->
 <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product14"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/snack-paper">
                    <img src="{{ asset('images/katalog/snack paper/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>
            </div>
        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Snack Paper</h5>
            <p class="card-text">
                High-quality Custom Snack Paper solutions for your brand.
            </p>
        </div>

    </div>
</div>

<!-- PRODUK 15-->
 <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product15"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/mangkok-plastik">
                    <img src="{{ asset('images/katalog/mangkok plastik/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>
            </div>

        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Mangkok Plastik</h5>
            <p class="card-text">
                High-quality Custom Bowl solutions for your brand.
            </p>
        </div>

    </div>
</div>

<!-- PRODUK 16-->
 <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card h-100 shadow-sm">

        <!-- SLIDE GAMBAR PRODUK -->
        <div id="product16"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="3000">

            <div class="carousel-inner rounded-top">

                <div class="carousel-item active">
                    <a href="/product/cup-pp-oval">
                    <img src="{{ asset('images/katalog/cup oval/1.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 1">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/cup-pp-oval">
                    <img src="{{ asset('images/katalog/cup oval/2.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 2">
                    </a>                                                                
                </div>

                <div class="carousel-item">
                    <a href="/product/cup-pp-oval">     
                    <img src="{{ asset('images/katalog/cup oval/3.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 3">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/cup-pp-oval">
                    <img src="{{ asset('images/katalog/cup oval/4.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 4">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="/product/cup-pp-oval">
                    <img src="{{ asset('images/katalog/cup oval/5.png') }}"
                         class="d-block w-100 img-fluid"
                         alt="Product Image 5">
                    </a>
                </div>

            </div>

            <!-- DOT INDICATOR -->
            <div class="carousel-indicators mb-0">
                <button type="button" data-bs-target="#product16" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#product16" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#product16" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#product16" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#product16" data-bs-slide-to="4"></button>
            </div>

        </div>

        <!-- ISI CARD -->
        <div class="card-body text-center">
            <h5 class="card-title">Cup PP Oval</h5>
            <p class="card-text">
                High-quality Custom Cup solutions for your brand.
            </p>
        </div>

    </div>
</div>
        </div>
    </div>
</section>

@endsection
