@extends('layouts.front')

@section('page-name', 'Home')

@section('styles')
    <style>
        .table thead th {
            background-color: #ce1212;
            color: white;
            text-align: center;
        }

        .table tbody td {
            text-align: center;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8f9fa;
            /* Light gray for alternate rows */
        }
    </style>
@endsection

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

        <div class="container">
            <div class="row gy-4 justify-content-center justify-content-lg-between">
                <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h1>
                    <p data-aos="fade-up" data-aos-delay="100">We are team of talented designers making websites
                        with Bootstrap</p>

                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{ asset('front-assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About Us<br></h2>
            <p><span>Learn More</span> <span class="description-title">About Us</span></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('front-assets/img/about.jpg') }}" class="img-fluid mb-4" alt="">
                    <div class="book-a-table">
                        <h3>Singup Now</h3>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Duis aute irure dolor in
                                    reprehenderit in voluptate velit.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                    storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident
                        </p>

                        <div class="position-relative mt-4">
                            <img src="{{ asset('front-assets/img/about-2.jpg') }}" class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section light-background">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-box">
                        <h3>Why Choose {{ config('app.name') }}</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus
                            optio ad corporis.
                        </p>
                        <div class="text-center">
                            <a href="#" class="more-btn"><span>Learn More</span> <i
                                    class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Why Box -->

                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-xl-4">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-clipboard-data"></i>
                                <h4>Corporis voluptates officia eiusmod</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                                    aliquip</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-gem"></i>
                                <h4>Ullamco laboris ladore lore pan</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-inboxes"></i>
                                <h4>Labore consequatur incidid dolore</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere
                                </p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Why Us Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

        <img src="{{ asset('front-assets/img/stats-bg.jpg') }}" alt="" data-aos="fade-in">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clients</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Workers</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Menu</h2>
            <p><span>Check Our</span> <span class="description-title">Yummy Menu</span></p>
        </div><!-- End Section Title -->


        <div class="container">

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">

                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#week1">
                        <h4>Week 1</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#week2">
                        <h4>Week 2</h4>
                    </a><!-- End tab nav item -->

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#week3">
                        <h4>Week 3</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#week4">
                        <h4>Week 4</h4>
                    </a>
                </li><!-- End tab nav item -->

            </ul>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                <div class="tab-pane fade active show" id="week1">

                    @php
                        $menu = \App\Models\Menu::where('week_id', 1)
                        ->with(['day'])
                        ->get();
                    @endphp

                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Week1</h3>
                    </div>

                    <div class="row gy-5">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Main</th>
                                    <th>Side #1</th>
                                    <th>Side #2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menu as $item)
                                    <tr>
                                        <td>{{ $item->day->name }}</td>
                                        <td>{{ $item->main }}</td>
                                        <td>{{ $item->side_1 }}</td>
                                        <td>{{ $item->side_2 }}</td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div><!-- End Starter Menu Content -->


                <div class="tab-pane fade" id="week2">

                    @php
                        $menu = \App\Models\Menu::where('week_id', 2)
                        ->with(['day'])
                        ->orderBy('day_id')
                        ->get();
                    @endphp

                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Week2</h3>
                    </div>

                    <div class="row gy-5">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Main</th>
                                    <th>Side #1</th>
                                    <th>Side #2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menu as $item)
                                    <tr>
                                        <td>{{ $item->day->name }}</td>
                                        <td>{{ $item->main }}</td>
                                        <td>{{ $item->side_1 }}</td>
                                        <td>{{ $item->side_2 }}</td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div><!-- End Starter Menu Content -->


                <div class="tab-pane fade" id="week3">

                    @php
                        $menu = \App\Models\Menu::where('week_id', 3)
                        ->with(['day'])
                        ->get();
                    @endphp

                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Week3</h3>
                    </div>

                    <div class="row gy-5">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Main</th>
                                    <th>Side #1</th>
                                    <th>Side #2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menu as $item)
                                    <tr>
                                        <td>{{ $item->day->name }}</td>
                                        <td>{{ $item->main }}</td>
                                        <td>{{ $item->side_1 }}</td>
                                        <td>{{ $item->side_2 }}</td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div><!-- End Starter Menu Content -->


                <div class="tab-pane fade" id="week4">

                    @php
                        $menu = \App\Models\Menu::where('week_id', 4)
                        ->with(['day'])
                        ->get();
                    @endphp

                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Week4</h3>
                    </div>

                    <div class="row gy-5">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Main</th>
                                    <th>Side #1</th>
                                    <th>Side #2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menu as $item)
                                    <tr>
                                        <td>{{ $item->day->name }}</td>
                                        <td>{{ $item->main }}</td>
                                        <td>{{ $item->side_1 }}</td>
                                        <td>{{ $item->side_2 }}</td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div><!-- End Starter Menu Content -->

            </div>

        </div>

    </section><!-- /Menu Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>TESTIMONIALS</h2>
            <p>What Are They <span class="description-title">Saying About Us</span></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora
                                                entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam
                                                eget nibh et. Maecen aliquam, risus at semper.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>Saul Goodman</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="{{ asset('front-assets/img/testimonials/testimonials-1.jpg') }}"
                                        class="img-fluid testimonial-img" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Export tempor illum tamen malis malis eram quae irure esse labore
                                                quem cillum quid cillum eram malis quorum velit fore eram velit sunt
                                                aliqua noster fugiat irure amet legam anim culpa.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>Sara Wilsson</h3>
                                        <h4>Designer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="{{ asset('front-assets/img/testimonials/testimonials-2.jpg') }}"
                                        class="img-fluid testimonial-img" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Enim nisi quem export duis labore cillum quae magna enim sint
                                                quorum nulla quem veniam duis minim tempor labore quem eram duis
                                                noster aute amet eram fore quis sint minim.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>Jena Karlis</h3>
                                        <h4>Store Owner</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="{{ asset('front-assets/img/testimonials/testimonials-3.jpg') }}"
                                        class="img-fluid testimonial-img" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos
                                                export minim fugiat minim velit minim dolor enim duis veniam ipsum
                                                anim magna sunt elit fore quem dolore labore illum veniam.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>John Larson</h3>
                                        <h4>Entrepreneur</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="{{ asset('front-assets/img/testimonials/testimonials-4.jpg') }}"
                                        class="img-fluid testimonial-img" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->




    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="mb-5">
                <iframe style="width: 100%; height: 400px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen=""></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <i class="icon bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
                        <i class="icon bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
                        <i class="icon bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
                        <i class="icon bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h3>Opening Hours<br></h3>
                            <p><strong>Mon-Sat:</strong> 11AM - 23PM; <strong>Sunday:</strong> Closed</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                data-aos-delay="600">
                <div class="row gy-4">

                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Your Name"
                            required="">
                    </div>

                    <div class="col-md-6 ">
                        <input type="email" class="form-control" name="email" placeholder="Your Email"
                            required="">
                    </div>

                    <div class="col-md-12">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>

                    <div class="col-md-12">
                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>

                        <button type="submit">Send Message</button>
                    </div>

                </div>
            </form><!-- End Contact Form -->

        </div>

    </section><!-- /Contact Section -->

@endsection
