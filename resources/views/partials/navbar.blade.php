<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center fw-bold" href="/">
            <img src="{{ asset('images/tamu/logo.png') }}" width="40" class="me-2">
            Tornado Printing
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'text-danger fw-bold' : '' }}" href="/">HOME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('product') ? 'text-danger fw-bold' : '' }}" href="/product">OUR PRODUCT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'text-danger fw-bold' : '' }}" href="/contact">CONTACT</a>
                </li>

            <!-- Social Media -->
            <li class="nav-item ps-lg-3">
                <a class="nav-link d-flex align-items-center gap-2"
                    href="https://www.instagram.com/tornadoprinting/"
                    target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                    <span>Instagram</span>
                </a>
            </li>

            <li class="nav-item ps-lg-3">
                <a class="nav-link d-flex align-items-center gap-2"
                    href="https://www.tiktok.com/@tornadoprinting"
                    target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                    <span>TikTok</span>
                </a>
            </li>
            </ul>
        </div>

    </div>
</nav>
