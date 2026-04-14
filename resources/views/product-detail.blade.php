@extends('layouts.app')

@section('content')

<style>
.product-section { padding:60px 0; }
.product-main-img {
    border-radius:20px;
    box-shadow:0 20px 40px rgba(0,0,0,0.08);
    transition:0.3s;
}
.thumb-img {
    border-radius:12px;
    cursor:pointer;
    border:2px solid transparent;
    transition:0.3s;
}
.thumb-img:hover { transform:scale(1.05); border-color:#0d6efd; }
.active-thumb { border-color:#0d6efd !important; transform:scale(1.05); }

.spec-box {
    background: #f8f9fa;
    border-radius: 18px;
    padding: 25px;
}

.feature-icon {
    text-align: center;
    font-size: 14px;
}

.feature-icon i {
    font-size: 28px;
    color: #0d6efd;
    margin-bottom: 8px;
}

.btn-wa-detail {
    background:#25D366;
    border:none;
    border-radius:50px;
    padding:15px 40px;
    font-weight:600;
}
</style>

<section class="product-section">
<div class="container">

    <nav class="mb-4">
        <a href="/product" class="text-decoration-none text-muted fs-5 fw-semibold">
            ← Back
        </a>
    </nav>

    <div class="row g-5">

        <!-- LEFT -->
        <div class="col-md-6">
            <div class="row">

                <!-- THUMBNAIL -->
                <div class="col-12 col-md-3 d-flex flex-md-column flex-row gap-3 mb-3 mb-md-0 overflow-auto">

                    @foreach($product->images as $index => $image)
                        <img src="{{ asset('storage/' . $image->path) }}"
                             class="img-fluid thumb-img {{ $index == 0 ? 'active-thumb' : '' }}"
                             onclick="changeImage(this)">
                    @endforeach

                </div>

                <!-- MAIN IMAGE -->
                <div class="col-12 col-md-9">
                    <img id="mainProductImage"
                         src="{{ asset('storage/' . ($product->images[0]->path ?? '')) }}"
                         class="img-fluid product-main-img w-100">
                </div>

            </div>
        </div>

        <!-- RIGHT -->
        <div class="col-md-6">

            <h2 class="fw-bold mb-3">{{ $product->name }}</h2>

            <p class="text-muted mb-4">
                {{ $product->description ?? 'High quality products for your branding and packaging needs.' }}
            </p>

            <!-- SPEC BOX -->
            <div class="spec-box mb-4">
                <h6 class="fw-bold mb-3">Product Specification :</h6>

                <ul class="list-unstyled mb-4">
                    <li class="mb-2">
                        <i class="fa-solid fa-check text-success me-2"></i>
                        Custom Product
                    </li>
                    <li class="mb-2">
                        <i class="fa-solid fa-check text-success me-2"></i>
                        High Quality Material
                    </li>
                    <li class="mb-2">
                        <i class="fa-solid fa-check text-success me-2"></i>
                        Custom Printing Available
                    </li>
                </ul>

                <div class="row text-center">
                    <div class="col-3 feature-icon">
                        <i class="fa-solid fa-droplet"></i>
                    </div>
                    <div class="col-3 feature-icon">
                        <i class="fa-solid fa-pen-ruler"></i>
                    </div>
                    <div class="col-3 feature-icon">
                        <i class="fa-solid fa-print"></i>
                    </div>
                    <div class="col-3 feature-icon">
                        <i class="fa-solid fa-shield"></i>
                    </div>
                </div>

            </div>

            <a href="https://wa.me/628117010220?text={{ urlencode('Halo saya ingin order '.$product->name) }}"
               target="_blank"
               class="btn btn-wa-detail text-white w-100">
                <i class="fa-brands fa-whatsapp me-2"></i> Chat & Order via WhatsApp
            </a>

        </div>

    </div>
</div>
</section>

<script>
function changeImage(element){
    let mainImage = document.getElementById("mainProductImage");

    mainImage.style.opacity = 0;

    setTimeout(() => {
        mainImage.src = element.src;
        mainImage.style.opacity = 1;
    }, 150);

    document.querySelectorAll(".thumb-img").forEach(img => {
        img.classList.remove("active-thumb");
    });

    element.classList.add("active-thumb");
}
</script>

@endsection