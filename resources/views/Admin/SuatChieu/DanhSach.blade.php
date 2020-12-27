@extends('Admin.layouts.index')

@section('content')

    <!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">				
						<h3 style="float:left; display: inline;">Quản lý suất chiếu</h3>
						<a style="float:right; display: inline;" href="{{route('suatchieu.them')}}" class="btn btn-primary">Thêm mới</a>
					</div>		
				</div>

				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-12">
						<table class="table table-hover">
							<caption>
								@if(Session('mes'))
								<div class="alert alert-success alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong>{{Session('mes')}}</strong>
								</div>
								@endif
							</caption>
							<thead>							
								<tr>
									<th scope="col">STT</th>	
									<th scope="col">Tên hệ thống rạp</th>	
									<th scope="col">Tên rạp</th>
									<th scope="col">Tên phòng</th>
									<th scope="col">Định dạng</th>
									<th scope="col">Phim</th>						
									<th scope="col">Ngày chiếu</th>
									<th scope="col">Giờ chiếu</th>
									<th scope="col">Giá vé</th>
									<th scope="col" colspan="2" class="text-center">Hành động</th>						
								</tr>
							</thead>
							<tbody>
								@php $stt=0; @endphp
								@foreach($suatchieu as $sc)
									@php $stt++; @endphp
									<tr class="table-active">
										<td>{{$stt}}</td>
										<td>{{$sc->Phong->Rap->HeThongRap->TenHeThongRap}}</td>
										<td>{{$sc->Phong->Rap->TenRap}}</td>
										<td>{{$sc->Phong->TenPhong}}</td>
										<td>{{$sc->Phong->DinhDang->TenDinhDang}}</td>
										<td>{{$sc->Phim->TenPhim}}</td>
										<td>{{$sc->NgayChieu}}</td>
										<td>{{$sc->GioBatDau}}</td>
										<td>{{$sc->GiaVe}}</td>									
										<td  class="text-right"><a href="{{route ('suatchieu.sua',['id'=>$sc->id])}}">Sửa</a></td>
										<td class="text-left"><a onclick="return confirm('Bạn có muốn xóa?');" href="{{route ('suatchieu.xoa',['id'=>$sc->id])}}">Xóa</a></td>
									</tr>	
								@endforeach
							</tbody>
					  	</table>
					</div>
					<div class="col-md-1"></div>				
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->

@endsection