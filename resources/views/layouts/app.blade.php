<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- momentsjs -->
    <script type="text/JavaScript" src=" https://MomentJS.com/downloads/moment.js"></script>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="sb-nav-fixed">
    <?php

    use Illuminate\Support\Facades\DB;

    $vendors = DB::table('vendors')->select('*')->get();
    ?>
    <div id="app">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('/') }}">
                <!-- {{ __('Inventory Management') }} -->

                <img class="logo-image" src="logo1.png" class="img-fluid" height="50" alt="">
                {{ __('Inventory Management') }}
            </a>
            <div>
                <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            </div>
            <!-- Navbar Search-->
            <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form> -->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3">
                <ul class="navbar-nav ml-auto">
                    <!-- links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right logout-bg-color" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            @if (!Auth::guest())
                            <a class="nav-link mt-2" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <!-- MRN -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMrn" aria-expanded="false" aria-controls="collapseMrn">
                                <div class="sb-nav-link-icon"><i class="fas fa-paperclip"></i></div>
                                MRN
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseMrn" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="{{ (\Request::route()->getName() == 'mrn') ? 'active text-primary' : '' }} nav-link" href="{{ route('mrn') }}">Mrn</a>
                                </nav>
                            </div>
                            <!-- Vendors -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                                Vendors
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ Route('vendor') }}">View Vendors</a>

                                </nav>
                            </div>
                            <!-- Materials -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMaterials" aria-expanded="false" aria-controls="collapseMaterials">
                                <div class="sb-nav-link-icon"><i class="fas fa-industry"></i></div>
                                Materials
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseMaterials" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="{{ (\Request::route()->getName() == 'material') ? 'active text-primary' : '' }} nav-link" href="{{ route('material') }}">{{ __('Materials') }}</a>

                                </nav>
                            </div>
                            <!-- Orders -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrders" aria-expanded="false" aria-controls="collapseOrders">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Orders
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseOrders" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="{{ (\Request::route()->getName() == 'order') ? 'active text-primary' : '' }} nav-link" href="{{ route('order') }}">{{ __('Orders') }}</a>

                                </nav>
                            </div>

                            @else
                            @endif

                            <div class="sb-sidenav-menu-heading ">Reports</div>
                            <div class="d-inline-flex ml-3">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                <button class="btn nav-link btn-link " data-toggle="modal" data-target="#inward">Inward Report</button>
                            </div>

                            <div class="d-inline-flex ml-3">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                <button class="btn btn-link nav-link" data-toggle="modal" data-target="#dispatched">Dispatch Report</button>
                            </div>

                            <div class="d-inline-flex ml-3">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                <button class="btn btn-link nav-link" data-toggle="modal" data-target="#reconciliaiton">Reconciliation Report</button>
                            </div>
                        </div>
                    </div>
                    @if (!Auth::guest())
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: </div>
                        <p>{{ auth::user()->name }}</p>
                    </div>
                    @endif
                </nav>
            </div>

            @yield('content')
            <!-- modal inward -->
            <div class="modal fade" id="inward" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-bg">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Select Vendor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ Route('report.inward') }}" method="POST">
                                @csrf
                                <div class="d-flex justify-content-between">
                                    <div class="form-group ">
                                        <label class="label-color" for="name">Select Vendor</label>
                                        <select class="ml-1 btn btn-secondary btn-sm dropdown-toggle" name="party_name">
                                            @foreach($vendors as $vendor)
                                            <option value="{{ $vendor->party_name }}">{{$vendor->party_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="ml-2 btn view-btn-color font-weight-bold">Generate Report</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end of modal div -->

            <!-- dispatch modal -->
            <div class="modal fade" id="dispatched" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-bg">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Select Vendor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ Route('report.dispatched') }}" method="POST">
                                @csrf
                                <div class="d-flex justify-content-between">
                                    <div class="form-group ">
                                        <label class="label-color" for="name">Select Vendor</label>
                                        <select class="ml-1 btn btn-secondary btn-sm dropdown-toggle" name="party_name">
                                            @foreach($vendors as $vendor)
                                            <option value="{{ $vendor->party_name }}">{{$vendor->party_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="ml-2 btn view-btn-color font-weight-bold">Generate Report</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end of modal div -->

            <!-- reconciliation -->
            <div class="modal fade" id="reconciliaiton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-bg">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Select Vendor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ Route('report.reconciliation') }}" method="POST">
                                @csrf
                                <div class="d-flex justify-content-between">
                                    <div class="form-group ">
                                        <label class="label-color" for="name">Select Vendor</label>
                                        <select class="ml-1 btn btn-secondary btn-sm dropdown-toggle" name="party_name">
                                            @foreach($vendors as $vendor)
                                            <option value="{{ $vendor->party_name }}">{{$vendor->party_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="label-color" for="name">Select Date</label>
                                        <input class="form-control input-bg-color" type="date" name="date">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="ml-2 btn view-btn-color font-weight-bold">Generate Report</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end of modal div -->

        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/searchbar.js') }}"></script>
</body>

</html>