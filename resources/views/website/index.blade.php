<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mading Digital</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/Logo.png">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.min.css">
    <link href="/app-assets/fonts/fonts.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/app-assets/fonts/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row my-2">
            <div class="col-12 text-center">
                <img src="images/logo.png" class="logo" alt="Logo_SI">
            </div>
        </div>
        <div class="container">
            <div class="row mb-4 smooth-shadow">
                <div class="col-12">
                    <div class="container animated bounceInDown main_box" id="main_box"
                        style="padding-left:0px;padding-right:0px;height:600px; auto">
                        <div class="row">
                            <div class="col-12">
                                <div class="quote_box py-4">
                                    <div class="container">
                                        <div class="author ml-3" id="receiver">
                                            To : {{ $greeting->to }}
                                        </div>
                                        <blockquote>
                                            <div id="quote" class="text-center">
                                                {{ $greeting->body }}
                                            </div>
                                        </blockquote>
                                        <div class="text-right author" id="author">
                                            - {{ $greeting->from }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="next_button">
                                    <a id="get-another-quote-button">
                                        <button type="button" id="btn" class=" btn btn-lg rounded-0">Pesan Lainnya >></button>
                                    </a>
                                    <div class="pop"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="/script.js"></script>
</body>

</html>
