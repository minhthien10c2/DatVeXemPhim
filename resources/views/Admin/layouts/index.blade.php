<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>BUGCINEMA Admin Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <base href="{{asset('')}}">
    <link href="admin_asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin_asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="admin_asset/vendor/linearicons/style.css" rel="stylesheet">
    <link href="admin_asset/vendor/metisMenu/metisMenu.css" rel="stylesheet">
    <link href="admin_asset/vendor/bootstrap-multiselect/bootstrap-multiselect.css" rel="stylesheet">
    <link href="admin_asset/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link href="admin_asset/vendor/parsleyjs/css/parsley.css" rel="stylesheet">
    <!-- MAIN CSS -->
    <link href="admin_asset/css/main1.css" rel="stylesheet">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="icon" type="image/png" sizes="96x96" href="home_asset/img/LOGO.png">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu"></i></button>
                </div>
                <!-- logo -->
                <div class="navbar-brand">
                    <a href="index.jsp">BUGCinema</a>
                </div>
                <!-- end logo -->


            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <!-- MENU -->
       @include('Admin.layouts.menu')
        <!-- END LEFT SIDEBAR -->
        
        <!-- MAIN CONTENT-->
        @yield('content')
        <!--END MAIN CONTENT-->
        
        <div class="clearfix"></div>
		<footer>
			<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="admin_asset/vendor/jquery/jquery.min.js" defer></script>
	<script src="admin_asset/vendor/bootstrap/js/bootstrap.min.js" defer></script>
	<script src="admin_asset/vendor/metisMenu/metisMenu.js" defer></script>
	<script src="admin_asset/vendor/jquery-slimscroll/jquery.slimscroll.min.js" defer></script>
	<script src="admin_asset/vendor/bootstrap-multiselect/bootstrap-multiselect.js" defer></script>
	<script src="admin_asset/vendor/parsleyjs/js/parsley.min.js" defer></script>
	<script src="admin_asset/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js" defer></script>
	<script src="admin_asset/scripts/common.js" defer></script>
	<script src="admin_asset/scripts/multiselect.js" defer></script>
</body>