<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.0.0-alpha.1
* @link https://coreui.io
* Copyright (c) 2019 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('/global_assets')}}/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('/assets')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('/assets')}}/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('/assets')}}/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('/assets')}}/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('/assets')}}/css/colors.min.css" rel="stylesheet" type="text/css">

	<!-- /global stylesheets -->

	
	@section('css')

@show


  </head>
  <body>
  <!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark fixed-top">

<!-- Header with logos -->
<div class="navbar-header navbar-dark d-none d-md-flex align-items-md-center">
<div class="navbar-brand">
    <a href="index.html" class="d-inline-block">
        <img src="{{asset('/global_assets')}}/images/perpus.png" alt="">
    </a>
</div>
    
    
</div>
<!-- /header with logos -->

<!-- Navbar content -->
<div class="collapse navbar-collapse" id="navbar-mobile">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                <i class="icon-paragraph-justify3"></i>
            </a>
        </li>
    </ul>
    <span class="badge bg-success badge-pill ml-md-3 mr-md-auto">Online</span>
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                <div class="dropdown-content-header">
                    <span class="font-weight-semibold">Messages</span>
                    <a href="#" class="text-default"><i class="icon-compose"></i></a>
                </div>
            </div>
        </li>

        <li class="nav-item dropdown dropdown-user">
            <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('/global_assets')}}/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
                <span>Admin</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ url('/profile') }}" class="nav-link" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
            </div>
        </li>
    </ul>
</div>
<!-- /navbar content -->





<!-- Core JS files -->
	<script src="{{asset('/global_assets')}}/js/main/jquery.min.js"></script>
	<script src="{{asset('/global_assets')}}/js/main/bootstrap.bundle.min.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/loaders/blockui.min.js"></script>

	<!-- Theme JS files -->
	<script src="{{asset('/global_assets')}}/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/forms/selects/select2.min.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/tables/datatables/extensions/fixed_columns.min.js"></script>

	<script src="{{asset('/assets')}}/js/app.js"></script>
	<script src="{{asset('/global_assets')}}/js/demo_pages/datatables_extension_fixed_columns.js"></script>


	<script src="{{asset('/js')}}/sweetalert2.all.js"></script>
	@include('sweetalert::alert')

	@section('js')

@show

	
  </body>
</html>
