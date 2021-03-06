<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Perpustakaan</title>

	<!-- Global stylesheets -->
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
	<script src="{{asset('/global_assets')}}/js/plugins/ui/moment/moment.min.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/pickers/daterangepicker.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/pickers/anytime.min.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/pickers/pickadate/picker.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/pickers/pickadate/legacy.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/notifications/jgrowl.min.js"></script>

	<script src="{{asset('/assets')}}/js/app.js"></script>
	<script src="{{asset('/global_assets')}}/js/demo_pages/form_inputs.js"></script>
    <script src="{{asset('/global_assets')}}/js/demo_pages/form_layouts.js"></script>
	<script src="{{asset('/global_assets')}}/js/demo_pages/picker_date.js"></script>
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
							<a href="#" class="nav-link active">
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
							<a href="{{ url('/tambah_peminjaman') }}" class="breadcrumb-item">Peminjaman</a>
							<span class="breadcrumb-item active">Tambah Peminjaman</span>
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
								<h5 class="card-title">Tambah Perpanjangan</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<?php 
							$conn = mysqli_connect('localhost', 'root', '', 'perpustakaan');

							$kode_pinjam = mysqli_query($conn, "SELECT kode_pinjam FROM peminjaman ORDER BY kode_pinjam DESC");
							$data= mysqli_fetch_array($kode_pinjam);
							$kode = $data['kode_pinjam'];
							$urut = substr($kode, 0 ,3);
							$tambah = (int) $urut + 1;
							if (strlen($tambah) == 1){
								$format = "000".$tambah;
							} else if (strlen($tambah) == 2){
								$format = "00".$tambah;
							} else if (strlen($tambah) == 3){
								$format = "0".$tambah;
							} else {
								$format = $tambah;
							}
								
							$selectDenda = mysqli_query($conn,"SELECT tanggal_harus_kembali FROM peminjaman");
							$value = mysqli_fetch_array($selectDenda);
							$denda = 0;
							$terlambat = 0;
							$tanggal_peminjaman = strtotime($pinjam->tanggal_peminjaman); 
							$tanggal_harus_kembali = strtotime(Carbon\Carbon::today()); 
  
							if ($tanggal_harus_kembali > $tanggal_peminjaman){
								$terlambat = round(abs($tanggal_harus_kembali - $tanggal_peminjaman) / 86400) - 7;
								$denda = 1000 * $terlambat;
							} if ($terlambat < 0){
								$terlambat = 0;
								$denda = 0;
							}
						

							?>

						
							<div class="card-body">
							<form method="POST" action="{{ route('peminjaman.update', $pinjam->id) }}">
                                @csrf
                                 @method('PUT')
								<form action="#">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Nomor peminjaman:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control"value="{{ $pinjam->kode_pinjam }}" name="kode_pinjam">
										</div>
									</div>

                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Kode Buku:</label>
										<div class="col-lg-9">
												 <input type="text" name="buku_id" value="{{ $pinjam->buku_id }}" class="form-control" placeholder="Masukkan kode buku" required>
										</div>
									</div>
									

                                    <!-- <div class="form-group row">
										<label class="col-lg-3 col-form-label">ID peminjam:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Masukkan id peminjam" name="user_id">
										</div>
									</div> -->

									<div class="form-group row">
									<label class="col-lg-3 col-form-label">Tanggal pinjam sebelumnya:</label>
									<div class="input-group col-lg-9">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
										<div type="text" class="form-control">{{  date('Y-m-d', strtotime($pinjam->tanggal_peminjaman)) }}</div>
									</div>
									</div>

									
									<div class="form-group row">
									<label class="col-lg-3 col-form-label">Tanggal harus kembali sebelumnya:</label>
									<div class="input-group col-lg-9">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
										<div type="text" class="form-control">{{  date('Y-m-d', strtotime($pinjam->tanggal_harus_kembali)) }}</div>
									</div>
									</div>

									<div class="form-group row">
									<label class="col-lg-3 col-form-label">Tanggal pinjam:</label>
									<div class="input-group col-lg-9">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
										<input type="text" class="form-control" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}" name="tanggal_peminjaman">
									</div>
									</div>

									
									<div class="form-group row">
									<label class="col-lg-3 col-form-label">Tanggal kembali:</label>
									<div class="input-group col-lg-9">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
										<input type="text" class="form-control" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->addDays(7)->toDateString()))}}" name="tanggal_harus_kembali">
									</div>
									</div>

									

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Keterlambatan:</label>
										<div class="col-lg-3">
										<input type="text" class="form-control" value="<?php echo $terlambat;?>" name="keterlambatan">
										</div>
                                        <div class=" mt-0 mt-lg-0 align-self-center">
												<span class="text">Hari</span>
											</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Denda:</label>
										<div class="col-lg-3">
										<input type="text" class="form-control" value="<?php echo $denda;?>" name="denda">
										</div>
									</div>

                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Status:</label>
										<div class="col-lg-3">
										<select class="form-control form-control" name="status_id">
                                        @foreach($status as $status)
                                            @if( $status->id == $pinjam->status_id )
                                                <option value="{{ $status->id }}" selected="true">{{ $status->name }}</option>
                                            @else
                                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                                            @endif
                                        @endforeach
		
                                         </select>	
										</div>
									</div>


                           
									<div class="text-right">
                                        <button type="submit" class="btn btn-primary col-lg-1 ml-1">Simpan<i ></i></button>
										<a href="{{ route('peminjaman.index') }}"  class="btn btn-danger col-lg-1 ml-1">Kembali</a>
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
