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
									<input type="text" name="tenphim" value="{{ old('tenphim') }}"  class="form-control @error('tenphim') is-invalid @enderror">
									@error('tenphim')
										<div class="text-danger"><strong>{{ $message }}</strong></div>
									@enderror
								</div>
								
								<div class="form-group">
									<label class="control-label">Định dạng</label>
									<br>
									<select id="multiselect1" name="dinhdang[]" class="multiselect multiselect-custom form-control @error('dinhdang') is-invalid @enderror" multiple="multiple">
										@foreach($dinhdang as $dd)
											<option value="{{$dd->id}}">{{$dd->TenDinhDang}}</option>
										@endforeach
									</select>
									@error('dinhdang')
										<div class="text-danger"><strong>{{ $message }}</strong></div>
									@enderror
								</div>

								<div class="form-group">
									<label class="control-label">Loại phim</label>
									<br>
									<select id="multiselect2" name="loaiphim[]" class="multiselect multiselect-custom form-control @error('loaiphim') is-invalid @enderror" multiple="multiple">
										
										@foreach($loaiphim as $lp)
											<option value="{{$lp->id}}">{{$lp->TenLoaiPhim}}</option>
										@endforeach
									
									</select>

									@error('loaiphim')
										<div class="text-danger"><strong>{{ $message }}</strong></div>
									@enderror
								</div>

								<div class="form-group">
									<label for="text-input3">Thời lượng</label>
									<input type="text" name="thoiluong" value="{{ old('thoiluong') }}"  id="text-input3" class="form-control @error('thoiluong') is-invalid @enderror">
									@error('thoiluong')
										<div class="text-danger"><strong>{{ $message }}</strong></div>
									@enderror
								</div>

								<div class="form-group">
									<label>Trailer link</label>
									<input type="text" name="trailer" value="{{ old('trailer') }}" class="form-control @error('trailer') is-invalid @enderror">
									@error('trailer')
										<div class="text-danger"><strong>{{ $message }}</strong></div>
									@enderror
								</div>

								<div class="form-group">
									<label>Lứa tuổi</label>
									<input type="text" name="luatuoi" value="{{ old('luatuoi') }}" class="form-control @error('luatuoi') is-invalid @enderror">
									@error('luatuoi')
										<div class="text-danger"><strong>{{ $message }}</strong></div>
									@enderror
								</div>

								<div class="form-group">
									<label>Mô tả</label>
									<textarea class="form-control @error('mota') is-invalid @enderror" value="{{ old('mota') }}" name="mota" rows="5" cols="30"></textarea>
									@error('mota')
										<div class="text-danger"><strong>{{ $message }}</strong></div>
									@enderror
								</div>

								<div class="form-group">
									<label for="exampleInputFile" class="control-label">Hình ảnh</label>
									<input type="file" name="hinhanh" value="{{ old('hinhanh') }}" id="exampleInputFile" class="@error('hinhanh') is-invalid @enderror">
									@error('hinhanh')
										<div class="text-danger"><strong>{{ $message }}</strong></div>
									@enderror
								</div>

								<div class="form-group">
									<label>Năm sản xuất</label>
									<input type="text" name="namsanxuat" value="{{ old('namsanxuat') }}" class="form-control @error('namsanxuat') is-invalid @enderror">
									@error('namsanxuat')
										<div class="text-danger"><strong>{{ $message }}</strong></div>
									@enderror
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