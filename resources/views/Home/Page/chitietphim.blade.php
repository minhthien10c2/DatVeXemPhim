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
                                        {{$phim->MoTa}}
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
						@if(Auth::user() != null)
							<!-- section title -->
							<a href="{{route('datve',['id'=>$phim->id])}}" class="details_book__ticket__btn">Đặt vé ngay</a>
							<!-- end section title -->		
						@else
							<a href="{{route('dangnhap')}}" style="color:white; float:right;">Đăng nhập để đặt vé</a>
						@endif
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
						
                        @foreach($hethongrapbysuatchieu as $htrbsc)
                        
                            <div class="accordion__card">
                                <div class="card-header" id="headingOne">
                                    <button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        
                                        <span>{{$htrbsc->TenHeThongRap}}</span>
                                    
                                    </button>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <table class="accordion__list">
                                            <thead>
                                                <tr>
                                                    <th>Tên rạp</th>
                                                    <th>Ngày</th>
                                                   
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @foreach($rapbysuatchieuandhtr as $rbscahtr)
                                                    @if($rbscahtr->IDHeThongRap == $htrbsc->id)
                                                       
													    <tr>
                                                            <th>{{$rbscahtr->TenRap}}</th>

                                                            <td>
																
																@foreach($ngaychieuwithrbysuatchieu as $nc)
																	@if($nc->id == $rbscahtr->id)
																			{{$nc->NgayChieu}}:
																			@foreach($giochieuwithrbysuatchieu as $gc)
																				@if($gc->id == $rbscahtr->id && $nc->NgayChieu == $gc->NgayChieu)
																					{{$gc->GioBatDau}}
																				@endif
																			@endforeach
																		<br>
																		<hr>
																	@endif	
																@endforeach
																
															</td>
                                                            
                                                        </tr>

                                                    @endif
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        
                    @endforeach

			</div>
		</div>
		<!-- end details content -->
	</section>
	<!-- end details -->

	
</div>
</div>
</div>
</div>
@endsection