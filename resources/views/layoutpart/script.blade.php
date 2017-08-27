@yield('before-scripts')

	<!-- <script src="assets/vendor/jquery/jquery.js"></script> -->
	<!-- <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script> -->
	<!-- <script src="assets/vendor/bootstrap/js/bootstrap.js"></script> -->
	<!-- <script src="assets/vendor/nanoscroller/nanoscroller.js"></script> -->
	<!-- <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> -->
	<!-- <script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script> -->
	<!-- <script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script> -->

	{{Html::script('assets/vendor/jquery/jquery.js')}} 
	{{Html::script('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}} 
	{{Html::script('assets/vendor/bootstrap/js/bootstrap.js')}} 
	{{Html::script('assets/vendor/nanoscroller/nanoscroller.js')}} 
	{{Html::script('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}} 
	{{Html::script('aassets/vendor/magnific-popup/jquery.magnific-popup.js')}} 

	<!-- Specific Page Vendor -->
	<!-- <script src="assets/vendor/jquery-appear/jquery-appear.js"></script> -->
	<!-- <script src="assets/vendor/owl.carousel/owl.carousel.js"></script> -->
	<!-- <script src="assets/vendor/isotope/isotope.js"></script> -->

	{{Html::script('assets/vendor/jquery-appear/jquery-appear.js')}} 
	{{Html::script('assets/vendor/owl.carousel/owl.carousel.js')}} 
	{{Html::script('assets/vendor/isotope/isotope.js')}} 

	<!-- Theme Base, Components and Settings -->
	<!-- <script src="assets/javascripts/theme.js"></script> -->
	{{Html::script('assets/javascripts/theme.js')}} 

	<!-- Theme Custom -->
	<!-- <script src="assets/javascripts/theme.custom.js"></script> -->
	{{Html::script('assets/javascripts/theme.custom.js')}} 

	<!-- Theme Initialization Files -->
	<!-- <script src="assets/javascripts/theme.init.js"></script> -->
	{{Html::script('assets/javascripts/theme.init.js')}} 

	<!-- Examples -->
	<!-- <script src="assets/javascripts/dashboard/examples.landing.dashboard.js"></script> -->
	{{Html::script('assets/javascripts/dashboard/examples.landing.dashboard.js')}} 
	
@yield('after-scripts')
