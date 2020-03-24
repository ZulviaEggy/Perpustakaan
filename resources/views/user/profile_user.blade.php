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
    <script src="../../../../global_assets/js/demo_pages/form_checkboxes_radios.js"></script>
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
                <span>Dinda (siswa)</span>
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
                        <div class="media-title font-weight-semibold">Dinda</div>
                        <div class="font-size-xs opacity-50">
                            <i class="font-size-sm">(11412)</i>
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
							<a href="{{ url('/user_dashboard') }}" class="nav-link  ">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('/profile_user') }}" class="nav-link active">
								<i class="icon-user"></i>
								<span>
									Profile
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('/buku') }}" class="nav-link ">
								<i class="icon-book3"></i>
								<span>
								Koleksi Buku
								</span>
							</a>
						</li>
						<li class="nav-item">
								<a href="{{ url('/peminjaman') }}" class="nav-link "><i class="icon-exit3"></i><span>Data Transaksi</span></a></li>
						</li>
					
						<li class="nav-item">
							<a href="{{ url('/absensi') }}" class="nav-link  ">
								<i class="icon-switch2"></i>
								<span>
							Log Out
								</span>
							</a>
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
								<h5 class="card-title">Profile User</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
                            <form method="POST" action="" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                        <div class="col-xl-12 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img class="img-fluid rounded-circle" src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="70" height="70" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="media-body align-self-center">
                                                        <div class="font-weight-semibold">James Alexander</div>
                                                        <span class="text-muted">Lead developer</span>
                                                    </div>
                                                   Login Terakhir:
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Username:</label>
										    <div class="col-lg-9">
										    <input class="form-control" type="text" placeholder="Masukkan username" name="username" required autofocus>
										    </div>
									</div>

                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Nama Lengkap :</label>
										<div class="col-lg-9">
										<input class="form-control" type="text" placeholder="Masukkan nama" name="nama_lengkap" required>
									    </div>
                                    </div>
                                    
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">NIS: </label>
										<div class="col-lg-9">
										<input class="form-control" type="text" placeholder="NIS" name="name" required>
									    </div>
                                    </div>
                                     
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Kelas: </label>
										<div class="col-lg-9">
										<input class="form-control" type="text" placeholder="Masukkan kelas" name="name" required>
									    </div>
									</div>
                                     
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Tempat: </label>
										<div class="col-lg-9">
										<input class="form-control" type="text" placeholder="Masukkan tempat lahir" name="name" required>
									    </div>
									</div>
                                     
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Tanggal Lahir: </label>
										<div class="col-lg-9">
										<input class="form-control" type="text" placeholder="Masukkan tanggal lahir" name="name" required>
									    </div>
									</div>

                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Email: </label>
										<div class="col-lg-9">
										<input class="form-control" type="text" placeholder="Masukkan email" name="name" required>
									    </div>
									</div>

                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Alamat:</label>
										<div class="col-lg-9">
										<input class="form-control" type="text" placeholder="Masukkan alamat" name="alamat" required>
									    </div>
									</div>
                                    
                                    <!-- gender_id -->
                                    <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Jenis Kelamin:</label>
                                    <div class="col-lg-9">
									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input-styled " name="radio-inline-left" checked data-fouc>
											Male
										</label>
									</div>

									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input-styled" name="radio-inline-left" data-fouc>
											Famale
										</label>
									</div>
                                </div>
                                </div>

                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">No Telepon:</label>
										    <div class="col-lg-9">
										    <input class="form-control" type="text" placeholder="No telepon" name="ISBN" required>
										    </div>
									</div>

									<div class="text-right">
                                    <button class="btn btn-success col-lg-1 ml-1" type="submit" >Edit</button>
                                    <a href="{{ url('/') }}"  class="btn btn-danger col-lg-1 ml-1">Kembali</a>
								</div>
								</form>
							</div>
						</div>
						<!-- /basic layout -->
                        
		
		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
