@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="panel-content">			
							<form action="{{ route ('phim.them') }}" method="post" enctype="multipart/form-data">
								@csrf
								<div class="section-heading">
									<h1 class="page-title">Thêm phim</h1>
								</div>
								<div class="form-group">
									<label>Tên phim</label>
									<input type="text" name="tenphim" class="form-control" required>
								</div>
								
								<div class="form-group">
									<label class="control-label">Định dạng</label>
									<br>
									<select id="multiselect1" name="dinhdang[]" class="multiselect multiselect-custom form-control" multiple="multiple">
										@foreach($dinhdang as $dd)
											<option value="{{$dd->id}}">{{$dd->TenDinhDang}}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group">
									<label class="control-label">Loại phim</label>
									<br>
									<select id="multiselect2" name="loaiphim[]" class="multiselect multiselect-custom form-control" multiple="multiple">
										
										@foreach($loaiphim as $lp)
											<option value="{{$lp->id}}">{{$lp->TenLoaiPhim}}</option>
										@endforeach
									
									</select>
								</div>

								<div class="form-group">
									<label for="text-input3">Thời lượng</label>
									<input type="text" name="thoiluong" id="text-input3" class="form-control" required>
								</div>

								<div class="form-group">
									<label>Trailer link</label>
									<input type="text" name="trailer" class="form-control" required>
								</div>

								<div class="form-group">
									<label>Lứa tuổi</label>
									<input type="text" name="luatuoi" class="form-control" required>
								</div>

								<div class="form-group">
									<label>Mô tả</label>
									<textarea class="form-control" name="mota" rows="5" cols="30" required></textarea>
								</div>

								<div class="form-group">
									<label for="exampleInputFile" class="control-label">Hình ảnh</label>
									<input type="file" name="hinhanh" id="exampleInputFile">
								</div>

								<div class="form-group">
									<label>Năm sản xuất</label>
									<input type="text" name="namsanxuat" class="form-control" required>
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