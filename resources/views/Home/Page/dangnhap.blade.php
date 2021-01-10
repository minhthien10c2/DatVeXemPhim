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

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="home_assett/img/LOGO.png" sizes="32x32">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Đặt vé xem phim</title>

</head>
<body class="body">

	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form action="{{ route('dangnhap') }}" method="POST" class="sign__form">
							@csrf
							<a href="{{route('homeindex')}}" class="sign__title">
								<span>BUG</span> Cinema
							</a>
							
							<div class="sign__group">
								<input type="text" name="Email" class="sign__input" placeholder="Email">
							</div>

							<div class="sign__group">
								<input type="password" name="Password" class="sign__input" placeholder="Mật khẩu">
							</div>
							
							<button class="sign__btn" type="submit">Đăng nhập</button>

							<span class="sign__text">Bạn chưa có tài khoản? <a href="{{route('dangky')}}">Đăng ký!</a></span>

						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>

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
</body>
</html>