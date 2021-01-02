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

	<div class="sign section--bg" data-bg="home_assett/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form action="{{route ('dangky')}}" class="sign__form" method="POST">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<a href="#" class="sign__title">
								<span>BUG</span> Cinema
							</a>

							<div class="sign__group">
								<input type="text" name="HoTen" value="{{ old('HoTen')}}" class="sign__input @error('HoTen') is-invalid @enderror" placeholder="Họ và tên">
								@error('HoTen')
                                	<div style="color:#ff55a5;"><strong>{{ $message }}</strong></div>
                            	@enderror
							</div>
							
							<div class="sign__group">
								<input type="text" name="SDT" value="{{ old('SDT')}}" class="sign__input @error('SDT') is-invalid @enderror" placeholder="Số điện thoại">
								@error('SDT')
                                	<div style="color:#ff55a5;"><strong>{{ $message }}</strong></div>
                            	@enderror
							</div>
							
							<div class="sign__group">
								<input type="text" name="DiaChi" value="{{ old('DiaChi')}}" class="sign__input @error('DiaChi') is-invalid @enderror" placeholder="Địa chỉ">
								@error('DiaChi')
                                	<div style="color:#ff55a5;"><strong>{{ $message }}</strong></div>
                            	@enderror
							</div>

							<div class="sign__group">
								<input type="text" name="Email" value="{{ old('Email')}}" class="sign__input @error('Email') is-invalid @enderror" placeholder="Email">
								@error('Email')
                                	<div style="color:#ff55a5;"><strong>{{ $message }}</strong></div>
                            	@enderror
							</div>

							<div class="sign__group">
								<input type="password" name="Password" class="sign__input @error('Password') is-invalid @enderror" placeholder="Mật khẩu">
								@error('Password')
                                	<div style="color:#ff55a5;"><strong>{{ $message }}</strong></div>		
                            	@enderror
							</div>
								

							<div class="sign__group">
								<input type="password" name="Password-Confirm"  class="sign__input @error('Password-Confirm') is-invalid @enderror" placeholder="Mật lại khẩu">
								@error('Password-Confirm')
                                	<div style="color:#ff55a5;"><strong>{{ $message }}</strong></div>
                            	@enderror
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" class="@error('remember') is-invalid @enderror" type="checkbox" checked="checked">
								<label for="remember">Tôi đã đọc và đồng ý với <a href="#">Chính sách bảo mật</a></label>
								@error('remember')
                                	<div style="color:#ff55a5;"><strong>{{ $message }}</strong></div>
                            	@enderror
							</div>
							
							<button class="sign__btn" type="submit">Đăng ký</button>

							<span class="sign__text">Bạn đã có tài khoản? <a href="{{route('dangnhap')}}">Đăng nhập!</a></span>
						</form>
						<!-- registration form -->
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