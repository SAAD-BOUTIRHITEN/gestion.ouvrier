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
    Client
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 style="color: red" class="mb-0">les clients fidèles</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Menu</a></li>
                <li class="breadcrumb-item active"> Client</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
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
@if (session()->has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('delete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<!-- row -->
<div class="row">
    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                        data-toggle="modal" href="#modaldemo8">Add Client</a>

                </div>
                <p>
                <table id="datatable" class="table table-striped table-bordered p-0">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Adress</th>
                            <th>Total</th>
                            <th>status</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 0; ?>
                        @foreach ($s as $key)
                            <?php $i++; ?>

                            <tr>

                                <td>{{ $i }}</td>
                                <td>{{ $key->Nom }}</td>
                                <td> {{ $key->Adress }}</td>
                                <td>{{ $key->Total }}</td>
                                <td> <a class="modal-effect btn btn-info btn-sm" data-effect="effect-scale"
                                        data-id="{{ $key->id }}" data-section_name="" data-description=""
                                        data-toggle="modal" href="#edit_Product"><i class="las la-pen"></i>Changer</a>


                                    <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                        data-id="{{ $key->id }}" data-Product_name="" data-toggle="modal"
                                        href="#modaldemo9"><i class="las la-trash"></i>Effacer</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>
            </div>
        </div>

        <div class="modal" id="modaldemo8">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Add client</h6><button aria-label="Close" class="close"
                            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('cli.store') }}" method="post">

                            @method('post')
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" id="id" value="">
                                <label for="recipient-name" class="col-form-label">Nom</label>
                                <input class="form-control" name="product_name" id="product_name" type="text">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Adress</label>
                                <input class="form-control" name="Quentiter" id="Quentiter" type="text">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Total</label>
                                <input class="form-control" name="Valeur" id="Valeur" type="text">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">ok</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                    </div>


                    </form>


                </div>
            </div>
        </div>

        <div class="modal fade" id="edit_Product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chnger client </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action='{{ route('c.int') }}' method="post">
                        @method('post')
                        @csrf
                        <div class="modal-body">

                            <div class="form-group">
                                <input type="hidden" class="form-control" name="pro_id" id="pro_id"
                                    value="" readonly>
                                <label for="title">Nom</label>
                                <input type="text" class="form-control" name="Product_name" id="Product_name">
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" name="pro_id" id="pro_id"
                                    value="">
                                <label for="title">Adress</label>
                                <input type="text" class="form-control" name="qr" id="Product_name">
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="pro_id" id="pro_id"
                                    value="">
                                <label for="title">Total</label>
                                <input type="text" class="form-control" name="vr" id="Product_name">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">OK </button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal" id="modaldemo9">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">effacer</h6><button aria-label="Close" class="close"
                            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ route('cc.de') }}" method="post">
                        @method('delete')
                        @csrf
                        <div class="modal-body">
                            <p>؟Voullez-vous effacer cette operation</p><br>
                            <input type="text" class="form-control" name="pro_id" id="pro_id" value=""
                                readonly>
                            <input class="form-control" name="section_name" id="section_name" type="hidden"
                                readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-danger">Ok</button>
                        </div>
                </div>
                </form>
            </div>
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
<script>
    $('#edit_Product').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')

        var modal = $(this)
        modal.find('.modal-body #pro_id').val(id);

    })
    $('#modaldemo9').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var Product_name = button.data('Product_name')
        var modal = $(this)
        modal.find('.modal-body #pro_id').val(id);
        modal.find('.modal-body #section_name').val(Product_name);


    })
</script>
@endsection
