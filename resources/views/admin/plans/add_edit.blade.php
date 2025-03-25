@extends('layouts.backend')

@php
    $addEdit = isset($plan) ? 'Edit' : 'Add';
    $addUpdate = isset($plan) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Plan ')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Plan </h3>

            </div>
            <div class="block-content">

                @if ($plan)
                    <form action="{{ route('admin.plans.update', $plan->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('admin.plans.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">



                        <div class="row mb-4">


                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                <?php
                                $value = old('name', $plan ? $plan->name : null);

                                ?>
                                <label class="form-label" for="label"> Name <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="name" name="name" placeholder="Enter name">
                                @error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                <?php
                                $value = old('days', $plan ? $plan->days : null);

                                ?>
                                <label class="form-label" for="label"> Days <span class="text-danger">*</span></label>
                                <input required type="number" value="{{ $value }}" class="form-control"
                                    id="days" name="days" placeholder="Enter days">
                                @error('days')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                <?php
                                $value = old('price', $plan ? $plan->price : null);

                                ?>
                                <label class="form-label" for="label"> Price <span class="text-danger">*</span></label>
                                <input required type="number" step=".01" value="{{ $value }}" class="form-control"
                                    id="price" name="price" placeholder="Enter price">
                                @error('price')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>





                        </div>



                    </div>



                    <div class="d-flex justify-content-end mt-4">

                        <button type="submit" id="submitBtn" class="btn btn-primary text-white">{{ $addUpdate }}</button>

                    </div>

                </div>


                </form>


            </div>
        </div>





    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
