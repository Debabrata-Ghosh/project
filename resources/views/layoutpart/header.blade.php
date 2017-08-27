<!doctype html>
<html class="fixed sidebar-left-collapsed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>@yield('title')</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		@yield('meta')


		<!-- Vendor CSS -->
		<!-- <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" /> -->
		@yield('before-style')

		{{Html::style('assets/vendor/bootstrap/css/bootstrap.css')}}
		{{Html::style('assets/vendor/font-awesome/css/font-awesome.css')}}
		{{Html::style('assets/vendor/magnific-popup/magnific-popup.css')}}
		{{Html::style('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}

		<!-- Specific Page Vendor CSS -->
		<!-- <link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.carousel.css" /> -->
		<!-- <link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.theme.default.css" /> -->

		{{Html::style('assets/vendor/owl.carousel/assets/owl.carousel.css')}}
		{{Html::style('assets/vendor/owl.carousel/assets/owl.theme.default.css')}}
		
		<!-- Theme CSS -->
		<!-- <link rel="stylesheet" href="assets/stylesheets/theme.css" /> -->

		{{Html::style('assets/stylesheets/theme.css')}}
		
		<!-- Skin CSS -->
		<!-- <link rel="stylesheet" href="assets/stylesheets/skins/default.css" /> -->
		{{Html::style('assets/stylesheets/skins/default.css')}}

		

		<!-- Theme Custom CSS -->
		<!-- <link rel="stylesheet" href="assets/stylesheets/theme-custom.css"> -->
		{{Html::style('assets/stylesheets/theme-custom.css')}}

		@yield('after-style')
		<!-- Head Libs -->
		<!-- <script src="assets/vendor/modernizr/modernizr.js"></script> -->
		{{Html::script('assets/vendor/modernizr/modernizr.js')}} 

	</head>
	<body>