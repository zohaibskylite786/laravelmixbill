<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title> {{ app_config('CompanyName') }} - {{ translate('Login') }}</title>
	<link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />

	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.min.css') }}">

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="{{ asset('js/ie/matchMedia.js') }}"></script>  <![endif]-->

</head>
<body>
	<div class="container">
		<div class="hidden-xs" style="height:150px"></div>
		<div class="form-head mb20">
			<h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold" style="text-shadow: 2px 2px 4px #757575;">{{ app_config('CompanyName') }}</h1>
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
			<div class="col-md-4 col-md-offset-2">
				<div class="panel panel-default">
				<div class="panel-heading">{{ translate('Announcement') }}</div>
				<div class="panel-body" style="height:296px;max-height:296px;overflow:scroll;">
					@include('partials.announcement')
				</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">{{ translate('Sign_In_Member') }}</div>
					<div class="panel-body" style="height:296px;max-height:296px;">
						<div class="form-container">
							<form class="form-horizontal" action="{{ route('login.post') }}" method="post">
                                @csrf
								<div class="md-input-container md-float-label">
									<input type="text" name="username" placeholder="{{ translate('Username') }}" class="md-input">
									<label>{{ translate('Username') }}</label>

                                    @error('phone_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

								</div>

								<div class="md-input-container md-float-label">
									<input type="password" name="password" placeholder="{{ translate('Password') }}" class="md-input">
									<label>{{ translate('Password') }}</label>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
								</div>

								<div class="clearfix hidden">
									<div class="ui-checkbox ui-checkbox-primary right">
										<label>
											<input type="checkbox">
											<span>Remember me</span>
										</label>
									</div>
								</div>
								<div class="btn-group btn-group-justified mb15">
									<div class="btn-group">
										<button type="submit" class="btn btn-primary">{{ translate('Login') }}</button>
									</div>
									<div class="btn-group">
										<a href="register" class="btn btn-success">{{ translate('Register') }}</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('js/vendors.js') }}"></script>
</body>
</html>
