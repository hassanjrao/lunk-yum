@extends('layouts.backend')

@section('page-title', 'Orders')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Orders
                </h3>


                {{-- <a href="{{ route('admin.orders.create') }}" class="btn btn-primary">Add</a> --}}



            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Order Id</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>Plan</th>
                                <th>School</th>
                                <th>Total Students</th>
                                <th>Payment Method</th>
                                <th>Payment Receipt</th>
                                <th>Starts From</th>
                                <th>Discount %</th>
                                <th>Total Price</th>
                                <th>Total Price After Discount</th>
                                <th>Created At</th>
                                <th>Action</th>

                            </tr>


                        </thead>

                        <tbody>
                            @foreach ($orders as $ind => $order)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <th>{{ $order->order_id }}</th>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->user->email }}</td>
                                    <td>{{ $order->plan->name }}</td>
                                    <td>{{ $order->school->name }}</td>
                                    <td>{{ $order->orderDetails->count() }}</td>
                                    <td>{{ $order->payment_method }}</td>
                                    <td>
                                        <img src="{{ $order->payment_receipt_url }}" width="100px" height="100px">
                                    </td>
                                    <td>{{ $order->starts_from }}</td>
                                    <td>{{ $order->discount_percentage }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td>{{ $order->total_price_after_discount }}</td>

                                    <td>{{ $order->created_at }}</td>


                                    <td>
                                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-sm btn-primary"
                                            data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>








    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
