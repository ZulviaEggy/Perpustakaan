@extends('dashboard.master')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Perpustakaan</title>

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
                <form method="POST" action="">
                    @csrf
                    <h2 class="textRe">{{ __('Register') }}</h2>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon-user"></i>
                        </span>
                        </div>
                        <input class="form-control" type="text" placeholder="{{ __('NIS atau NIP') }}" name="number" value="{{ old('number') }}" required autofocus>
                    </div>
                   
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon-phone"></i>
                        </span>
                        </div>
                        <input class="form-control" type="number" placeholder="{{ __('Nomor Telepon') }}" name="number" value="{{ old('number') }}" required >
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon-envelop"></i>
                        </span>
                        </div>
                        <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon-lock"></i>
                        </span>
                        </div>
                        <input class="form-control" type="password" placeholder="{{ __('Password') }}" name="password" required>
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon-lock"></i>
                        </span>
                        </div>
                        <input class="form-control" type="password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required>
                    </div>
                    <button class="btn btn-block btn-green" type="submit">{{ __('Register') }}</button>
                </form>
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

