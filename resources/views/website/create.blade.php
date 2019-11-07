<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Mading Online - Sistem Informasi 2019</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/SI.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/SI.png">
    <link href="/app-assets/fonts/fonts.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/app-assets/fonts/line-awesome/css/line-awesome.min.css">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/app.min.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/login-register.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    {{-- <link rel="stylesheet" type="text/css" href="/assets/css/style.css"> --}}
    <!-- END Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/extensions/toastr.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="/sweetalert/sweetalert.css"> --}}
    <style>
        .bg-default{
            background-color: #1568B4;
        }

        .btn-default{
            border-color: none;
            background-color: #1568B4;
            color: #FFF;
        }

        .swal-button {
            background-color: #1568B4;
            color: #FFF;
        }

        .swal-button:focus{
            box-shadow: none;
        }
    </style>
</head>

<body class="vertical-layout vertical-menu-modern 1-column   menu-expanded blank-page blank-page bg-default"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-5 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="/app-assets/images/ico/SI.png"  alt="branding logo" width="80" height="80">
                                            </div>
                                            <div class="col-md-9">
                                                <h1>TISAM - Titip Salam</h1>
                                                <h4>Sampaikan pesanmu untuk si dia</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="{{ route('store') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="">Dari :</label>
                                                <input type="text" name="from" class="form-control" required autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Untuk :</label>
                                                <input type="text" name="to" class="form-control" required autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Isi Pesan :</label>
                                                <textarea name="body" rows="5" class="form-control" required></textarea>
                                            </div>
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-default btn-block">Kirim</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- BEGIN VENDOR JS-->
    <script src="/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript">
    </script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="/app-assets/js/core/app.min.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="/app-assets/js/scripts/forms/form-login-register.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
    <script src="/app-assets/js/scripts/extensions/toastr.min.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/sweetalert/sweetalert.min.js" type="text/javascript"></script>

    @yield('script')

    @if(session('OK'))
        <script>
            swal({
                title: 'Berhasil',
                text: "{{ session('OK') }}",
                icon: "success",
            });
        </script>
    @endif
</body>

</html>
