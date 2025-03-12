@extends('layouts.backend')

@section('page-title', 'Week ' . $week->id . ' Menu')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">Week {{ $week->id }} Menu</h3>

            </div>
            <div class="block-content">

                <form action="{{ route('admin.menu.update', $week->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="row push justify-content-center">



                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Main</th>
                                    <th>Side #1</th>
                                    <th>Side #2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menu as $item)
                                    <tr>
                                        <td>{{ $item->day->name }}</td>
                                        <td>
                                            <input type="text" class="form-control" name="menu[{{ $item->day->id }}][main]"
                                                value="{{ $item->main }}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="menu[{{ $item->day->id }}][side_1]"
                                                value="{{ $item->side_1 }}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="menu[{{ $item->day->id }}][side_2]"
                                                value="{{ $item->side_2 }}">
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>




                        <div class="d-flex justify-content-end mt-4">

                            <button type="submit" id="submitBtn" class="btn btn-primary text-white">Update</button>

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
