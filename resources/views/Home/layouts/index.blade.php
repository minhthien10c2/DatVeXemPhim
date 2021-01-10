<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		<!-- Font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet"> 
	
		<!-- CSS -->
        <base href="{{asset('')}}">
        <link rel="stylesheet" href="home_assett/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="home_assett/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="home_assett/css/owl.carousel.min.css">
        <link rel="stylesheet" href="home_assett/css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="home_assett/css/nouislider.min.css">
        <link rel="stylesheet" href="home_assett/css/ionicons.min.css">
        <link rel="stylesheet" href="home_assett/css/plyr.css">
        <link rel="stylesheet" href="home_assett/css/photoswipe.css">
        <link rel="stylesheet" href="home_assett/css/main.css">
		<link rel="stylesheet" href="home_assett/css/Pagination.css">

        <!-- Favicons -->
        <link rel="icon" type="image/png" href="home_assett/img/LOGO.png" sizes="32x32">

        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Dmitry Volkov">
		<title>Đặt vé xem phim</title>	
	</head>
	<body class="body">
		<!-- header -->
	 <header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="{{route('homeindex')}}" class="header__logo">
								<span>BUG</span> Cinema
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a href="{{route('homeindex')}}" class="header__nav-link">Trang chủ</a>

								</li>
								<!-- end dropdown -->

								<!-- dropdown -->
								
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Người dùng</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
											<li><a href="{{route('thongtinnguoidung')}}">Thông tin người dùng</a></li>
									</ul>
								</li>
								
								<!-- end dropdown -->
							
                                <li class="header__nav-item">
									<a href="{{route('listkhuyenmai')}}" class="header__nav-link">Khuyến mãi</a>
                                </li>
                                
                                <li class="header__nav-item">
									<a href="{{route('listphanhoi')}}" class="header__nav-link">Phản hồi</a>                             
								</li>
								
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
																							 					 																				 							   							   										
							
								<div class="header__auth">
									<button class="header__search-btn" type="button">
										<i class="icon ion-ios-search"></i>
									</button>
	
								
								   	
									<!-- <form action="NguoiDungDangXuat" method="post">	
										<input type="submit" value="Đăng xuất" class="header__sign-in" style="color:white; border:none; cursor:pointer;">
									</form> -->
						
								
								<a href="DangNhap.jsp" class="header__sign-in">
										<i class="icon ion-ios-log-in"></i>
										<span>Đăng nhập</span>
									</a>
								
								</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">Tìm kiếm</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
    <!-- end header -->
		
    @yield('content')
	
		<!-- footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<!-- footer list -->
					<div class="col-12 col-md-3">
						<h6 class="footer__title">Tải ứng dụng</h6>
						<ul class="footer__app">
							<li><a href="#"><img src="home_assett/img/Download_on_the_App_Store_Badge.svg" alt=""></a></li>
							<li><a href="#"><img src="home_assett/img/google-play-badge.png" alt=""></a></li>
						</ul>
					</div>
					<!-- end footer list -->
	
					<!-- footer list -->
					<div class="col-6 col-sm-4 col-md-3">
						<h6 class="footer__title">Về chúng tôi</h6>
						<ul class="footer__list">
							<!-- <li><a href="#">Về chúng tôi</a></li> -->
							<li><a href="#">Đặt vé</a></li>
							<li><a href="#">Trợ giúp</a></li>
						</ul>
					</div>
					<!-- end footer list -->
	
					<!-- footer list -->
					<div class="col-6 col-sm-4 col-md-3">
						<h6 class="footer__title">Điều khoản</h6>
						<ul class="footer__list">
							<li><a href="#">Điều khoản sử dụng</a></li>
							<li><a href="#">Chính sách bảo mật</a></li>
							<!-- <li><a href="#">Security</a></li> -->
						</ul>
					</div>
					<!-- end footer list -->
	
					<!-- footer list -->
					<div class="col-12 col-sm-4 col-md-3">
						<h6 class="footer__title">Kết nối với chúng tôi</h6>
						<ul class="footer__list">
							<li><a href="tel:+18002345678">0123456789</a></li>
							<li><a href="mailto:support@bugcinema.com">support@bugcinema.com</a></li>
						</ul>
						<ul class="footer__social">
							<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
							<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
							<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
							<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
						</ul>
					</div>
					<!-- end footer list -->
	
					<!-- footer copyright -->
					<div class="col-12">
						<div class="footer__copyright">
							
	
							<ul>
								<li><a href="#">Điều khoản sử dụng</a></li>
								<li><a href="#">Chính sách bảo mật</a></li>
							</ul>
						</div>
					</div>
					<!-- end footer copyright -->
				</div>
			</div>
		</footer>
	    <!-- end footer -->
	
		<!-- JS -->
		<script src="home_assett/js/jquery-3.3.1.min.js"></script>
        <script src="home_assett/js/bootstrap.bundle.min.js"></script>
        <script src="home_assett/js/owl.carousel.min.js"></script>
        <script src="home_assett/js/jquery.mousewheel.min.js"></script>
        <script src="home_assett/js/jquery.mCustomScrollbar.min.js"></script>
        <script src="home_assett/js/wNumb.js"></script>
        <script src="home_assett/js/nouislider.min.js"></script>
        <script src="home_assett/js/plyr.min.js"></script>
        <script src="home_assett/js/jquery.morelines.min.js"></script>
        <script src="home_assett/js/photoswipe.min.js"></script>
        <script src="home_assett/js/photoswipe-ui-default.min.js"></script>
		<script src="home_assett/js/main.js"></script>
		@yield('script')
	</body>
</html>