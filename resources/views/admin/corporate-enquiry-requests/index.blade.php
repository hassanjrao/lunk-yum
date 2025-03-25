@extends('layouts.backend')

@section('page-title', 'Corporate Enquiry Requests')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Corporate Enquiry Requests
                </h3>


                {{-- <a href="{{ route('admin.requestUs.create') }}" class="btn btn-primary">Add</a> --}}



            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Company Name</th>
                                <th>Contact Person</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Number of Employees</th>
                                <th>Meal Subscription</th>
                                <th>Special Request</th>
                                <th>Created At</th>
                                {{-- <th>Action</th> --}}

                            </tr>


                        </thead>

                        <tbody>
                            @foreach ($requests as $ind => $request)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $request->company_name }}</td>
                                    <td>{{ $request->contact_person }}</td>
                                    <td>{{ $request->email_address }}</td>
                                    <td>{{ $request->phone }}</td>
                                    <td>{{ $request->total_employees }}</td>
                                    <td>{{ $request->meal_subscription }}</td>
                                    <td>{{ $request->special_request }}</td>

                                    <td>{{ $request->created_at }}</td>


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
