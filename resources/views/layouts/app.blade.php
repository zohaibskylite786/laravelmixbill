<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>@yield('title') - {{ app_config('CompanyName') }}</title>
	<link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />

	<!-- Icons -->
	<link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">

	<!-- Plugins -->
	<link rel="stylesheet" href="{{ asset('css/plugins/waves.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plugins/perfect-scrollbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plugins/select2.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plugins/bootstrap-colorpicker.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plugins/bootstrap-slider.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plugins/bootstrap-datepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plugins/summernote.css') }}">

	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.min.css') }}">


	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="{{ asset('js/ie/matchMedia.js') }}"></script>  <![endif]-->

    @yield('styles')
</head>

<body id="app" class="app off-canvas nav-expand">

	<header class="site-head" id="site-head">
		<ul class="list-unstyled left-elems">
			<li>
				<a href="#" class="nav-trigger ion ion-drag"></a>
			</li>
			<li>
				<div class="form-search hidden-xs">
					<form id="site-search" method="post" action="customers/list/">
						<input type="search" class="form-control" name="username" placeholder="{{ translate('Search_Contact') }}">
						<button type="submit" class="ion ion-ios-search-strong"></button>
					</form>
				</div>
			</li>
			<li>
				<div class="site-logo visible-xs">
					<a href="dashboard" class="text-uppercase h3">
						<span class="text">{{ translate('Logo') }}</span>
					</a>
				</div>
			</li>
			<li class="fullscreen hidden-xs">
				<a href="#"><i class="ion ion-qr-scanner"></i></a>
			</li>
			<!-- Notification on progress, hide it  -->
			<li class="notify-drop hidden-xs dropdown hidden">
				<a href="#" data-toggle="dropdown">
					<i class="ion ion-chatboxes"></i>
					<span class="badge badge-danger badge-xs circle">3</span>
				</a>
				<div class="panel panel-default dropdown-menu">
					<div class="panel-heading">
						You have 3 new message
						<a href="#" class="right btn btn-xs btn-pink mt-3">Show All</a>
					</div>
					<div class="panel-body">
						Coming Soon!!! Next Version...
					</div>
				</div>
			</li>
		</ul>
		<ul class="list-unstyled right-elems">
			<li class="logout hidden-xs">
				<a href="logout"><i class="ion ion-power"></i> {{ translate('Logout') }} </a></a>
			</li>
		</ul>
	</header>

	<div class="main-container clearfix">
		<aside class="nav-wrap nav-expand" id="site-nav" data-perfect-scrollbar>
			<div class="nav-head">
				<a href="dashboard" class="site-logo text-uppercase">
					<i class="ion ion-wifi"></i>
					<span class="text">{{ translate('Logo') }}</span>
				</a>
			</div>

			<nav class="site-nav clearfix" role="navigation">

				<div class="profile clearfix mb15">
                    {{--  pass user id  --}}
					<img src="https://robohash.org/23?set=set3&size=100x100&bgset=bg1" alt="admin">
					<div class="group">
						<div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">fullname<span class="caret"></a></span>
							<ul class="dropdown-menu">
								<li><a href="settings/users-edit/22"><i class="ion ion-person"></i> {{ translate('My_Account') }}<div class="ripple-wrapper"></div></a></li>
								<li><a href="settings/change-password"><i class="ion ion-settings"></i> {{ translate('Change_Password') }}</a></li>
								<li><a href="logout"><i class="ion ion-power"></i> {{ translate('Logout') }}</a></li>
							</ul>
						</div>
						<small class="desig">{{ translate('Administrator') }}</small>
					</div>
				</div>
			{else}
				<div class="profile clearfix mb15">
					<img src="https://robohash.org/10?set=set3&size=100x100&bgset=bg1" alt="admin">
					<div class="group">
						<div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">fullname<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="accounts/profile"><i class="ion ion-person"></i>
                                     {{ translate('My_Account') }}
                                     <div class="ripple-wrapper"></div></a></li>
								<li><a href="accounts/change-password"><i class="ion ion-settings"></i>
                                     {{ translate('Change_Password') }}
                                    </a></li>
                                     {{ translate('Change_Password') }}
								<li><a href="logout"><i class="ion ion-power"></i>
                                    {{ translate('Logout') }}</a></li>
							</ul>
						</div>
						<small class="desig"> {{ translate('Member') }}</small>
					</div>
				</div>
			{/if}

				<ul id="leftMenu" class="list-unstyled clearfix nav-list mb15">
					<li>
						<a href="dashboard">
							<i class="ion ion-monitor"></i>
							<span class="text">{{ translate('Dashboard') }}</span>
						</a>
					</li>
					<li >
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-android-contacts"></i>
							<span class="text">{{ translate('Customers') }}</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li ><a href="customers/add">{{ translate('Add_Contact') }} </a></li>
							<li><a href="customers/list">{{ translate('List_Contact') }}</a></li>
						</ul>
					</li>
					<li>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-card"></i>
							<span class="text"> {{ translate('Prepaid') }}</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="prepaid/list">{{ translate('Prepaid_User') }}</a></li>
							<li><a href="prepaid/voucher">{{ translate('Prepaid_Vouchers') }}</a></li>
							<li><a href="prepaid/refill">{{ translate('Refill_Account') }}</a></li>
							<li><a href="prepaid/recharge">{{ translate('Recharge_Account') }}</a></li>

						</ul>
					</li>
					<li>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-cube"></i>
							<span class="text">{{ translate('Services') }}</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="services/hotspot">{{ translate('Hotspot_Plans') }}</a></li>
							<li><a href="services/pppoe">{{ translate('PPPOE_Plans') }}</a></li>
							<li><a href="bandwidth/list">{{ translate('Bandwidth_Plans') }}</a></li>

						</ul>
					</li>

					<li>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-clipboard"></i>
							<span class="text">{{ translate('Reports') }}</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="reports/daily-report">{{ translate('Daily_Report') }}</a></li>
							<li><a href="reports/by-period">{{ translate('Period_Reports') }}</a></li>

						</ul>
					</li>


					<li>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-network"></i>
							<span class="text">{{ translate('Network') }}</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="routers/list">{{ translate('Routers') }}</a></li>
							<li><a href="pool/list">{{ translate('Pool') }}</a></li>
						</ul>
					</li>

					<li>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-document"></i>
							<span class="text">{{ translate('Static_Pages') }}</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="pages/Order_Voucher">{{ translate('Order_Voucher') }}</a></li>
							<li ><a href="pages/Voucher">{{ translate('Voucher') }} Template</a></li>
							<li ><a href="pages/Announcement">{{ translate('Announcement') }} Editor</a></li>
							<li><a href="pages/Registration_Info">{{ translate('Registration_Info') }} Editor</a></li>

						</ul>
					</li>

					<li>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-gear-a"></i>
							<span class="text">{{ translate('Settings') }}</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li><a href="settings/app">{{ translate('General_Settings') }}</a></li>
							<li><a href="settings/localisation">{{ translate('Localisation') }}</a></li>
							<li><a href="settings/users">{{ translate('Administrator_Users') }}</a></li>
							<li><a href="settings/dbstatus">{{ translate('Backup_Restore') }}</a></li>

						</ul>
					</li>

                    <li >
						<a href="paymentgateway">
							<i class="ion ion-cash"></i>
							<span class="text">{{ translate('Payment Gateway') }}</span>
						</a>
					</li>

					<li>
						<a href="community">
							<i class="ion ion-chatboxes"></i>
							<span class="text">{{translate('Community')}}</span>
						</a>
					</li>
				</ul>

			</nav>

			<footer class="nav-foot">
				<p>{date('Y')} &copy; <span>{{ app_config('CompanyName') }}</span></p>
			</footer>
		</aside>
		<script>
		// i find bug that dropdown menu in mobile browser doesnt active, so i force to show all
		var mobile = false;
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			mobile = true;
		}
		function toggleDropdownMobile(node){
			if(mobile){
				$(node).parent('li').addClass('open');
			}
		}
		</script>
		<div class="content-container" id="content">
			<div class="page page-dashboard">

			@include('partials.notify')


            @yield('content')

        </div>
    </div>
</div>

<div class="site-settings clearfix hidden-xs">
    <div class="settings clearfix">
        <div class="trigger ion ion-settings left"></div>
        <div class="wrapper left">
            <ul class="list-unstyled other-settings">
                <li class="clearfix mb10">
                    <div class="left small">Fixed Header</div>
                    <div class="md-switch right">
                        <label>
                            <input type="checkbox" id="fixedHeader">
                            <span>&nbsp;</span>
                        </label>
                    </div>
                </li>
                <li class="clearfix mb10">
                    <div class="left small">Nav Full</div>
                    <div class="md-switch right">
                        <label>
                            <input type="checkbox" id="navFull">
                            <span>&nbsp;</span>
                        </label>
                    </div>
                </li>
            </ul>
            <hr/>
            <ul class="themes list-unstyled" id="themeColor">
                <li data-theme="theme-zero" class="active"></li>
                <li data-theme="theme-one"></li>
                <li data-theme="theme-two"></li>
                <li data-theme="theme-three"></li>
                <li data-theme="theme-four"></li>
                <li data-theme="theme-five"></li>
                <li data-theme="theme-six"></li>
                <li data-theme="theme-seven"></li>
            </ul>
        </div>
    </div>
</div>

    <script src="{{ asset('js/vendors.js') }}"></script>
    <script src="{{ asset('scripts/plugins/screenfull.js') }}"></script>
    <script src="{{ asset('scripts/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('scripts/plugins/waves.min.js') }}"></script>
    <script src="{{ asset('scripts/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('scripts/plugins/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('scripts/plugins/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('scripts/plugins/summernote.min.js') }}"></script>
    <script src="{{ asset('scripts/plugins/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('ui/lib/js/bootbox.min.js') }}"></script>
    <script src="{{ asset('scripts/app.js') }}"></script>
    <script src="{{ asset('scripts/custom.js') }}"></script>
    <script src="{{ asset('scripts/form-elements.init.js') }}"></script>

    @yield('scripts')

</body>
</html>
