<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <!-- Bootstrap CSS-->

    {{--<script type="text/javascript" src="/js/bootstrap/js/bootstrap.min.js"></script>--}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">




    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/img/makikoitoh.ico" type="image/x-icon">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

</head>
<body>
<div class="page">
    <!-- Main Navbar-->
    <header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <!-- Navbar Header-->
                    <div class="navbar-header">
                        <!-- Navbar Brand --><a href="{{route('home')}}" class="navbar-brand d-none d-sm-inline-block">
                            <div class="brand-text d-none d-lg-inline-block"><span>PROJECT </span><strong>EDWARD</strong></div>
                            <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>ED</strong></div></a>
                        <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                    </div>
                    <!-- Navbar Menu -->
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Languages dropdown    -->
                        <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                            <ul aria-labelledby="languages" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/DE.png" alt="English" class="mr-2">German</a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/FR.png" alt="English" class="mr-2">French</a></li>
                            </ul>
                        </li>
                        <!-- Logout    -->
                        <li class="nav-item">
                            <form method="POST" action="{{route('logout')}}" >
                                <button type="submit" class="nav-link logout">
                                    @csrf <i class="fa fa-sign-out"></i>
                                </button>
                            </form></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h4">Umar Shaik</h1>
                    <p>Developer</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
            <ul class="list-unstyled">
                <li class="active"><a href="{{route('home')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="#Demo" aria-expanded="false" data-toggle="collapse"> <i class="icon-grid"></i> Wallet </a>
                    <ul id="Demo" class="collapse list-unstyled ">
                        <li><a href="tables.html">Budget</a></li>
                        <li><a href="tables-datatable.html">Transactions</a></li>
                    </ul>
                </li>

            </ul><span class="heading">Extras</span>
            <ul class="list-unstyled">
                <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
                <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
                <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
                <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
            </ul>
        </nav>
        <div class="content-inner">

            @yield('content')

            <!-- Page Footer-->
            <footer class="main-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Umar Shaik &copy; 2017-2019</p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>Version 1.0.1</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>


<!-- JavaScript files-->
<script src="/js/popper.js/umd/popper.min.js"> </script>
<script src="/js/jquery.cookie/jquery.cookie.js"> </script>
<script src="/js/chart.js/Chart.min.js"></script>
<script src="/js/jquery-validation/jquery.validate.min.js"></script>
<script src="/js/charts-home.js"></script>


<!-- Notifications-->
<script src="/js/messenger-hubspot/build/js/messenger.min.js">   </script>
<script src="/js/messenger-hubspot/build/js/messenger-theme-flat.js">       </script>
{{--<script src="/js/home-premium.js"> </script>--}}


<!-- Main File-->
<script src="/js/front.js"></script>

</body>


</html>
