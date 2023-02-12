        <!--=================================
 header start-->
        <nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <!-- logo -->

            <div class="text-left navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="#"><img src="assets/images/s7.jpeg" alt=""></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/s7.jpeg"
                        alt=""></a>
            </div>

            <!-- Top bar left -->
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
                        href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
                </li>
                <!--  <li class="nav-item">
                    <div class="search">
                        <a class="search-btn not_click" href="javascript:void(0);"></a>
                       <div class="search-box not-click">
                            <input type="text" class="not-click form-control" placeholder="Search" value=""
                                name="search">
                            <button class="search-button" type="submit"> <i
                                    class="fa fa-search not-click"></i></button>
                        </div>
                    </div>
                </li>-->
            </ul>
            <!-- top bar right -->
            <ul class="nav navbar-nav ml-auto">
                <!--  <li class="nav-item fullscreen">
                    <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
                </li>-->
                <li class="nav-item dropdown ">
                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="ti-bell"></i>
                        <span class="badge badge-danger notification-status"> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
                        <div class="dropdown-header notifications">

                            <a href="{{ route('farine.create') }}">All Read</a>
                            <span
                                class="badge badge-pill badge-warning">{{ Auth::user()->unreadNotifications()->count() }}</span>

                        </div>
                        <div class="dropdown-divider"></div>


                        @foreach (Auth::user()->unreadNotifications as $notification)
                            <a href="#" class="dropdown-item">{{ $notification->data['produit'] }}<small
                                    class="float-right text-muted time">{{ $notification->data['user'] }}</small> </a>
                        @endforeach
                    </div>

                </li>

                <li class="nav-item dropdown mr-30">
                    <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">

                        <img src="{{ asset('storage/suppoet/do.ico') }}" alt="avatar">


                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0">{{ Auth::user()->name }}</h5>
                                    <span>{{ Auth::user()->email }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>


                        <a class="dropdown-item" href="{{ route('pr.index') }}"><i
                                class="text-warning ti-user"></i>Profile</a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                class="text-danger ti-unlock"></i>Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                            @csrf

                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <!--=================================
 header End-->
