@extends('Home.layouts.index')

@section('content')
  <!-- details -->
	<section class="section details">
		<!-- details background -->
		<div class="details__bg" data-bg="home_assett/img/home/home__bg.jpg"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<h1 class="details__title">{{$phim->TenPhim}}</h1>
				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-10">
					<div class="card card--details card--series">
						<div class="row">
							<!-- card cover -->
							<div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-3">
								<div class="card__cover">
									<img src="{{ env('APP_URL') . '/storage/app/IMG/' . $phim->HinhAnh }}" alt="">		
								</div>
								
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-9">
								<div class="card__content">
									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

										<ul class="card__list">
                                            <li>@foreach($phim->DinhDang as $dd) {{$dd->TenDinhDang}} @endforeach</li>
											<li>{{$phim->LuaTuoi}}+</li>
										</ul>
									</div>

									<ul class="card__meta">
										<li><span>Thể loại:</span>
                                            @foreach($phim->LoaiPhim as $lp1)
												<a href="#">{{$lp1->TenLoaiPhim}}</a>	
											@endforeach	
                                        </li>
										<li><span>Năm phát hành:</span> {{$phim->NamSanXuat}}</li>
										<li><span>Thời gian chiếu:</span> {{$phim->ThoiLuong}} phút</li>
										<!-- <li><span>Quốc gia:</span> <a href="#">USA</a> </li> -->
									</ul>

									<div class="card__description card__description--details">
                                        {{$suatchieu}}
									</div>
								</div>
							</div>
							<!-- end card content -->
						</div>
                        
					</div>
				</div>
				<!-- end content -->
                <div class="col-12" style="margin-bottom:20px;">
                    <div class="details__wrap">
                        <a href="bookticket.html" class="details_book__ticket__btn">Đặt vé ngay</a>
                    </div>
                </div>
				<!-- player -->
				<div class="col-12 col-xl-6">
                    <iframe width="560" height="315" src="{{$phim->Trailer}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<!-- end player -->

				<!-- accordion -->
				<div class="col-12 col-xl-6">
					<div class="accordion" id="accordion">
						@php $thtrOld = ""; @endphp
                        @foreach($suatchieu->unique('IDPhong') as $sc)
                        @if($thtrOld != $sc->Phong->Rap->HeThongRap->TenHeThongRap)
                            @php $thtrOld = $sc->Phong->Rap->HeThongRap->TenHeThongRap; @endphp
                            <div class="accordion__card">
                                <div class="card-header" id="headingOne">
                                    <button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        
                                        <span>{{$sc->Phong->Rap->HeThongRap->TenHeThongRap}}</span>
                                    
                                    </button>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <table class="accordion__list">
                                            <thead>
                                                <tr>
                                                    <th>Tên rạp</th>
                                                    <th>Ngày</th>
                                                    <th>Suất chiếu</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @foreach($suatchieu->unique('IDPhong') as $sc1)
                                                    @if($sc->Phong->Rap->HeThongRap->id == $sc1->Phong->Rap->IDHeThongRap)
                                                        <tr>
                                                            <th>{{$sc1->Phong->Rap->TenRap}}</th>
                                                            <td>2/11/2020, 3/11/2020</td>
                                                            <td>7:00 AM, 9:00 AM, 11:00 AM</td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

			</div>
		</div>
		<!-- end details content -->
	</section>
	<!-- end details -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Đánh giá</a>
							</li>
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Comments">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Comments</a></li>
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 col-xl-8">
					<!-- content tabs -->
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
							<div class="row">
								<!-- reviews -->
								<div class="col-12">
									<div class="reviews">
										<ul class="reviews__list">
											<li class="reviews__item">
												<div class="reviews__autor">
													<img class="reviews__avatar" src="img/user.png" alt="">
													<span class="reviews__name">Phim Marvel hay nhất theo ý kiến ​​của tôi</span>
													<span class="reviews__time">24.08.2018, 17:53 bởi John Doe</span>

													<span class="reviews__rating"><i class="icon ion-ios-star"></i>8.4</span>
												</div>
												<p class="reviews__text">Có rất nhiều biến thể của các đoạn văn của Lorem Ipsum có sẵn, nhưng phần lớn đã bị thay đổi dưới một số hình thức, bởi sự hài hước chèn ép hoặc các từ ngẫu nhiên trông thậm chí không đáng tin một chút. Nếu bạn định sử dụng một đoạn văn của Lorem Ipsum, bạn cần chắc chắn rằng không có bất kỳ điều gì đáng xấu hổ ẩn ở giữa văn bản.</p>
											</li>

											<li class="reviews__item">
												<div class="reviews__autor">
													<img class="reviews__avatar" src="img/user.png" alt="">
													<span class="reviews__name">Phim Marvel hay nhất theo ý kiến ​​của tôi</span>
													<span class="reviews__time">24.08.2018, 17:53 bởi John Doe</span>

													<span class="reviews__rating"><i class="icon ion-ios-star"></i>9.0</span>
												</div>
												<p class="reviews__text">Có rất nhiều biến thể của các đoạn văn của Lorem Ipsum có sẵn, nhưng phần lớn đã bị thay đổi dưới một số hình thức, bởi sự hài hước chèn ép hoặc các từ ngẫu nhiên trông thậm chí không đáng tin một chút. Nếu bạn định sử dụng một đoạn văn của Lorem Ipsum, bạn cần chắc chắn rằng không có bất kỳ điều gì đáng xấu hổ ẩn ở giữa văn bản.</p>
											</li>

											<li class="reviews__item">
												<div class="reviews__autor">
													<img class="reviews__avatar" src="img/user.png" alt="">
													<span class="reviews__name">Phim Marvel hay nhất theo ý kiến ​​của tôi</span>
													<span class="reviews__time">24.08.2018, 17:53 bởi John Doe</span>

													<span class="reviews__rating"><i class="icon ion-ios-star"></i>7.5</span>
												</div>
												<p class="reviews__text">Có rất nhiều biến thể của các đoạn văn của Lorem Ipsum có sẵn, nhưng phần lớn đã bị thay đổi dưới một số hình thức, bởi sự hài hước chèn ép hoặc các từ ngẫu nhiên trông thậm chí không đáng tin một chút. Nếu bạn định sử dụng một đoạn văn của Lorem Ipsum, bạn cần chắc chắn rằng không có bất kỳ điều gì đáng xấu hổ ẩn ở giữa văn bản.</p>
											</li>
										</ul>

										<form action="#" class="form">
											<input type="text" class="form__input" placeholder="Tiêu đề">
											<textarea class="form__textarea" placeholder="Nội dung"></textarea>
											<div class="form__slider">
												<div class="form__slider-rating" id="slider__rating"></div>
												<div class="form__slider-value" id="form__slider-value"></div>
											</div>
											<button type="button" class="form__btn">Gửi</button>
										</form>
									</div>
								</div>
								<!-- end reviews -->
							</div>
						</div>
					</div>
					<!-- end content tabs -->
				</div>
			</div>
		</div>
	</div>
@endsection