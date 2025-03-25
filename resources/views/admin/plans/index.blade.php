@extends('layouts.backend')

@section('page-title', 'Plans')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Plans
                </h3>


                <a href="{{ route('admin.plans.create') }}" class="btn btn-primary">Add</a>



            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Days</th>
                                <th>Price</th>
                                {{-- <th>Description</th> --}}
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>


                        </thead>

                        <tbody>
                            @foreach ($plans as $ind => $plan)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $plan->name }}</td>
                                    <td>{{ $plan->days }}</td>
                                    <td>{{ $plan->price }}</td>
                                    {{-- <td>{{ $plan->description }}</td> --}}

                                    <td>{{ $plan->created_at }}</td>
                                    <td>{{ $plan->updated_at }}</td>

                                    <td>
                                        <a href="{{ route('admin.plans.edit', $plan->id) }}" class="btn btn-sm btn-primary"
                                            data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form id="form-{{ $plan->id }}"
                                            action="{{ route('admin.plans.destroy', $plan->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" onclick="confirmDelete({{ $plan->id }})" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                                title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                        </form>
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
