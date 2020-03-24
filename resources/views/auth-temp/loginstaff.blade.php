@extends('dashboard.master')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
    <link href="{{asset('/assets')}}/css/colors.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets')}}/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-login">

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

      <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
          <div class="card text-white bg-prim py-4 d-md-down-none" style="width:38%">
              <div class="card-body text-center">
                <div>
                  <h2>SI Perpustakaan</h2>
                  <p>Sekolah Tahfids Madinatul Quran</p>
                    </div>
                </div>
              </div>
            <div class="card p-4">
              <div class="card-body">
              <div class="form-group text-center text-muted content-divider">
								<span class="px-2">Login Untuk Staff</span>
							</div>
                            <div></div>
                <form method="POST" action="">
                    @csrf
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="icon-user"></i>
                        </span>
                    </div>
                    <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="icon-lock"></i>
                        </span>
                    </div>
                    <input class="form-control" type="password" placeholder="{{ __('Password') }}" name="password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="text-right">
                        <a href="" class="btn btn-link px-0 textA" type="button">{{ __('Forgot Your Password?') }}</a>
                    </div>
                        <button class="btn btn-block btn-green" type="submit">{{ __('Login') }}</button>
                        <div class="form-group  text-muted content-divider">
								<span >Don't have an account? <a href="{{ url('/register') }}">Register</a></span>
                            </div>
                            
                    </div>
                    <span class=" textS text-center text-muted">
                        <p>Untuk Guru dan Siswa silahkan login melaui link berikut <a href="{{ url('/login/anggota') }}">Login Siswa &amp; Guru</a></span>
                    </p>
                    </div>
            </div>
          </div>
        </div>
      </div>
    </div>

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>

