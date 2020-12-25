@extends('Admin.layouts.index')

@section('content')

   <!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">				
						<h3 style="float:left; display: inline;">Quản lý vé</h3>
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

								<tr class="table-active">
									<td> <%= nd.getHoTen() %> </td>
									<td> <%= htr.getTenHeThongRap() %> </td>
									<td> <%= r.getTenRap() %> </td>
									<td> <%= phong.getTenPhong() %> </td>
									<td> <%= dd.getTenDinhDang() %> </td>
									<td> <%= p.getTenPhim() %> </td>
									<td> <%= sc.getNgayChieu() %> </td>
									<td> <%= sc.getGioBatDau() %> </td>
									<td> <%= sc.getGiaVe() %> </td>	
									<td> <%= ghe.getTenGhe() %> </td>																									
								</tr>			  
							</tbody>
					  	</table>
					</div>
					<div class="col-md-1"></div>				
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->

@endsection