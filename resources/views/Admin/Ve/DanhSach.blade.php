@extends('Admin.layouts.index')

@section('content')

   <!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">				
						<h3 style="display: inline;" class="text-left">Quản lý vé</h3>
					</div>		
				</div>

				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-12">
						<table class="table table-hover">
							<thead>							
							<tr>
								<th scope="col">Tên người dùng</th>
								<th scope="col">Tên hệ thống rạp</th>	
								<th scope="col">Tên rạp</th>
								<th scope="col">Tên phòng</th>
								<th scope="col">Định dạng</th>
								<th scope="col">Phim</th>						
								<th scope="col">Ngày chiếu</th>
								<th scope="col">Giờ chiếu</th>
								<th scope="col">Giá vé</th>
								<th scope="col">Số ghế</th>
							</tr>
							</thead>
							<tbody>
								@foreach ($ve as $v) 
								<tr>
									<td> {{$v->User->name }}</td>
									<td> {{$v->SuatChieu->Phong->Rap->HeThongRap->TenHeThongRap}}</td>
									<td> {{$v->SuatChieu->Phong->Rap->TenRap}}</td>
									<td> {{$v->SuatChieu->Phong->TenPhong}} </td>
									<td> {{$v->SuatChieu->Phong->DinhDang->TenDinhDang}} </td>
									<td> {{$v->SuatChieu->Phim->TenPhim}} </td>
									<td> {{$v->SuatChieu->NgayChieu}} </td>
									<td> {{$v->SuatChieu->GioBatDau}} </td>
									<td> {{$v->SuatChieu->GiaVe}} </td>	
									<td> {{$v->Ghe->LoaiGhe}}</td>																									
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