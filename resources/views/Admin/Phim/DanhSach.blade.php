@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">				
						<h3 style="float:left; display: inline;">Quản lý phim</h3>
						<a style="float:right; display: inline;" href="{{ route ('phim.them') }}" class="btn btn-primary">Thêm mới</a>
					</div>		
				</div>

				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-12">
						<table class="table table-hover">
							<thead>							
							<tr>
								<th scope="col">Tên phim</th>
								<th scope="col">Thời lượng</th>
								<th scope="col">Trailer</th>
								<th scope="col">Lứa tuổi</th>
								<th scope="col">Mô tả</th>
								<th scope="col">Hình ảnh</th>
								<th scope="col">Năm sản xuất</th>
								<th scope="col"></th>
							</tr>
							</thead>
							<tbody>

								<tr class="table-active">
									<th  scope="row"></th>
									<td ></td>
									<td ></td>
									<td ></td>
									<td style="width:300px"></td>
									<td style="width:100px"><img style="width:100px"  src=""></td>
									<td ><></td>
									<td style="width:50px"><a href="">Sửa</a></td>
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