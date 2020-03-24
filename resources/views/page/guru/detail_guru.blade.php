<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Perpustakaan</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('/global_assets')}}/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('/assets')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('/assets')}}/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('/assets')}}/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('/assets')}}/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('/assets')}}/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('/global_assets')}}/js/main/jquery.min.js"></script>
	<script src="{{asset('/global_assets')}}/js/main/bootstrap.bundle.min.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
    <script src="{{asset('/global_assets')}}/js/plugins/forms/selects/select2.min.js"></script>
    <script src="{{asset('/global_assets')}}/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="{{asset('/global_assets')}}/js/plugins/forms/validation/validate.min.js"></script>

	<script src="{{asset('/assets')}}/js/app.js"></script>
	<script src="{{asset('/global_assets')}}/js/demo_pages/form_inputs.js"></script>
    <script src="{{asset('/global_assets')}}/js/demo_pages/form_layouts.js"></script>
    <script src="{{asset('/global_assets')}}/js/demo_pages/form_validation.js"></script>
	<!-- /theme JS files -->

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

</div>
<!-- /main navbar -->

            
<!-- Page content -->
<div class="page-content">

<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-fixed sidebar-expand-md">

    <!-- Sidebar content -->
    <div class="sidebar-content">
        
        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="{{asset('/global_assets')}}/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">Admin</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;indonesia
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->

 <!-- Main navigation -->
 <div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">
					<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item ">
							<a href="{{ url('/') }}" class="nav-link ">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item ">
							<a href="{{ url('/staff') }}" class="nav-link">
								<i class="icon-user"></i>
								<span>
									Staff
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link  ">
                                <i class="icon-users"></i> <span>Anggota</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Pickers">
								<li class="nav-item ">
								<a href="{{ url('/siswa') }}" class="nav-link "><i class="icon-user"></i><span>Siswa</span></a></li>
								<a href="{{ url('/guru') }}" class="nav-link "><i class="icon-user"></i><span>Guru</span></a></li>
							</ul>
						</li>
						
						<li class="nav-item ">
							<a href="{{ url('/kategori') }}" class="nav-link ">
								<i class="icon-file-text"></i>
								<span>
									Kategori
								</span>
							</a>
						</li>
						<li class="nav-item ">
							<a href="{{ url('/buku') }}" class="nav-link active">
								<i class="icon-book3"></i>
								<span>
								Buku
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link ">
                                <i class="icon-select2"></i> <span>Data Transaksi</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Pickers">
								<li class="nav-item ">
								<a href="{{ url('/peminjaman') }}" class="nav-link "><i class="icon-exit3"></i><span>Peminjaman</span></a></li>
								<a href="{{ url('/pengembalian') }}" class="nav-link "><i class="icon-enter3"></i><span>Pengembalian</span></a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="{{ url('/absensi') }}" class="nav-link ">
								<i class="icon-book"></i>
								<span>
								Absensi
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="" class="nav-link ">
								<i class="icon-file-spreadsheet"></i>
								<span>
								Laporan
								</span>
							</a>
							<ul class="nav nav-group-sub" data-submenu-title="Pickers">
								<li class="nav-item ">
								<a href="{{ url('/laporan/buku') }}" class="nav-link "><i class="icon-book3"></i><span>Buku</span></a></li>
								<a href="{{ url('/laporan/trs') }}" class="nav-link "><i class="icon-select2"></i><span>Transaksi</span></a></li>
							</ul>
						</li>

						<!-- /page kits -->
						</ul>
				</div>
				<!-- /main navigation -->



			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="{{ url('/list_buku') }}" class="breadcrumb-item">Buku</a>
							<span class="breadcrumb-item active">Detail buku</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Form inputs -->
				<div class="card">
               <!-- Basic layout-->
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Detail Data Guru</h5>
							</div>
                            </div>
							
                            	<!-- Inner container -->
                            <div class="d-md-flex align-items-md-start">

                            <!-- Left sidebar component -->
                            <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md">

                                <!-- Sidebar content -->
                                <div class="sidebar-content">

                                    <!-- Navigation -->
                                    <div class="card">
                                        <div class="card-body bg-indigo-400 text-center card-img-top" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                                            <div class="card-img-actions d-inline-block mb-3">
                                            @if($guru->photo != NULL)
                                                <img class="img-fluid rounded-circle" src="{{ url('/photo/guru/'.$guru->photo) }}" width="170" height="170" alt="">
                                                @elseif($guru->photo == NULL)
                                                <img class="img-fluid rounded-circle" src="{{asset('/global_assets')}}/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
                                                @endif
                                                <div class="card-img-actions-overlay rounded-circle">
                                                 
                                                </div>
                                            </div>

                                            <h6 class="font-weight-semibold mb-0">{{ $guru->nama_lengkap }}<span><i> (guru)</i></span></h6>
                                        
                                        </div>

                                </div>
                                <!-- /sidebar content -->

                            </div>
                            <!-- /left sidebar component -->

                            </div>
                        <!-- Right content -->
                        <div class="tab-content w-100 overflow-auto">
						<div class="tab-pane fade active show" id="profile">

                            <!-- /left sidebar component -->
											
                            <div class="card">
								
								<div class="card-body">
									<div class="container">
										
								<form action="#">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">NIP:</label>
										<div class="col-lg-9">
											<div type="text" class="form-control">{{ $guru->NIP }}</div>
										</input>
										</div>
									</div>
                                  
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Nama Lengkap: <span class="text-danger"></span></label>
										<div class="col-lg-9">
										<div type="text" class="form-control">{{ $guru->nama_lengkap }}</div>										
									</div>
									</div>

                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Alamat: <span class="text-danger"></span></label>
										<div class="col-lg-9">
										<div type="text" class="form-control">{{ $guru->alamat }}</div>												
									</div>
									</div>	
									
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Jenis Kelamin:<span class="text-danger"></span></label>
										<div class="col-lg-9">
										<div type="text" class="form-control">{{ $guru->gender }}</div>											
									</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Tempat Lahir:<span class="text-danger"></span></label>
										<div class="col-lg-9">
										<div type="text" class="form-control">{{ $guru->tempat_lahir }}</div>											
									</div>
									</div>
									
                                    <div class="form-group row">
		                        	<label class="col-form-label col-lg-3">Tanggal Lahir<span class="text-danger"></span></label>
		                        	<div class="col-lg-9">
									<div type="date" class="form-control">{{ $guru->tanggal_lahir }}</div>											
									</div>
									</div>
								

                                    <div class="form-group row">
									<label class="col-form-label col-md-3">No Telp<span class="text-danger"></span></label>
									<div class="col-md-9">
									<div type="text" class="form-control">{{ $guru->no_telp}}</div>											
									</div>
								    </div>

                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Agama:<span class="text-danger"></span></label>
										<div class="col-lg-9">
										<div type="text" class="form-control">{{ $guru->agama }}</div>											
										</div>
									</div>

                                    <div class="form-group row">
									<label class="col-form-label col-md-3">Email <span class="text-danger"></span></label>
									<div class="col-md-9">
									<div type="text" class="form-control">{{ $guru->email }}</div>											
									</div>
							    	</div>

									<div class="text-right">
                                    <a href="{{ route('guru.index') }}"  class="btn btn-danger col-lg-2 ml-1">Kembali</a>
                                    </div>
								</form>
							</div>
						</div>
                    </div>
						<!-- /basic layout -->
		
		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
