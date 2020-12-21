<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>BUGCINEMA Admin Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/linearicons/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/metisMenu/metisMenu.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/parsleyjs/css/parsley.css') }}" rel="stylesheet">
    
    <!-- MAIN CSS -->
    <link href="{{ asset('assets/css/main1.css') }}" rel="stylesheet">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="icon" type="image/png" sizes="96x96" href="img/LOGO.png">
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
        <div id="left-sidebar" class="sidebar">
            <button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
                <span class="sr-only">Toggle Fullwidth</span>
                <i class="fa fa-angle-left"></i>
            </button>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle user-name" data-toggle="dropdown">Hello, <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <li>
                                <form action="NguoiDungDangXuat" method="post">
                                    <input type="submit" value="Đăng xuất" class="form-control" style="border:none;">
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class=""><a href="{{route('phim')}}"><i class="lnr lnr-film-play"></i> <span>Quản lý phim</span></a></li>
                        <li class=""><a href="{{route('suatchieu')}}"><i class="lnr lnr-calendar-full"></i> <span>Quản lý suất chiếu</span></a></li>
                        <li class=""><a href="{{route('ve')}}"><i class="lnr lnr-book"></i> <span>Quản lý vé</span></a></li>
                        <li class=""><a href="{{route('khuyenmai')}}"><i class="lnr lnr-gift"></i> <span>Quản lý khuyến mãi</span></a></li>
                        <li class=""><a href="{{route('hethongrap')}}"><i class="lnr lnr-apartment"></i> <span>Quản lý hệ thống rạp</span></a></li>
                        <li class=""><a href="{{route('rap')}}"><i class="lnr lnr-store"></i> <span>Quản lý rạp</span></a></li>
                        <li class=""><a href="{{route('phong')}}"><i class="lnr lnr-home"></i> <span>Quản lý phòng</span></a></li>
                        <li class=""><a href="{{route('dinhdang')}}"><i class="lnr lnr-magic-wand"></i> <span>Quản lý định dạng</span></a></li>
                        <li class=""><a href="{{route('loaiphim')}}"><i class="lnr lnr-dice"></i> <span>Quản lý loại phim</span></a></li>
                        <li class=""><a href="{{route('thanhpho')}}"><i class="lnr lnr-pushpin"></i> <span>Quản lý thành phô</span></a></li>
                        <li class=""><a href="{{route('quanhuyen')}}"><i class="lnr lnr-location"></i> <span>Quản lý quận huyện</span></a></li> 
                    </ul>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        
        <!-- MAIN CONTENT-->
        
        <!--END MAIN CONTENT-->
        
        <div class="clearfix"></div>
		<footer>
			<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/metisMenu/metisMenu.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
	<script src="assets/vendor/parsleyjs/js/parsley.min.js"></script>
	<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/scripts/common.js"></script>
	<script>
	$(function() {		
		// initialize after multiselect
		$('#basic-form').parsley();
	
	});
	</script>
</body>