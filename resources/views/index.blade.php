<?php         
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "perpustakaan";
$koneksi    = mysqli_connect($host, $user, $password, $database);
$label = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];

$produk = mysqli_query($koneksi,"select * from kategori_buku");
while($row = mysqli_fetch_array($produk)){
$nama_produk[] = $row['nama_kategori'];

$query = mysqli_query($koneksi,"select sum(jumlah) as jumlah from buku where kategori_id='".$row['id']."'");
$row = $query->fetch_array();
$jumlah_produk3[] = $row['jumlah'];
}           


for($bulan = 1;$bulan < 13;$bulan++)
{
	$query = mysqli_query($koneksi,"select sum(status_id = 3) as status_id from peminjaman where MONTH(tanggal_peminjaman)='$bulan'");
	$row = $query->fetch_array();
	$jumlah_produk[] = $row['status_id'];

	$query2 = mysqli_query($koneksi,"select sum(status_id = 2) as status_id from peminjaman where MONTH(tanggal_peminjaman)='$bulan'");
	$row2 = $query2->fetch_array();
	$jumlah_produk2[] = $row2['status_id'];
}
 
?>

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
	<link href="{{asset('/js')}}/main.js" rel="stylesheet">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('/global_assets')}}/js/main/jquery.min.js"></script>
	<script src="{{asset('/global_assets')}}/js/main/bootstrap.bundle.min.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('/global_assets')}}/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/ui/moment/moment.min.js"></script>
	<script src="{{asset('/global_assets')}}/js/plugins/visualization/echarts/echarts.min.js"></script>

	<script src="{{asset('/assets')}}/js/app.js"></script>
    <script src="{{asset('/global_assets')}}/js/demo_pages/dashboard.js"></script>
	<script type="text/javascript" src="{{asset('/js')}}/Chart.js"></script>

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
							<a href="{{ url('/') }}" class="nav-link active ">
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
							<a href="#" class="nav-link">
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
					</div>
					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">							
						</div>
					</div>
				</div>
				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Dashboard</span>
						</div>

						<a href="#" class="header-elements-toggle text-defau lt d-md-none"><i class="icon-more"></i></a>
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

				<!-- Main charts -->
				<div class="row">
				<div class="col-lg-3">
				
				<!--Anggota -->
							<div class="card bg-teal-400">
								<div class="card-body" style="height:130px">
									<div class="d-flex">
										<h3 class="font-weight-semibold mb-0">3.450</h3>
										<div class="list-icons ml-auto">
										<a href="#" class="list-icons-item badge bg-hijau-400 rounded-circle badge-icon "><i class="icon-user font-size-sm opacity-75" style="font-size:28px" ></i></a>
										</div>
					                </div>
					                <div>
										Data Anggota
									</div>
								</div>
								<div class="container">
									<div ></div>
								</div>
							</div>
							<!-- /anggota -->
							</div>
							<div class="col-lg-3">

								<!-- Total Buku -->
								<div class="card bg-blue-400">
									<div class="card-body" style="height:130px">
										<div class="d-flex">
									
											<h3 class="font-weight-semibold mb-0">{{$buku->count()}}</h3>
											
											<div class="list-icons ml-auto">
											<a href="#" class="list-icons-item badge bg-biru-400 rounded-circle badge-icon "><i class="icon-book3 font-size-sm opacity-75" style="font-size:28px" ></i></a>
						                	</div>
					                	</div>
					                	<div>
											Data Buku
										</div>
									</div>
									<div ></div>
								</div>
								<!-- /total buku -->

								</div>
								<div class="col-lg-3">
							
								<!-- Total peminjaman buku -->
								<div class="card bg-pink-400">
									<div class="card-body" style="height:130px">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">{{ $datas->where('status_id','=', 3)->count()}}</h3>
											<div class="list-icons ml-auto">
						                		<div class="list-icons-item dropdown">
						                			<a href="#" class="list-icons-item badge bg-bulat-400 rounded-circle badge-icon "><i class="icon-sync font-size-sm opacity-75" style="font-size:28px" ></i></a>
						                		</div>
					                		</div>
					                	</div>
					                	<div>
											Peminjaman Buku
										</div>
									</div>
									<div ></div>
								</div>
								<!-- /peminjaman buku -->
							</div>
							<div class="col-lg-3">

							
							<!-- pengembalian -->
							<div class="card bg-red-400">
								<div class="card-body" style="height:130px">
									<div class="d-flex">
										<h3 class="font-weight-semibold mb-0">{{ $datas2->where('status_id','=', 2)->count()}}</h3>
										<div class="list-icons ml-auto">
										<a href="#" class="list-icons-item badge bg-oranye-400 rounded-circle badge-icon "><i class="icon-download7 font-size-sm opacity-75" style="font-size:28px" ></i></a>
									 </div>
										</div>
					                <div>
										Pengembalian Buku
									</div>
								</div>
								<div class="container-fluid">
								<div ></div>
							</div>
						</div>
						<!-- /pengembalian -->

						</div>
						<div class="col-xl-8">

					<!-- Basic columns -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Jumlah Transaksi Peminjaman dan Pengembalian</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="chart">
						<div style="width: 600px; height: 373px; margin-top:25px">
							<canvas id="myChart"></canvas>
						</div>
						</div>
					</div>
				</div>
				<!-- /basic columns -->

					</div>
					<div class="col-xl-4">
						<!-- Latest posts -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Daftar Buku Terbaru</h6>
		                	</div>
							<div class="card-body">
								<div class="row">
								@foreach($terbaru as $new)
										<div class="media flex-column flex-sm-row mt-0 mb-3">
				        					<div class="mr-sm-3 mb-2 mb-sm-0">
												<div class="card-img-actions">
													<a href="#">
													<img class="img-fluid" width="78px" src="{{ url('/uploads/'.$new->cover) }}">													</a>
												</div>
											</div>
											
				        					<div class="media-body">
												<h6 class="media-title"><a href="{{ url('/buku/' . $new->id) }}">{{$new->judul_buku}}</a></h6>
												Penulis : {{$new->penulis}}  <br>
												Penerbit : {{$new->penerbit}}  <br>
												jumlah : {{$new->jumlah}}
											</div>
										</div>
										@endforeach
									</div>
								</div>
							</div>
						
						<!-- /latest posts -->
					</div>
				</div>
				<!-- /main charts -->
				
						<!-- Basic pie -->
						<div class="card">
						<div class="card-header header-elements-inline">
						<h5 class="card-title " style="text-align: center">Data Kategori Buku</h5>
								
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						<div id="canvas-holder" style="width:70%; height: 400px; margin-top:17px; margin-left:80px">
						<canvas id="chart-area"></canvas>
						</div>
						</div>
						
						<!-- /basic pie -->
					
						<script>
											
							var ctx = document.getElementById("myChart").getContext('2d');
							var myChart = new Chart(ctx, {
								type: 'bar',

								  // Setup grid
								  grid: {
									left: 0,
									right: 40,
									top: 35,
									bottom: 0,
									containLabel: true
								},
								// Add legend
								legend: {
									label: ['Peminjaman', 'Pengembalian'],
									itemHeight: 8,
									itemGap: 20,
									textStyle: {
										padding: [0, 5]
									}
								},
									
								data: {
									labels: <?php echo json_encode($label); ?>,
									datasets: [{
										label: 'Peminjaman',
										backgroundColor: '#2ec7c9',
										borderColor: 'rgba(0,0,0,0.01)',
										data: <?php echo json_encode($jumlah_produk); ?>,
										borderWidth: 1
									},
									{
										label: 'Pengembalian',
										backgroundColor: '#b6a2de',
										borderColor: 'rgba(0,0,0,0.01)',
										data: <?php echo json_encode($jumlah_produk2); ?>,
										borderWidth: 1
									}
								
								]
								},
								
								options: {
									scales: {
										yAxes: [{
											ticks: {
												beginAtZero:true
											}
										}]
									}
								}
								
							});
	
					</script>
					<script>
					
					var config = {
						type: 'pie',
								
						data: {
							datasets: [{
								data:<?php echo json_encode($jumlah_produk3); ?>,
								backgroundColor: [
									'#2ec7c9','#b6a2de','#5ab1ef','#ffb980','#d87a80',
									'#8d98b3','#e5cf0d','#97b552','#95706d','#dc69aa',
									'#07a2a4','#9a7fd1','#588dd5','#f5994e','#c05050',
									'#59678c','#c9ab00','#7eb00a','#6f5553','#c14089'
								],
							}],
					
						labels: <?php echo json_encode($nama_produk); ?>									
								
						},
						options: {
							responsive: true,
							
							title:{
								display: true,
								position:"top",

							},
							legend:{
								display : true,
								position:"left"
							},
							tooltip: {
								trigger: 'item',
								backgroundColor: 'rgba(0,0,0,0.75)',
								padding: [10, 15],
								textStyle: {
									fontSize: 13,
									fontFamily: 'Roboto, sans-serif'
								},
								formatter: "{a} <br/>{b}: {c} ({d}%)"
							},
							
						}
					};
			
					window.onload = function() {
						var ctx = document.getElementById('chart-area').getContext('2d');
						window.myPie = new Chart(ctx, config);
					};
			
					document.getElementById('randomizeData').addEventListener('click', function() {
						config.data.datasets.forEach(function(dataset) {
							dataset.data = dataset.data.map(function() {
								return randomScalingFactor();
							});
						});
			
						window.myPie.update();
					});
			
					var colorNames = Object.keys(window.chartColors);
					document.getElementById('addDataset').addEventListener('click', function() {
						var newDataset = {
							backgroundColor: [],
							data: [],
							label: 'New dataset ' + config.data.datasets.length,
						};
			
						for (var index = 0; index < config.data.labels.length; ++index) {
							newDataset.data.push(randomScalingFactor());
			
							var colorName = colorNames[index % colorNames.length];
							var newColor = window.chartColors[colorName];
							newDataset.backgroundColor.push(newColor);
						}
			
						config.data.datasets.push(newDataset);
						window.myPie.update();
					});
			
					document.getElementById('removeDataset').addEventListener('click', function() {
						config.data.datasets.splice(0, 1);
						window.myPie.update();
					});
				</script>

			</div>
			<!-- /content area -->


			
		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
</body>
</html>
