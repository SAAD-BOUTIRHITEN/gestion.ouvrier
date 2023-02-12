@extends('layouts.new')
@section('css')
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!-- CSS only -->


@section('title')
    profile
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session()->has('Add'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('Add') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">

            <img @foreach ($te as $key) src="{{ asset('storage/suppoet/' . $key->namef) }}" @endforeach
                class="rounded-circle" alt="photo profile" width="200px">

        </div>
        <div class="col-6"style="text-align: center">


        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">

            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <p>
                <form method="post" action="{{ route('pr.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="{{ Auth::user()->name }}"
                            aria-label="Username" readonly>
                        <span class="input-group-text">//</span>
                        <input type="text" class="form-control" placeholder="{{ Auth::user()->email }}"
                            aria-label="Server" readonly>
                    </div>



                    <div class="input-group mb-3">
                        <span class="input-group-text">Description</span>

                        <textarea class="form-control" aria-label="With textarea" name="a1"
                            @foreach ($te as $key) placeholder="{{ $key->description }}" @endforeach></textarea>

                    </div>

                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="a2" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">photo</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg " name="uploadedFile">Ok</button>
                </form>
            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>
        </div>
    </div>
</div>
</div>
<!-- row closed -->
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
<!--Internal  Datatable js -->
<script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
<script src="{{ URL::asset('assets/js/modal.js') }}"></script>
<!-- JavaScript Bundle with Popper -->

@endsection
