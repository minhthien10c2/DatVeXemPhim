@extends('Home.layouts.index')

@section('content')
<!-- page title -->
<section class="section section--first section--bg" data-bg="home_assett/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Khuyến mãi</h2>
						<!-- end section title -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- events -->
	<div class="section">
		<div class="container">
			<div class="row">
            @foreach($khuyenmai as $key=>$km)
			    @if($key != 1)	
                <!-- event -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="event">
						<div class="event__item event__item--first"><span>{{$km->TieuDe}}</span></div>
						<img src="{{ env('APP_URL') . '/storage/app/IMG/' . $km->HinhAnh }}" alt="" style="width: 100%;height: 100%;">
						<div class="event__item">{{$km->ChiTiet}}
						</div>
						<a href="{{route('khuyenmai',['id'=>$km->id])}}" class="event__btn">Xem chi tiết</a>
					</div>
				</div>
				<!-- end event -->
                @else
				<!-- event -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="event event--premium">
						<div class="event__item event__item--first"><span>{{$km->TieuDe}}</span></div>
						<img src="{{ env('APP_URL') . '/storage/app/IMG/' . $km->HinhAnh }}" alt="" style="width: 100%;height: 100%;">
						<div class="event__item">{{$km->ChiTiet}}
						</div>
						<a href="{{route('khuyenmai',['id'=>$km->id])}}" class="event__btn">Xem chi tiết</a>
					</div>
				</div>
				<!-- end event -->
                @endif
            @endforeach
			</div>
		</div>
	</div>
	<!-- end events -->

@endsection