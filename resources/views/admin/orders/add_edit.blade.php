@extends('layouts.backend')

@section('page-title', 'Order #' . $order->order_id)
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">Order #{{ $order->order_id }} </h3>
                <a href="{{ route('admin.orders.index') }}" class="btn btn-primary text-white">Back</a>

            </div>
            <div class="block-content">



                <div class="row push justify-content-center">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Order ID</label>
                            <input type="text" class="form-control" value="{{ $order->order_id }}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">User</label>
                            <input type="text" class="form-control" value="{{ $order->user->name }}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">User Email</label>
                            <input type="text" class="form-control" value="{{ $order->user->email }}" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-md-4">
                            <label class="form-label">Plan</label>
                            <input type="text" class="form-control" value="{{ $order->plan->name }}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">School</label>
                            <input type="text" class="form-control" value="{{ $order->school->name }}" disabled>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Payment Method</label>
                            <input type="text" class="form-control" value="{{ $order->payment_method }}" disabled>
                        </div>

                    </div>



                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Total Price</label>
                            <input type="text" class="form-control"
                                value="{{ number_format($order->total_price, 2) . ' ' . config('app.currency_code') }}"
                                disabled>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Discount Percentage</label>
                            <input type="text" class="form-control"
                                value="{{ number_format($order->discount_percentage, 2) }}%" disabled>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Final Price</label>
                            <input type="text" class="form-control"
                                value="{{ number_format($order->total_price_after_discount, 2) . ' ' . config('app.currency_code') }}"
                                disabled>
                        </div>

                        <div class="col-md-12 mt-2">
                            <label class="form-label">Payment Receipt</label>
                            <br>
                            <img src="{{ $order->payment_receipt_url }}" width="500px" height="300px">
                        </div>
                    </div>

                    <h4>Student Details</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Student ID Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->orderDetails as $ind=> $detail)
                                    <tr>
                                        <td>{{ ++$ind }}</td>
                                        <td>{{ $detail->student_name }}</td>
                                        <td>{{ $detail->student_class }}</td>
                                        <td>
                                            <img src="{{ $detail->student_id_url }}" alt="Student ID" class="img-thumbnail"
                                                width="150">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>



                </div>
            </div>





        </div>
        <!-- END Page Content -->
    @endsection

    @section('js_after')


    @endsection
