@extends('layouts.front')

@section('page-name', 'Register')

@section('content')
    <section class="contact section">
        <div class="container section-title aos-init aos-animate" data-aos="fade-up" style="padding-bottom: 0px">
            <p><span></span> <span class="description-title">Register</span></p>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="{{ route('register') }}" method="post" class="site-form aos-init aos-animate"
                        enctype="multipart/form-data" data-aos="fade-up" data-aos-delay="600">
                        @csrf

                        <div class="row gy-4">

                            <div class="col-md-6">
                                <label for="">Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="" value="{{ old('name') }}">

                                @error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="col-md-6 ">
                                <label for="">Your Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required="">
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    required="">

                                @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="Confirm Password" required="">

                                @error('password_confirmation')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-6">

                                @php
                                    $schools = App\Models\School::all();
                                @endphp
                                <label for="">School</label>

                                <select class="form-control" name="school_id" required>
                                    <option value="">Select School</option>
                                    @foreach ($schools as $school)
                                        <option value="{{ $school->id }}">{{ $school->name }}</option>
                                    @endforeach
                                </select>

                                @error('school')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-6">
                                <label for="">Student Name</label>
                                <input type="text" name="student_name" class="form-control" placeholder="Student Name"
                                    required="" value="{{ old('student_name') }}">

                                @error('student_name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>


                            <div class="col-md-6">
                                <label for="">Student Grade</label>
                                <input type="text" name="student_grade" class="form-control" placeholder="Student Grade"
                                    required="" value="{{ old('grade') }}">

                                @error('grade')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="col-md-6">
                                <label for="">Student ID Image</label>
                                <input type="file" name="student_id_image" class="form-control"
                                required
                                    placeholder="Student ID Image" value="{{ old('student_id_image') }}">

                                @error('student_id_image')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>



                            <div class="col-md-6">
                                <label for="">Starts From</label>
                                <input type="date" name="starts_from" id="startDate" class="form-control" placeholder="Starts From"
                                    required="" value="{{ old('grade') }}">

                                @error('grade')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="col-md-6">
                                <label for="">Ends At</label>
                                <input type="date" name="ends_at" id="endDate" class="form-control" placeholder="Ends At"
                                    value="{{ old('ends_at') }}">

                                @error('ends_at')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="col-md-6">
                                <label for="">Payment Method</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" onclick="toggleReceiptField()"
                                        id="bankTransfer" name="payment_method" value="option1" checked>
                                    <label class="form-check-label" for="bankTransfer">
                                        Bank Transfer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" onclick="toggleReceiptField()"
                                        disabled name="payment_method" id="radio2" value="option2">
                                    <label class="form-check-label" for="radio2">
                                        Card
                                    </label>
                                </div>

                                @error('payment_method')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="col-md-6" id="receiptUpload" style="display: none;">
                                <label for="">Upload Payment Receipt</label>
                                <input type="file" name="payment_receipt" required class="form-control"
                                    placeholder="Upload Payment Receipt">

                                @error('payment_receipt')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>


                            <div class="col-md-12 text-center">

                                <button type="submit">Register</button>
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
        function toggleReceiptField() {
            var bankTransfer = document.getElementById("bankTransfer");
            var receiptField = document.getElementById("receiptUpload");

            if (bankTransfer.checked) {
                receiptField.style.display = "block"; // Show file upload field
            } else {
                receiptField.style.display = "none"; // Hide file upload field
            }
        }


        function getNextMonday(date = new Date()) {
            let day = date.getDay(); // 0 = Sunday, 1 = Monday, ..., 6 = Saturday
            let daysUntilNextMonday = (day === 0) ? 1 : (8 - day); // If today is Sunday, next Monday is in 1 day
            date.setDate(date.getDate() + daysUntilNextMonday);
            return date;
        }

        function disableNonMondays() {
            let startDateField = document.getElementById("startDate");
            let today = new Date();
            let nextMonday = getNextMonday(today);

            // Set the min date to the next Monday
            let formattedDate = nextMonday.toISOString().split("T")[0];
            startDateField.min = formattedDate;
            startDateField.value = formattedDate;

            startDateField.addEventListener("input", function () {
                let selectedDate = new Date(this.value);
                if (selectedDate.getDay() !== 1) {
                    alert("You can only select a Monday!");
                    this.value = formattedDate; // Reset to the next Monday
                }
            });
        }


        window.onload = function() {
            toggleReceiptField();
            disableNonMondays();
        };
    </script>
@endpush
