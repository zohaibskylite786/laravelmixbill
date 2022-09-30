<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>{{ app_config('CompanyName') }} - {{ translate('Register') }}</title>
	<link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />

	<!-- Icons -->
	<link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">

	<!-- Plugins -->
	<link rel="stylesheet" href="{{ asset('css/plugins/waves.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plugins/perfect-scrollbar.css') }}">

	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.min.css') }}">

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="{{ asset('js/ie/matchMedia.js') }}"></script>  <![endif]-->

</head>
<body id="app" class="app off-canvas body-full">

	<div class="container">
		<div class="hidden-xs" style="height:150px"></div>
		<div class="form-head mb20">
			<h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold" style="text-shadow: 2px 2px 4px #757575;">
                {{ app_config('CompanyName') }}
            </h1>
			<hr>
		</div>
		@if (Session::has('notify'))
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    @include('partials.notify')
                </div>
            </div>
        @endif
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
				<div class="panel-heading">{{ translate('Registration_Info') }}</div>
				<div class="panel-body" style="height:375px;max-height:375px;overflow:scroll;">
                    @include('partials.registration-Info')
				</div>
				</div>
			</div>
			<form class="form-horizontal" action="{{ route('register.post') }}" method="post">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">1. {{ translate('Register_Member') }}</div>
					<div class="panel-body">
						<div class="form-container">
							<div class="md-input-container md-float-label">
								<input type="text" required class="md-input" id="username" placeholder="{{ translate('Phone_Number') }}" name="username">
								<label>{{ translate('Phone_Number') }}</label>
							</div>
							<div class="md-input-container md-float-label">
								<input type="text" required class="md-input" id="fullname" name="fullname">
								<label>{{ translate('Full_Name') }}</label>
							</div>
							<div class="md-input-container md-float-label">
								<input type="text" name="address" id="address" class="md-input">
								<label>{{ translate('Address') }}</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">2. {{ translate('Password') }}</div>
					<div class="panel-body">
						<div class="form-container">
							<div class="md-input-container md-float-label">
								<input type="password" required class="md-input" id="password" name="password">
								<label>{{ translate('Password') }}</label>
							</div>
							<div class="md-input-container md-float-label">
								<input type="password" required class="md-input" id="password_confirmation" name="password_confirmation">
								<label>{{ translate('Confirm_Password') }}</label>
							</div>
							<div class="btn-group btn-group-justified mb15">
								<div class="btn-group">
									<button class="btn btn-primary waves-effect waves-light" type="submit">{{ translate('Register') }}</button>
								</div>
								<div class="btn-group">
									<a href="{{ route('login') }}" class="btn btn-success">{{ translate('Cancel') }}</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>

	<script src="{{ asset('scripts/vendors.js') }}"></script>
</body>
</html>
