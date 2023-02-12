<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
    @section('css')
        <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    </head>

    <body>

        <div class="wrapper">

            <!--=================================
                                 preloader -->

            <div id="pre-loader">
                <img src="assets/images/pre-loader/loader-01.svg" alt="">
            </div>

            <!--=================================
                                 preloader -->

            @include('layouts.main-header')

            @include('admi.main-sid')

            <!--=================================
                                 Main content -->
            <!-- main-content -->
            <div class="content-wrapper">

                @yield('page-header')

                @yield('content')
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <p>
                                <div class="table-responsive">
                                    <table class="table table-warning table-bordered border-warning">

                                        <thead>
                                            <tr>

                                                <th scope="col">ouvrier</th>
                                                <th scope="col">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($g as $o)
                                                <tr>

                                                    <td>{{ $o->user }}</td>
                                                    <td>{{ $o->Total }}</td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>




                                    < </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=================================
                                 wrapper -->

                <!--=================================
                                 footer -->


            </div><!-- main content wrapper end-->

        </div>

        </div>

        <!--=================================
                                 footer -->

        @include('layouts.footer-scripts')

    </body>

    </html>
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
