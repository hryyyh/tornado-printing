    

    <?php $__env->startSection('content'); ?>

    <style>
        .contact-hero {
            background: linear-gradient(135deg, #3f5870, #2f3e4d);
            padding: 80px 0;
        }

        .contact-card {
            border-radius: 18px;
            transition: 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
            font-size: 28px;
        }

        .icon-wa {
            background: rgba(37, 211, 102, 0.1);
            color: #25D366;
        }

        .icon-clock {
            background: rgba(13, 110, 253, 0.1);
            color: #0d6efd;
        }

        .btn-wa-premium {
            background: #25D366;
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-wa-premium:hover {
            background: #1ebe5d;
            transform: scale(1.05);
        }

        .location-card {
            border-radius: 20px;
        }

        @media (max-width: 768px) {
        .contact-hero {
            padding: 50px 0;
         }

        .contact-card {
            padding: 30px !important;
        }
        }
    </style>


    <!-- HERO -->
    <section class="contact-hero text-white text-center">
        <div class="container">
            <h1 class="fw-bold mb-3">Contact Us</h1>
            <p class="mb-0 fs-5">
                We are ready to help your printing and packaging needs.
            </p>
        </div>
    </section>


    <!-- CONTACT CARDS -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center g-4">

                <!-- WHATSAPP CARD -->
                <div class="col-md-5">
                    <div class="card contact-card shadow border-0 h-100 text-center p-5">
                        
                        <div class="icon-circle icon-wa">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>

                        <h5 class="fw-bold mb-3">Chat via WhatsApp</h5>
                        <p class="text-muted mb-4">
                            Contact us directly for consultation and ordering your product.
                        </p>

                        <a href="https://wa.me/628117010220"
                        target="_blank"
                        class="btn btn-wa-premium text-white">
                            Click Here
                        </a>
                    </div>
                </div>


                <!-- OPERASIONAL CARD -->
                <div class="col-md-5">
                    <div class="card contact-card shadow border-0 h-100 text-center p-5">
                        
                        <div class="icon-circle icon-clock">
                            <i class="fa-solid fa-clock"></i>
                        </div>

                        <h5 class="fw-bold mb-4">Operating Hours</h5>

                        <p class="fw-semibold mb-1">Monday - Saturday</p>
                        <p class="mb-3">08.00 s/d 17.00</p>

                        <p class="fw-semibold text-danger mb-0">
                            Sunday : Closed
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- LOCATION SECTION -->
    <section class="py-5">
        <div class="container">

            <div class="card location-card shadow-lg border-0 p-5">
                
                <h4 class="fw-bold text-center mb-3">Our Location</h4>
                <p class="text-center text-muted mb-4">
                    Tornado Printing – Batam, Indonesia
                </p>

                <div class="ratio ratio-16x9 rounded overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1507543611656!2d103.95191877403535!3d1.0481277624733274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98d26b0faf443%3A0xfe46f1ac2f081b88!2sTornado%20Printing!5e0!3m2!1sen!2sid!4v1771313389311!5m2!1sen!2sid"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>

            </div>

        </div>
    </section>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\LENOVO\laravel\Tornado_Printing\resources\views/pages/contact.blade.php ENDPATH**/ ?>