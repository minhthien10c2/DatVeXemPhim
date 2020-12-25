@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="panel-content">			
							<form action="{{ route ('phim.them') }}" method="post">
								@csrf
								<div class="section-heading">
									<h1 class="page-title">Thêm phim</h1>
								</div>
								<div class="form-group">
									<label>Tên phim</label>
									<input type="text" name="TenPhim" class="form-control" required>
								</div>
								
								<div class="form-group">
								<label class="control-label">Định dạng</label>
								<select name="DinhDang" class="form-control">
								
									<option value="1">1</option>
								
								</select>
								</div>

								<div class="form-group">
									<label>Loại phim</label>
									<br>
									<select id="multiselect4-filter" name="LoaiPhim" class="multiselect multiselect-custom form-control" multiple="multiple">
										
										<option value="1">1</option>
									
									</select>
								</div>

								<div class="form-group">
									<label for="text-input3">Thời lượng</label>
									<input type="text" name="ThoiLuong" id="text-input3" class="form-control" required>
								</div>

								<div class="form-group">
									<label>Trailer link</label>
									<input type="text" name="Trailer" class="form-control" required>
								</div>

								<div class="form-group">
									<label>Lứa tuổi</label>
									<input type="text" name="LuaTuoi" class="form-control" required>
								</div>

								<div class="form-group">
									<label>Mô tả</label>
									<textarea class="form-control" name="MoTa" rows="5" cols="30" required></textarea>
								</div>

								<div class="form-group">
									<label for="exampleInputFile" class="control-label">Hình ảnh</label>
									<input type="file" name="HinhAnh" id="exampleInputFile">
								</div>

								<div class="form-group">
									<label>Năm sản xuất</label>
									<input type="text" name="NamSanXuat" class="form-control" required>
								</div>
						
								<button type="submit" class="btn btn-primary">Thêm phim</button>
							</form>
						</div>
						<div class="col-md-3"></div>
					</div>					
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
@endsection