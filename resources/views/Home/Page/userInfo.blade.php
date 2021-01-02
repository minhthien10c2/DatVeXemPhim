@extends('Home.layouts.index')

@section('content')

<div class="user__info section--bg" data-bg="home_assett/img/section/section.jpg">
		<div class="container" style="margin-top: 80px">
			<div class="row">
				<div class="col-12">
					<div class="user__info__content">
						<!-- userinfo form -->
						<form action="{{route('nguoidung.sua',['id'=>Auth::User()->id])}}" method="POST" class="user__info__form">
                            @csrf
							<h3 class="user__info__title">Thông tin người dùng</h3>
							
                            @if(Session('mes'))
                            <div class="user__info__group" role="alert">
                                <strong style="color:green;">{{Session('mes')}}</strong>
                            </div>
                            @endif
                            
                            <div class="user__info__group">
								<label for="HoTen">Tên người dùng</label>
								<input name="HoTen" value="{{Auth::User()->name}}" type="text" class="user__info__input" placeholder="Nhập tên">
							</div>												

							<div class="user__info__group">
								<label for="SDT">Số điện thoại</label>
								<input name="SDT" type="text" value="{{Auth::User()->SDT}}" class="user__info__input" placeholder="Nhập số điện thoại">
							</div>
							
							<div class="user__info__group">
								<label for="DiaChi">Địa chỉ</label>
								<input name="DiaChi" type="text" value="{{Auth::User()->DiaChi}}" class="user__info__input" placeholder="Nhập địa chỉ">
							</div>
								
							<div class="user__info__group">
								<label for="Password">Mật khẩu</label>
								<input name="Password" type="password" class="user__info__input" placeholder="Nhập mật khẩu">
							</div>

							<div class="user__info__group">
								<label for="password--confirm">Xác nhận mật khẩu</label>
								<input name="password--confirm" type="password" class="user__info__input" placeholder="Nhập xác nhận mật khẩu">
							</div>

							<button class="user__info__btn" type="submit">Cập nhật thông tin</button>
						</form>
						<!-- userinfo form -->
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection