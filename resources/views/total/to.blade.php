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
    Paeiment
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> <span style="font-size:17px;" class="text-success">
                    Bonjour vendeur {{ Auth::user()->name }}, ces statistiques pour vous
                </span></h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Menu</a></li>
                <li class="breadcrumb-item active">total</li>
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
                <div class="table-responsive">
                    <table class="table table-warning table-bordered border-warning">

                        <thead>
                            <tr>

                                <th scope="col">Client</th>
                                <th scope="col">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>{{ $ss }}</td>
                                <td><?php
                                use App\Models\Client;
                                $ss = Client::where('user', Auth::user()->name)
                                    ->get('Total')
                                    ->sum('Total');
                                echo '' . $ss . '';
                                ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="row">
                        <div class="col-xl-4 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Meilleure Client</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-20">
                                            <div class="media">
                                                <div class="position-relative">
                                                    <img class="img-fluid mr-15 avatar-small" src="images/item/01.png"
                                                        alt="">
                                                </div>
                                                <div class="media-body">
                                                    @foreach ($c1 as $i)
                                                        <h6 class="mt-0 mb-0  text-info">{{ $i->Nom }} <span
                                                                class="float-right text-success">
                                                    @endforeach

                                                    {{ $s }}MAD</span> </h6>
                                                    <p class="text-secondary">Top </p>
                                                </div>
                                            </div>
                                            <div class="divider dotted mt-20"></div>
                                        </li>

                                        <li class="mb-20">
                                            <div class="media">
                                                <div class="position-relative">
                                                    <img class="img-fluid mr-15 avatar-small" src="images/item/03.png"
                                                        alt="">
                                                </div>
                                                <div class="media-body">
                                                    @foreach ($c11 as $it)
                                                        <h6 class="mt-0 mb-0 text-info"> {{ $it->Nom }}<span
                                                                class="float-right text-danger">
                                                    @endforeach

                                                    {{ $s1 }}MAD</span> </h6>
                                                    <p class=" text-secondary"> faible</p>
                                                </div>
                                            </div>
                                            <div class="divider dotted mt-20"></div>
                                        </li>
                                        <li>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="tab nav-border" style="position: relative;">
                                        <div class="d-block d-md-flex justify-content-between">
                                            <div class="d-block w-100">
                                                <h5 class="card-title">Meilleures ventes</h5>
                                            </div>
                                            <div class="d-block d-md-flex nav-tabs-custom">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active show" id="months-tab"
                                                            data-toggle="tab" href="#months" role="tab"
                                                            aria-controls="months" aria-selected="true"> Months</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade active show" id="months" role="tabpanel"
                                                aria-labelledby="months-tab">
                                                <div class="row mb-30">
                                                    <div class="col-md-2 col-sm-6">
                                                        <img class="img-fluid" src="images/blog/05.jpg" alt="">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <h6 class="mb-0 sm-mt-5">Les promotions pour Vents</h6>

                                                        <span class="mb-0">by - <b class="text-info">Les
                                                                Farines</b></span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-primary mb-0"><b>120000</b></h5>
                                                        <span>vente</span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-secondary mb-0"><b>200MAD</b></h5>
                                                        <span>Revenue</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-30">
                                                    <div class="col-md-2 col-sm-6">
                                                        <img class="img-fluid" src="images/blog/02.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <h6 class="mb-0 sm-mt-5">Les promotions pour Vents</h6>

                                                        <span class="mb-0">by - <b class="text-warning">Les
                                                                Pates</b>
                                                        </span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-success mb-0"><b>50000</b></h5>
                                                        <span>vente</span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-danger mb-0"><b>50MAD</b></h5>
                                                        <span>Revenue</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-30">
                                                    <div class="col-md-2 col-sm-6">
                                                        <img class="img-fluid" src="images/blog/03.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <h6 class="mb-0 sm-mt-5">Les promotions pour Vents</h6>

                                                        <span class="mb-0">by - <b class="text-danger">Couscous</b>
                                                        </span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-warning mb-0"><b>80000</b></h5>
                                                        <span>vente</span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-info mb-0"><b>150MAD</b></h5>
                                                        <span>Revenue</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-6">
                                                        <img class="img-fluid" src="images/blog/04.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <h6 class="mb-0 sm-mt-5">Les clients augmentent</h6>

                                                        <span class="mb-0">by - <b class="text-success">client</b>
                                                        </span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-dark mb-0"><b>10</b></h5>
                                                        <span>+</span>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                        <h5 class="text-success mb-0"><b>500MAD</b></h5>
                                                        <span>Revenue</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                    < </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>
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
