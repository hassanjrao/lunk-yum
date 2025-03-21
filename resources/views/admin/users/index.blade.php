@extends('layouts.backend')

@section('page-title', 'Users')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Users
                </h3>


                {{-- <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Add</a> --}}



            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Plan</th>
                                <th>Starts From</th>
                                <th>Student Name</th>
                                <th>Student Grade</th>
                                <th>Student ID</th>
                                <th>Payment Method</th>
                                <th>Payment Receipt</th>
                                <th>Created At</th>
                                {{-- <th>Action</th> --}}

                            </tr>


                        </thead>

                        <tbody>
                            @foreach ($users as $ind => $user)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->plan->name }}</td>
                                    <td>{{ $user->starts_from }}</td>
                                    <td>{{ $user->student_name }}</td>
                                    <td>{{ $user->student_grade }}</td>
                                    <td>
                                        <img src="{{ $user->student_id_url }}" alt="" height="100px" width="100px">
                                    </td>
                                    <td>{{ $user->payment_method }}</td>
                                    <td>
                                        <img src="{{ $user->payment_receipt_url }}" alt="" height="100px" width="100px">
                                    </td>

                                    <td>{{ $user->created_at }}</td>


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
