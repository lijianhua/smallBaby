<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Small Baby</title>
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/small_baby/animate.css') }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/small_baby/magnific-popup.css') }}">
	<!-- Salvattore -->
	<link rel="stylesheet" href="{{ asset('css/small_baby/salvattore.css') }}">
	<!-- Theme Style -->
	<link rel="stylesheet" href="{{ asset('css/small_baby/style.css') }}">
	<!-- Modernizr JS -->
	<script src="{{ asset('js/small_baby/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{ asset('js/small_baby/respond.min.js') }}"></script>
	<![endif]-->

    <!-- Theme CSS -->

</head>

<body>
<div>
    <a class="" href="{{route('web.home')}}"> 
        <img src="{{ asset('css/small_baby/1.png') }}" style='text-align:center;width:350px;'/>
    </a>
</div>

<!-- Page Header -->
@yield("header")
<!-- Main Content -->
<div id="fh5co-main">
    <div class="container">
        <div class="row">
            @yield("content")
        </div>
    </div>
</div>

@include('themes.small_baby.includes.footer')
@include('themes.small_baby.includes.scripts')


</body>

</html>
