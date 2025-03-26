@extends('layouts.front')

@section('page-name', 'Order Now')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

@endsection

@section('content')
    <section class="contact section">
        <div class="container section-title aos-init aos-animate" data-aos="fade-up" style="padding-bottom: 0px">
            <p><span></span> <span class="description-title">Order Now</span></p>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form action="{{ route('order.store') }}" method="post" class="site-form aos-init aos-animate"
                        enctype="multipart/form-data" data-aos="fade-up" data-aos-delay="600" id="orderForm"
                        onsubmit="handleSubmit(event)">
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
                                <label for="">Relation</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="parent" name="relation"
                                        value="parent" checked>
                                    <label class="form-check-label" for="parent">
                                        Parent
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="guardian" name="relation"
                                        value="guardian">
                                    <label class="form-check-label" for="guardian">
                                        Guardian
                                    </label>
                                </div>


                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="relative" name="relation"
                                        value="relative">
                                    <label class="form-check-label" for="relative">
                                        Relative
                                    </label>
                                </div>


                                @error('relation')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="col-md-6">
                            </div>


                            <div class="col-md-6">

                                @php
                                    $schools = App\Models\School::all();
                                @endphp
                                <label for="">School</label>

                                <select class="form-select" name="school_id" required>
                                    <option value="">Select School</option>
                                    @foreach ($schools as $school)
                                        <option value="{{ $school->id }}"
                                            {{ old('school_id') == $school->id ? 'selected' : '' }}>
                                            {{ $school->name }}</option>
                                    @endforeach
                                </select>

                                @error('school')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="">Starts From</label>
                                <input type="date" name="starts_from" id="startDate" class="form-control"
                                    placeholder="Starts From" required="" value="{{ old('grade') }}">
                                <i>* Service will begin the following Monday.</i>
                                @error('grade')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>


                            <div class="col-md-12">
                                <label>Student Information</label>
                                <div id="studentContainer">
                                    <!-- Default child fields (at least one required) -->
                                    <div class="child-entry">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="">Student Name</label>
                                                <input type="text" name="students[0][name]" class="form-control"
                                                    placeholder="Student Name" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">Student Class</label>
                                                <input type="text" name="students[0][class]" class="form-control"
                                                    placeholder="Student Class" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">Student ID</label>
                                                <input type="file" accept="image/*" name="students[0][image]" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="addStdBtn" class="btn btn-secondary mt-2">Add Student</button>
                            </div>

                            <div class="col-md-6">
                                <label for="">Choose Plan</label>

                                @foreach ($plans as $ind => $plan)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="plan{{ $plan->id }}"
                                            data-price="{{ $plan->price }}" name="plan_id" value="{{ $plan->id }}"
                                            {{ $ind == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="plan{{ $plan->id }}">
                                            {{ $plan->name }} <span>{{ $plan->price }}</span>
                                            {{ config('app.currency_code') }}
                                        </label>
                                    </div>
                                @endforeach



                                @error('subscription_plan')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>




                            <div class="col-md-6">
                                <label for="">Payment Method</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" onclick="toggleReceiptField()"
                                        id="bankTransfer" name="payment_method" value="bank_transfer" checked>
                                    <label class="form-check-label" for="bankTransfer">
                                        Bank Transfer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" onclick="toggleReceiptField()"
                                        disabled name="payment_method" id="radio2" value="card">
                                    <label class="form-check-label" for="radio2">
                                        Card (<i>Credit Cards and Easy Paisa coming soon</i>)
                                    </label>
                                </div>

                                @error('payment_method')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>


                            <div class="col-md-6">
                                <br>
                                <label for="">Total Price After discount: <b id="totalPrice"></b>
                                    {{ config('app.currency_code') }}</label>
                            </div>

                            <div class="col-md-6" id="receiptUpload" style="display: none;">
                                <label for="">Upload Payment Receipt</label>
                                <input type="file" name="payment_receipt" required class="form-control"
                                accept="image/*"
                                    placeholder="Upload Payment Receipt">

                                @error('payment_receipt')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>




                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="certifyParent" name="certifyParent" required>
                                    <label class="form-check-label" for="certifyParent">
                                        By submitting this form, I certify that I am the parent or legal guardian of the student receiving this lunch delivery,
                                        or that I have obtained explicit permission from the student’s parent or legal guardian to place this order. I understand
                                        that false or misleading information may result in the cancellation of the order and can have legal repercussions.
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="certifyDietary" name="certifyDietary" required>
                                    <label class="form-check-label" for="certifyDietary">
                                        By submitting this form, I certify that I have read and understand the 'Dietary Needs' section of the website.
                                        I acknowledge that Yum4Kids does not accommodate food allergies and that cross-contamination is possible.
                                        I accept full responsibility for determining whether the menu items are suitable for the intended recipient's dietary needs.
                                    </label>
                                </div>

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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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









        function handleSubmit(event) {

            let submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled = true;
            submitBtn.innerText = 'Submitting...';

        }



        window.onload = function() {
            toggleReceiptField();
            // restrictToMondays();
        };


        document.addEventListener("DOMContentLoaded", function() {
            let maxChildren = 5;
            let childIndex = 1; // Start from 1 since one child is already there

            let basePrice = 0; // Adjust based on your logic

            function updateBasePrice() {
                let selectedPlan = document.querySelector('input[name="plan_id"]:checked');
                basePrice = selectedPlan ? parseFloat(selectedPlan.getAttribute("data-price")) : 0;

                updatePrice();
            }


            function updatePrice() {
                let childrenCount = document.querySelectorAll(".child-entry").length;
                let selectedPlan = document.querySelector('input[name="plan_id"]:checked');

                let totalPrice = basePrice;
                let discount = 0;



                if (childrenCount > 1) {
                    discount = totalPrice * 0.05 * (childrenCount-1);
                }

                let discountedPrice = totalPrice - discount;
                // basePrice=discountedPrice;

                console.log('totalPrice', totalPrice)
                console.log('discountedPrice', discountedPrice)

                document.getElementById("totalPrice").innerText = discountedPrice.toFixed(2);
                // document.getElementById("discountedPrice").value = discountedPrice.toFixed(2);
            }

            // Update price when plan selection changes
            document.querySelectorAll('input[name="plan_id"]').forEach(plan => {
                plan.addEventListener("change", updateBasePrice);

            });

            document.getElementById("addStdBtn").addEventListener("click", function() {
                let container = document.getElementById("studentContainer");

                if (childIndex < maxChildren) {
                    let childHTML = `
                    <div class="child-entry mt-3" id="child-${childIndex}">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="students[${childIndex}][name]" class="form-control" placeholder="Student Name" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="students[${childIndex}][class]" class="form-control" placeholder="Student Class" required>
                            </div>
                            <div class="col-md-3">
                                <input type="file" name="students[${childIndex}][image]" accept="image/*" class="form-control" required>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-sm btn-danger removeChildBtn" data-index="${childIndex}">X</button>
                            </div>
                        </div>
                    </div>`;

                    container.insertAdjacentHTML("beforeend", childHTML);
                    childIndex++;
                    updatePrice();
                } else {
                    alert("You can only add up to 5 children.");
                }
            });

            document.getElementById("studentContainer").addEventListener("click", function(event) {
                if (event.target.classList.contains("removeChildBtn")) {
                    let index = event.target.getAttribute("data-index");
                    document.getElementById(`child-${index}`).remove();
                    childIndex--;
                    updatePrice();
                }
            });
            updateBasePrice();

            flatpickr("#startDate", {
                minDate: "today", // Disable past dates
                dateFormat: "Y-m-d", // Format date as YYYY-MM-DD
                disable: [
                    function(date) {
                        return date.getDay() !== 1; // Disable all days except Monday (1)
                    }
                ]
            });

        });
    </script>
@endpush
