@extends('Home.layouts.index')

@section('content')
    <!-- page title -->
	<section class="section section--first section--bg" data-bg="home_assett/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Phản hồi</h2>
                        <a href="{{route('phanhoi.them')}}" class="feedback__add">Đăng phản hồi</a>
						<!-- end section title -->				
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->	

	<!-- feedback -->
	<section class="section">
    
		<div class="container" style="display:flex;">

                @foreach($phanhoi as $key=>$ph)
                    @if($key == 0 || $key == round(count($phanhoi)/2))
				 		<div class="col-12 col-md-6">	
				 	@endif
							<div class="feedback">
								<div class="feedback__user">
									<h3 class="feedback__user-name">{{$ph->User->name}}</h3>
								</div>
								<h3 class="feedback__title">{{$ph->TieuDe}}</h3>
								<p class="feedback__text">
									{{$ph->ChiTiet}}
								</p>
							</div>

                    @if($key == (round(count($phanhoi)/2)-1) || $key == count($phanhoi))
				 		</div>	
				 	@endif
			 			
				@endforeach			
		
			</div>
		</div>
	</section>
	<!-- end feedback -->
@endsection