@extends('layouts.front')

@section('page-name', 'Login')
@section('content')
    <section class="contact section">
        <div class="container section-title aos-init aos-animate" data-aos="fade-up" style="padding-bottom: 0px">
            <p><span></span> <span class="description-title">Login</span></p>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('login') }}" method="post" class="site-form aos-init aos-animate"
                        enctype="multipart/form-data" data-aos="fade-up" data-aos-delay="600">
                        @csrf

                        <div class="row gy-4">


                            <div class="col-md-12">
                                <label for="">Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required="">
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    required="">

                                @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-12 text-center">

                                <button type="submit">Login</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>
@endsection
