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
                    <h1 data-aos="fade-up">
                        Hygienic Hassle-Free School Launches
                    </h1>

                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{ asset('front-assets/img/pic 3.webp') }}" class="img-fluid animated" alt="">
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
                    <img src="{{ asset('front-assets/img/pic 5.webp') }}" class="img-fluid mb-4" alt="">
                    <div class="book-a-table">
                        <h3>Order Now</h3>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">

                        <p>
                            At <b>Yum4Kids</b>, we believe that every child deserves a nutritious, delicious, and
                            hassle-free lunch. Our mission is to provide <b>fresh, balanced, and hygienically prepared
                                meals</b> that fuel students throughout their busy school day. With a focus on <b>quality
                                ingredients, variety, and convenience</b>, we take the stress out of packing lunches for
                            parents while ensuring kids enjoy meals they love. Our expert chefs craft wholesome,
                            kid-approved menus that cater to different dietary needs, all delivered safely and on time to
                            schools. With <b>Yum4Kids, lunchtime is easy, healthy, and worry-free!</b>

                        </p>

                        <div class="position-relative mt-4">
                            <img src="{{ asset('front-assets/img/pic 6.webp') }}" class="img-fluid" alt="">

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section light-background">

        <div class="container">

            <div class="row gy-4 justify-content-center">

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-box">
                        <h3>Why Choose {{ config('app.name') }}</h3>

                        <h4 class="text-white">🍏 Nutrition Meets Convenience</h4>
                        <p> At <b>Yum4Kids</b>, we make healthy eating easy! Our meals are crafted
                            with fresh, high-quality ingredients to provide balanced nutrition that keeps kids energized and
                            focused throughout the school day.</p>
                        <h4 class="text-white">🥗 Safe, Hygienic, and Delicious</h4>
                        <p>Food safety is our top priority. We prepare every meal in a
                            <b>certified, hygienic kitchen</b> following strict quality standards, ensuring that your
                            child’s lunch
                            is both safe and delicious.
                        </p>
                        <h4 class="text-white">🚀 Stress-Free for Parents</h4>
                        <p>Say goodbye to the morning lunch rush! With <b>Yum4Kids</b>, parents can
                            enjoy peace of mind knowing their child receives a wholesome, ready-to-eat meal—freshly prepared
                            and delivered directly to school.</p>


                    </div>
                </div><!-- End Why Box -->

                {{-- <div class="col-lg-8 d-flex align-items-stretch">
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
                </div> --}}

            </div>

        </div>

    </section><!-- /Why Us Section -->


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





    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">


            <div class="row gy-4">

                <div class="col-md-4">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
                        <i class="icon bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>0330 3038184</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-4">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
                        <i class="icon bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>sales@Yum4Kids.pk</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-4">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
                        <i class="icon bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h3>Opening Hours<br></h3>
                            <p>9am-5pm</p>
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
