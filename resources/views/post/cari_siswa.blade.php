<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
    <script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="../../../../global_assets/js/plugins/forms/validation/validate.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_inputs.js"></script>
    <script src="../../../../global_assets/js/demo_pages/form_layouts.js"></script>
    <script src="../../../../global_assets/js/demo_pages/form_validation.js"></script>
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
                <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
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
						<li class="nav-item">
							<a href="{{ url('/staff') }}" class="nav-link">
								<i class="icon-user"></i>
								<span>
									Staff
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link active ">
                                <i class="icon-users"></i> <span>Anggota</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Pickers">
								<li class="nav-item ">
								<a href="{{ url('/siswa') }}" class="nav-link "><i class="icon-user"></i><span>Siswa</span></a></li>
								<a href="{{ url('/guru') }}" class="nav-link "><i class="icon-user"></i><span>Guru</span></a></li>
							</ul>
						</li>
						
						<li class="nav-item">
							<a href="{{ url('/kategori') }}" class="nav-link ">
								<i class="icon-file-text"></i>
								<span>
									Kategori
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('/buku') }}" class="nav-link ">
								<i class="icon-book3"></i>
								<span>
								Buku
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link">
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
							<a href="{{ url('/list_buku') }}" class="breadcrumb-item">Tambah siswa</a>
							<span class="breadcrumb-item active">Cari siswa</span>
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
								<h2 class="card-title">Menambahkan siswa</h2>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<form action="#">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">NIS:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Masukkan nomor induk siswa" >
										</div>
									</div>

									<div class="text-right">
                                        <button type="submit" class="btn btn-primary col-lg-1 ml-1">Cari<i ></i></button>
									</div>
								</form>
							</div>
						</div>
						<!-- /basic layout -->

		           
           <!-- Form inputs -->
           <div class="card">
          <!-- Basic layout-->
                       <div class="card-header header-elements-inline">
                           <h5 class="card-title">Informasi Anggota</h5>
                           <div class="header-elements">
                               <div class="list-icons">
                                   <a class="list-icons-item" data-action="collapse"></a>
                                   <a class="list-icons-item" data-action="reload"></a>
                                   <a class="list-icons-item" data-action="remove"></a>
                               </div>
                           </div>
                       </div>

                       <div class="card-body">
                           <form action="#">

                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Nama Lengkap:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Nama Lengkap">
										</div>
									</div>

                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Alamat:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Masukkan alamat">
										</div>
									</div>

                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Profesi:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Profesi">
										</div>
                                    </div>
                                    
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Jenis Kelamin:</label>
										<div class="col-lg-9">
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="gender" checked data-fouc>
													Laki-laki
												</label>
											</div>

											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="gender" data-fouc>
													Perempuan
												</label>
											</div>
										</div>
									</div>
                                    
                                    <div class="form-group row">
		                        	<label class="col-form-label col-lg-3">Kelas</label>
		                        	<div class="col-lg-9">
			                            <select class="form-control form-control-uniform" data-fouc>
			                                <option value="opt1">None</option>
			                                <option value="opt2">1</option>
			                                <option value="opt3">2</option>
			                            </select>
		                            </div>
                                    </div>

                                    <div class="form-group row">
									<label class="col-form-label col-md-3">Tanggal lahir</label>
									<div class="col-md-9">
										<input class="form-control" type="date" name="date">
									</div>
								    </div>

                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">No telepon:</label>
										<div class="col-lg-9">
											<input type="number" class="form-control" placeholder="Masukkan nomor telepon">
										</div>
									</div>

                        
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Photo:</label>
										<div class="col-lg-9">
											<input type="file" class="form-control h-auto">
											<span class="form-text text-muted">Accepted formats: png, jpg. Max file size 2Mb</span>
										</div>
									</div>

									<div class="text-right">
                                        <button type="submit" class="btn btn-primary col-lg-1 ml-1">Simpan<i ></i></button>
                                        <button type="submit" class="btn btn-danger col-lg-1 ml-1">Batal<i ></i></button>
									</div>
                           </form>
                       </div>
                   </div>
                   <!-- /basic layout -->
                   </div>
		<!-- /main content -->

   </div>
   <!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
