@extends('layouts.front')

@section('page-name', 'Corporate Clients')

@section('styles')
    <style>
        h3 {
            font-family: sans-serif
        }
    </style>
@endsection

@section('content')
    <section class="contact section">
        <div class="container section-title aos-init aos-animate" data-aos="fade-up" style="padding-bottom: 0px">
            <p><span></span> <span class="description-title">Corporate Clients
                </span></p>
        </div>
        <br>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h3>Fuel Your Team with Fresh, Delicious Meals</h3>
                    <p>At Yum4Kids, we provide convenient and nutritious lunch delivery solutions for businesses of all
                        sizes.
                        Whether you're looking to keep your employees energized during meetings, offer daily meal plans, or
                        cater to
                        special corporate events, we’ve got you covered.</p>

                    <h3 class="mt-4">Why Choose Us for Your Corporate Meal Needs?</h3>
                    <ul class="list-unstyled">
                        <li>✅ <strong>Custom Meal Plans</strong> – Choose from a variety of meal options to fit your team’s
                            preferences and dietary needs.</li>
                        <li>✅ <strong>Reliable & On-Time Delivery</strong> – Punctual meal deliveries ensure your team stays
                            focused
                            without interruptions.</li>
                        <li>✅ <strong>Fresh & High-Quality Ingredients</strong> – Every meal is prepared in a hygienic
                            environment
                            using top-quality ingredients.</li>
                        <li>✅ <strong>Flexible Ordering</strong> – Set up daily, weekly, or monthly meal plans tailored to
                            your
                            business needs.</li>
                        <li>✅ <strong>Bulk & Group Discounts</strong> – Enjoy competitive pricing and discounts for large
                            group
                            orders.</li>
                    </ul>

                    <h3 class="mt-4">How It Works</h3>
                    <ol>
                        <li><strong>Consultation</strong> – Contact us to discuss your company’s meal needs and preferences.
                        </li>
                        <li><strong>Customized Meal Plan</strong> – Choose from our menu or let us create a tailored meal
                            schedule
                            for your employees.</li>
                        <li><strong>Seamless Delivery</strong> – Meals are prepared fresh and delivered directly to your
                            office or
                            event location.</li>
                        <li><strong>Enjoy & Repeat</strong> – Keep your team satisfied with hassle-free, delicious meals
                            every day!
                        </li>
                    </ol>

                    <h3 class="mt-4">Ideal for:</h3>
                    <ul class="list-unstyled">
                        <li>✔️ Offices & Co-Working Spaces</li>
                        <li>✔️ Business Meetings & Conferences</li>
                        <li>✔️ Employee Meal Programs</li>
                        <li>✔️ Corporate Events & Training Sessions</li>
                    </ul>

                    <h3 class="mt-4">Get Started Today!</h3>
                    <p>Interested in setting up a corporate meal plan? Contact us at <a
                            href="mailto:sales@Yum4Kids.pk">sales@Yum4Kids.pk</a> or fill out our <strong>Corporate Client
                            Inquiry
                            Form</strong> to learn more about pricing and menu options. Let us take care of lunch so your
                        team can
                        stay productive and satisfied!</p>

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="{{ route('corporate-clients.store') }}" method="post"
                        class="site-form aos-init aos-animate" enctype="multipart/form-data" data-aos="fade-up"
                        data-aos-delay="600" id="orderForm" onsubmit="handleSubmit(event)">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <label for="">Company Name</label>
                                <input type="text" name="company_name" class="form-control" placeholder="Company Name"
                                    required="" value="{{ old('company_name') }}">

                                @error('company_name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="col-md-6">
                                <label for="">Contact Person</label>
                                <input type="text" name="contact_person" class="form-control"
                                    placeholder="Contact Person" required="" value="{{ old('contact_person') }}">

                                @error('contact_person')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="col-md-6">
                                <label for="">Email Address</label>
                                <input type="email" name="email_address" class="form-control"
                                    placeholder="Email Address" required="" value="{{ old('email_address') }}">

                                @error('email_address')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="col-md-6">
                                <label for="">Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number"
                                    required="" value="{{ old('phone') }}">

                                @error('phone')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="col-md-6">
                                <label for="">Number Of Employees</label>
                                <input type="number" name="total_employees" class="form-control"
                                    placeholder="Number Of Employees" required="" value="{{ old('total_employees') }}">

                                @error('total_employees')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="col-md-6">
                                <label for="">Meal Subscription</label>

                                <select id="meal_subscription" name="meal_subscription" class="form-select" required>
                                    <option value="Daily">Daily</option>
                                    <option value="Weekly">Weekly</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="One-Time Event">One-Time Event</option>
                                </select>


                                @error('meal_subscription')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="col-md-12">
                                <label for="">Special Request</label>
                                <textarea name="special_request" class="form-control" placeholder="Special Request">{{ old('special_request') }}</textarea>

                                @error('special_request')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="col-md-12 text-center">

                                <button type="submit" id="submitBtn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection

@push('scripts')
    <script>
        function handleSubmit(event) {

            let submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled = true;
            submitBtn.innerText = 'Submitting...';

        }
    </script>
@endpush
