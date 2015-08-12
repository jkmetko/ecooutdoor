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

    <!-- EDITOR -->
    <link href="{{ asset('/css/editor.css') }}" type="text/css" rel="stylesheet"/>

    <!-- GRITTER -->
    <link href="{{ asset('/css/gritter.css') }}" rel="stylesheet">

    <!-- SUMMERNOTE -->
    <link href="{{ asset('/css/summernote.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/bootstrap-iconpicker.min.css') }}" rel="stylesheet">
	
</head>
<body>

	<!-- Page Loader -->        
	<div class="page-loader">
		<div class="loader">
			<div class="dot1"></div>
  		<div class="dot2"></div>
		</div>
	</div>
	<!-- End Page Loader -->

	<div class="page-wrapper">
		<div class="top-wrapper top-wrapper__bg1 stellar" id="top" data-stellar-ratio="2">

			<!-- Header -->
            @include('sections.header')


			<!-- Static Header -->
            @include('sections.staticheader')
		</div>
		
		<!-- Content -->
		<div class="content-wrapper">
			
			@yield('content')

		</div>
		<!-- Content / End -->

		<!-- Footer -->
        @include('sections.footer')
		

	</div>


	<!-- Back to Top -->
	<div id="back-top">
		<div class="link-holder scroll-local">
			<a href="#top" class="top-link"><i class="fa fa-chevron-up"></i></a>
		</div>
		<div class="link-holder scroll-local">
			<a href="#section-contacts" class="contacts-link" data-toggle="tooltip" data-placement="left" title="Napíšte nám"><i class="fa fa-envelope"></i></a>
		</div>
	</div>
	<!-- Back to Top / End -->
	
	
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
    <script src="{{ asset('/js/jquery.elastic.source.js') }}"></script>
    <script src="{{ asset('/js/jquery.gritter.js') }}"></script>
    <script src="{{ asset('/js/summernote.min.js') }}"></script>

    <script src="{{ asset('/js/iconset-fontawesome-4.2.0.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-iconpicker.min.js') }}"></script>

	<!-- Contact Form -->
	<script src="{{ asset('/vendor/jquery.validate.js') }}"></script>
	<script src="{{ asset('/js/contact.js') }}"></script>

	<!-- Google Map -->
	<script src="{{ asset('http://maps.google.com/maps/api/js?sensor=true') }}"></script>
	<script src="{{ asset('/vendor/jquery.gmap3.min.js') }}"></script>

    <!-- Editor -->
    <script src="{{ asset('/js/editor.js') }}"></script>

    <!-- Scripts -->
    @if (isset($scripts))
        @foreach ($scripts as $script)
            <script src="{{ asset($script) }}"></script>
        @endforeach
    @endif

    <!-- CUSTOM JS -->
	<script src="{{ asset('/js/custom.js') }}"></script>

    <!-- ERRORS-->
    @if($errors->has())
        @foreach ($errors->all() as $error)
            <script>
                $.gritter.add({
                    text: '{{ $error }}'
                });
            </script>
        @endforeach
    @endif

</body>
</html>