<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Mading Digital - @yield('title')</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/SI.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/SI.png">
    <link href="/app-assets/fonts/fonts.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/app-assets/fonts/line-awesome/css/line-awesome.min.css">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/app.min.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/extensions/toastr.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.0.0/viewer.min.css" />
    <link rel="stylesheet" href="/css/getorgchart.css">
    @yield('style')
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern"
    data-col="2-columns">
    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                            <i class="ft-menu font-large-1"></i>
                        </a>
                    </li>
                    <li class="nav-item mr-auto">
                        <a class="navbar-brand" href="#">
                            <img class="brand-logo" alt="modern admin logo" src="/app-assets/images/ico/SI.png">
                            <h4 class="brand-text">Mading Digital</h4>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block float-right">
                        <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                            <i class="toggle-icon font-medium-3 white ft-toggle-left" data-ticon="ft-toggle-right"></i>
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                            <i class="la la-ellipsis-v"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item nav-search">
                            <a class="nav-link nav-link-search" href="#">
                                <i class="ficon ft-search"></i>
                            </a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Modern...">
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="mr-1">Hello,
                                    <span class="user-name text-bold-700">SISTEM INFORMASI</span>
                                </span>
                                <span class="avatar avatar-online">
                                    <img src="/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar">
                                    <i></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="/logout">
                                    <i class="ft-power"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">

        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item menu-navigasi" id="users">
                    <a href="#">
                        <i class="la la-home"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                    <li class="nav-item menu-navigasi" id="users">
                    <a href="#">
                        <i class="la la-desktop"></i>
                        <span class="menu-title">Konfirmasi</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header mb-3">
                <div class="row">
                    @yield('content-header')
                </div>
            </div>
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019
                <a class="text-bold-800 grey darken-2" href="http://rekayasaproduction.rplsmkn2-bpn.com" target="_blank">Pameran Expo Team</a>, All rights reserved. </span>
            <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with
                <i class="ft-heart pink"></i>
            </span>
        </p>
    </footer>
    <!-- BEGIN VENDOR JS-->
    <script src="/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
    <script src="/app-assets/js/scripts/extensions/toastr.min.js" type="text/javascript"></script>
    <script src="/app-assets/data/jvector/visitor-data.js" type="text/javascript"></script>
    <script src="/ckeditor/ckeditor.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="/app-assets/js/core/app.min.js" type="text/javascript"></script>
    <script src="/app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="/app-assets/js/scripts/pages/dashboard-sales.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.0.0/viewer.min.js"></script>
    <script src="/js/getorgchart.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('script')
    @if(session('OK'))
        <script>
            toastr.success('{{ session("OK") }}', 'Success!');
        </script>
    @endif
    @if(session('ERR'))
        <script>
            toastr.error('{{ session("ERR") }}', 'Error!');
        </script>
    @endif
    <script>
        $(document).ready(function() {
        // get current URL path and assign 'active' class
        var pathname = window.location.pathname;
        $('.nav-item a[href="'+pathname+'"]').parent().addClass('active');
        })
        var datatable = $(".datatable");
        if (datatable != null) {
            $(".datatable").DataTable();
        }
    </script>
    <!-- END PAGE LEVEL JS-->

</body>

</html>
