<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 2.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<title>Teacher Dashboard</title>
	@include('teachers.includes.head')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
	<body class="page-boxed page-header-fixed">
		<!-- HEADER -->
			@include('teachers.includes.header')
		<!-- BEGIN CONTAINER -->
		<div class="page-container">
			@include('teachers.includes.sidenav')

			<div class="page-content-wrapper">
				@yield('teachers.content')
			</div>
		</div>
		<!--FOOTER -->
		<div class="footer">
			@include('teachers.includes.footer')
		</div>
			@include('teachers.includes.scripts')
	</body>	
</html>