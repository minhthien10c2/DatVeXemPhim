@extends('Home.layouts.index')

@section('content')
    <!-- home -->
		<section class="home">
			<!-- home bg -->
			<div class="owl-carousel home__bg">
				<div class="item home__cover" data-bg="home_assett/img/home/home__bg.jpg"></div>
				<div class="item home__cover" data-bg="home_assett/img/home/home__bg2.jpg"></div>
				<div class="item home__cover" data-bg="home_assett/img/home/home__bg3.jpg"></div>
				<div class="item home__cover" data-bg="home_assett/img/home/home__bg4.jpg"></div>
			</div>
			<!-- end home bg -->
	
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="home__title"><b>Phim</b> Mới cập nhật</h1>
	
						<button class="home__nav home__nav--prev" type="button">
							<i class="icon ion-ios-arrow-round-back"></i>
						</button>
						<button class="home__nav home__nav--next" type="button">
							<i class="icon ion-ios-arrow-round-forward"></i>
						</button>
					</div>
	
					<div class="col-12">
						<div class="owl-carousel home__carousel">
						@foreach($phimlimit4 as $p)
							<div class="item">
								<!-- card -->
								<div class="card card--big">
									<div class="card__cover">
										<img src="{{ env('APP_URL') . '/storage/app/IMG/' . $p->HinhAnh }}" alt="">
										<a href="{{route('chitietphim',['id'=>$p->id])}}" class="card__play">										
											<i class="icon ion-ios-play"></i>
										</a>
									</div>
									<div class="card__content">
										<h3 class="card__title"><a href="{{route('chitietphim',['id'=>$p->id])}}">{{$p->TenPhim}}</a></h3>
										<span class="card__category">
										@foreach($p->LoaiPhim as $lp)
											<a href="">{{$lp->TenLoaiPhim}}</a>	
										@endforeach													
										</span>
										
										<span class="card__rate"><i class="icon ion-ios-star"></i>3</span>
									</div>
								</div>
								<!-- end card -->
							</div>	
							@endforeach														
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end home -->
	
		<!-- filter -->
		<div class="filter">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="filter__content">
							<h3 style="font-size:25pt; color:white; font-weight: 100;">Phim đang chiếu</h3>
								
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end filter -->
	
		<!-- catalog -->
		<div class="catalog">
			<div class="container">
				<div class="row">
				@foreach($phimall as $ph)
					<div class="col-6 col-sm-12 col-lg-6">
						<div class="card card--list">
							<div class="row">
								<div class="col-12 col-sm-4">
									<div class="card__cover">
										<img src="{{ env('APP_URL') . '/storage/app/IMG/' . $ph->HinhAnh }}" alt="">
										<a href="{{route('chitietphim',['id'=>$ph->id])}}" class="card__play">
											<i class="icon ion-ios-play"></i>
										</a>
									</div>
								</div>
								
								<div class="col-12 col-sm-8">
									<div class="card__content">
										<h3 class="card__title"><a href="{{route('chitietphim',['id'=>$ph->id])}}">{{$ph->TenPhim}}</a></h3>
										<span class="card__category">
											@foreach($ph->LoaiPhim as $lp1)
												<a href="#">{{$lp1->TenLoaiPhim}}</a>	
											@endforeach	
										</span>
	
										<div class="card__wrap">
											<span class="card__rate"><i class="icon ion-ios-star"></i>3</span>
	
											<ul class="card__list">
												<li>@foreach($ph->DinhDang as $dd) {{$dd->TenDinhDang}} @endforeach</li>
												<li>{{$ph->LuaTuoi}}+</li>
												<li>{{$ph->ThoiLuong}}p</li>
											</ul>
										</div>
	
										<div class="card__description">																								
											<p> 
												@foreach($ph->SuatChieu->unique('NgayChieu') as $sc)
																	
													Ngày: {{$sc->NgayChieu}}. </br>Giờ: 
													
														@foreach($suatchieu as $gc)
															@if($gc->IDPhim == $ph->id && $sc->NgayChieu == $gc->NgayChieu)
																{{$gc->GioBatDau}}.
																
															@endif
														@endforeach							
													</br>
												@endforeach
											</p>																						
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end card -->
					@endforeach
					
					<div style="margin:auto">
						{{$phimall->links()}}
					</div>
	
					
				</div>
			</div>
		</div>
		<!-- end catalog -->
@endsection