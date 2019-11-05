<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Login Page -TISAM</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/bgsd.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/bgsd.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="../../../../../maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.html"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/custom.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.min.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/login-register.min.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
  <!-- END Custom CSS-->
  <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/toastr.css">
  <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/extensions/toastr.min.css">
  <style>
    .bg-default{
        background-color: #1568B4;
    }

    .btn-default{
        border-color: none;
        background-color: #1568B4;
        color: #FFF;
    }
</style>
</head>
<body class="vertical-layout vertical-menu-modern 1-column   menu-expanded blank-page blank-page bg-default"" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-3 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="/app-assets/images/ico/SI.png" class="img-fluid" alt="branding logo" width="175" height="175">
                    </div>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
                      <fieldset class="form-group position-relative has-icon-left mb-1">
                    <form class="form-horizontal form-simple" method="POST" action="{{ route('login') }}">
                    @csrf
                        <input type="text" name="username" class="form-control" id="user-name" placeholder="Masukkan username" autofocus>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" name="password" class="form-control" id="user-password" placeholder="Masukkan password" >
                        <div class="form-control-position">
                          <i class="ft-lock"></i>
                        </div>
                      </fieldset>
                      <button type="submit" class="btn btn-block btn-default"><i class="ft-unlock"></i> Login</button>
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
  <script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="../../../app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/js/core/app.min.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../../app-assets/js/scripts/forms/form-login-register.min.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
  <script src="/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
  <script src="/app-assets/js/scripts/extensions/toastr.min.js" type="text/javascript"></script>
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
</body>

</html>
