<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>EcoBoard — veľkoplošná reklama</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="3CKY SOFT">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="/images/favicons/favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicons/favicon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicons/favicon-152.png">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

    <!-- CSS
    ================================================== -->
    <!-- Base + Vendors CSS -->
    <link href="{{ asset('/vendor/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet">

    <!-- Theme CSS-->
    <link href="{{ asset('/vendor/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/nouislider/jquery.nouislider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/royalslider/royalslider.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/royalslider/skins/universal-custom/rs-universal.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/rs-plugin/css/settings.css') }}" media="screen">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <!-- Skin CSS -->
    <!-- <link href="{{ asset('css/skins/red.css') }}" rel="stylesheet"> -->

    <!-- Custom CSS-->
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

    <!-- Head Libs -->
    <script src="{{ asset('/vendor/modernizr.js') }}"></script>

</head>
<body class="page-404">

<!-- Page Loader -->
<div class="page-loader">
    <div class="loader">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!-- End Page Loader -->

<div class="page-wrapper">

    <div class="container">

        <div class="page-404-main">
            <div class="row">
                <div class="col-md-7">
                    <span class="page-404-num">404</span>
                    <span class="page-404-notice">Stránka nebola nájdená</span>
                    <a href="{{ url('/') }}" class="btn btn-primary btn-has-icon"><i class="fa fa-home"></i> Domovská stránka</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-8">
                <header class="page-404-header">
                    <a href="{{ url('/') }}"><img src="/images/logo.png" alt=""></a>
                </header>
                <div class="page-404-desc">
                    <p>
                        Spoločnosť Ecooutdoor a.s. vzikla ako mediálna a marketingová spoločnosť, poskytujúca svojim klientom profesionálne služby.
                    </p>

                    <p>
                        Zúročujeme mnohoročné skúsenosti našich zakladateľov a zamestnancov,
                        či už v oblasti nákupu médií, strategického plánovania, kreatívnych riešení, grafických služieb, ale aj marketingového poradenstva, promoaktivít a eventových služieb.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Javascript Files
================================================== -->
<script src="{{ asset('/vendor/jquery/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('/vendor/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('/vendor/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/bootstrap-scripts.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/fhmm.js') }}"></script>
<script src="{{ asset('/vendor/jquery.flickrfeed.js') }}"></script>
<script src="{{ asset('/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('/vendor/isotope/jquery.imagesloaded.min.js') }}"></script>
<script src="{{ asset('/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/vendor/nouislider/jquery.nouislider.all.min.js') }}"></script>
<script src="{{ asset('/vendor/royalslider/jquery.royalslider.min.js') }}"></script>
<script src="{{ asset('/vendor/jquery.parallax-1.1.3.js') }}"></script>
<script src="{{ asset('/vendor/jcountdown/jquery.jcountdown.js') }}"></script>
<script src="{{ asset('/vendor/wow.min.js') }}"></script>
<script src="{{ asset('/vendor/jquery.countTo.js') }}"></script>
<script src="{{ asset('/vendor/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('/vendor/jquery.localScroll.min.js') }}"></script>
<script src="{{ asset('/vendor/jquery.viewport.mini.js') }}"></script>
<script src="{{ asset('/js/jquery.stellar.js') }}"></script>

<!-- Contact Form -->
<script src="{{ asset('/vendor/jquery.validate.js') }}"></script>
<script src="{{ asset('/js/contact.js') }}"></script>

<!-- Google Map -->
<script src="{{ asset('http://maps.google.com/maps/api/js?sensor=true') }}"></script>
<script src="{{ asset('/vendor/jquery.gmap3.min.js') }}"></script>

<script src="{{ asset('/js/custom.js') }}"></script>


</body>
</html>