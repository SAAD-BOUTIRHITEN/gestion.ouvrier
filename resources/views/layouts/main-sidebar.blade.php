<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>

                        <a href="{{ route('dashboard') }}"> <i class="ti-home"></i><span class="right-nav-text">Menu</span>
                        </a>

                    </li>
                    <!-- menu title -->
                    <li style="color: red" class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">DaliaFood </li>
                    <!-- menu item Elements-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">Add
                                    Product</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('farine.index') }}">Les farines et Semoules </a></li>
                            <li><a href="{{ route('pate.index') }}">Les Pâtes Alimentaires</a></li>
                            <li><a href="{{ route('co.index') }}">Le Couscous</a></li>

                        </ul>
                    </li>
                    <!-- menu item calendar-->

                    <!-- menu item todo-->
                    <li>
                        <a href="{{ route('cli.index') }}"><i class="ti-id-badge"></i><span
                                class="right-nav-text">Client</span>
                        </a>
                    </li>
                    <!-- menu item chat-->
                    <li>
                        <a href="{{ route('to.index') }}"><i class="ti-pie-chart"></i><span class="right-nav-text">total
                            </span></a>
                    </li>
                    <!-- menu item mailbox-->
                    <li>
                        <a href="{{ route('ma.index') }}"><i class="ti-email"></i><span class="right-nav-text">support
                                technique
                            </span> <span class="badge badge-pill badge-warning float-right mt-1">HOT</span> </a>
                    </li>
                    <!-- menu item Charts-->

                    <!-- menu font icon-->

                    <!-- menu title -->

                    <!-- menu item Widgets-->

                    <!-- menu item Form-->

                    <!-- menu item table -->


                    <!-- menu item Custom pages-->

                    <!-- menu item Authentication-->

                    <!-- menu item maps-->

                    <!-- menu item timeline-->

                    <!-- menu item Multi level-->

                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
