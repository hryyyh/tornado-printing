@extends('layouts.app')

@section('content')

<!-- CAROUSEL -->
<div class="container mt-4 mb-5">
    <div id="heroCarousel"
         class="carousel slide"
         data-bs-ride="carousel"
         data-bs-interval="4000">

        <div class="carousel-inner rounded-4 overflow-hidden">

            <div class="carousel-item active">
                <img src="{{ asset('images/tamu/banner1.png') }}"
                     class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/tamu/banner2.png') }}"
                     class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/tamu/banner3.png') }}"
                     class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/tamu/banner4.png') }}"
                     class="d-block w-100">
            </div>

        </div>

        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
        </div>

</div>
</div>
</div>

<!-- About Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">

            <!-- IMAGE -->
            <div class="col-md-6 mb-4 mb-md-0 text-center">
                <img src="{{ asset('assets/images/tamu/body.jpg') }}" 
                     class="img-fluid rounded shadow">
            </div>

            <!-- TEXT -->
            <div class="col-md-6 text-md-start text-center">
                <h4 class="fw-bold mb-3">Tornado Printing</h4>
                <p class="text-muted">
                    Founded in 2020, Tornado Printing began as a creative printing solution provider in Indonesia.
                    Over time, the company expanded into packaging and custom branding solutions.
                </p>
                <p class="text-muted">
                    Today, Tornado Printing is recognized as a reliable partner delivering high-quality packaging products tailored to customer needs.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Services -->
<section class="py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Why Choose Tornado Printing?</h2>
        <p class="text-muted">
                Tornado Printing provides professional packaging and printing solutions 
                including custom box packaging, product labels, sticker printing, and branding support.
                We help businesses create strong visual identities through high-quality printing results.
    </div>

    <div class="row text-center">

        <div class="row text-center">
            <div class="col-6 col-md-4">
                <i class="fas fa-box fa-3x text-danger mb-3"></i>
                <h5>Consultation & Support</h5>
                <p>We assist you from design planning to final production
                    with responsive and professional service.</p>
            </div>

            <div class="col-6 col-md-4">
                <i class="fas fa-recycle fa-3x text-danger mb-3"></i>
               <h5>Premium Printing Quality</h5>
                <p>Using high-grade materials and modern printing technology 
                    to ensure sharp and long-lasting results.</p>
            </div>

            <div class="col-6 col-md-4">
                <i class="fas fa-award fa-3x text-danger mb-3"></i>
               <h5>Strict Quality Control</h5>
                <p>Every product undergoes a thorough inspection 
                    process to maintain consistent and excellent quality.</p>
            </div>

            <div class="col-6 col-md-4">
                <i class="fas fa-tags fa-3x text-danger mb-3"></i>
                <h5>Labeling Services</h5>
                <p>Professional labeling to enhance branding.</p>
            </div>

            <div class="col-6 col-md-4">
                <i class="fas fa-cogs fa-3x text-danger mb-3"></i>
                <h5>Sticker & Label Printing</h5>
                <p>Custom sticker and label printing solutions 
                    to strengthen your product branding.</p>
            </div>

            <div class="col-6 col-md-4">
                <i class="fas fa-truck fa-3x text-danger mb-3"></i>
              <h5>On-Time Production</h5>
                <p>Fast production process and reliable delivery 
                    according to the agreed timeline.</p>
            </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const carousel = document.querySelector('#heroCarousel');
    const indicators = document.querySelectorAll('.carousel-indicators button');

    carousel.addEventListener('slide.bs.carousel', function (e) {

        indicators.forEach(btn => {
            btn.style.background = '#ccc';
        });

        indicators[e.to].style.background = '#dc3545';

    });

});
</script>

<style>

/* HAPUS STYLE DEFAULT BOOTSTRAP */
.carousel-indicators [data-bs-target] {
    width: 80px !important;
    height: 5px !important;
    border-radius: 10px !important;
    background-color: #e0e0e0 !important;
    border: none !important;
    opacity: 1 !important;
    margin: 0 8px !important;
}

    /* ACTIVE */
    .carousel-indicators .active {
        background-color: #dc3545 !important;
    }

    /* POSISI */
    .carousel-indicators {
        position: relative !important;
        bottom: 0 !important;
        margin-top: 25px;
        justify-content: center;
    }

</style>


<!-- Footer -->
<footer class="bg-dark text-white text-center p-3 mt-5">
    © 2026 Tornado Printing. All rights reserved.
</footer>

@endsection
