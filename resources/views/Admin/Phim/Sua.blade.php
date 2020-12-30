@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="panel-content">			
					<form action="{{route('phim.sua',['id'=>$phim->id])}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="section-heading">
							<h1 class="page-title">Sửa phim</h1>
						</div>
						<div class="form-group">
							<label>Tên phim</label>
							<input type="text" name="tenphim" value="{{$phim->TenPhim}}" class="form-control @error('tenphim') is-invalid @enderror" required>
							@error('tenphim')
								<div class="text-danger"><strong>{{ $message }}</strong></div>
							@enderror
						</div>
						
						<div class="form-group">
							<label class="control-label">Định dạng</label>
							<br>
							<select id="multiselect1" name="dinhdang[]" class="multiselect multiselect-custom form-control @error('dinhdang') is-invalid @enderror" multiple="multiple">

								@foreach($dinhdang as $key=>$dd)
									
									@if(($key < count($dinhdangphim)) && ($dinhdangphim[$key]->IDDinhDang == $dd->id))
										<option value="{{$dd->id}}" selected>{{$dd->TenDinhDang}}</option>
									@else
										<option value="{{$dd->id}}">{{$dd->TenDinhDang}}</option>
									@endif
									
								@endforeach

							</select>

							@error('dinhdang[]')
								<div class="text-danger"><strong>{{ $message }}</strong></div>
							@enderror
						</div>

						<div class="form-group">
							<label class="control-label">Loại phim</label>
							<br>
							<select id="multiselect2" name="loaiphim[]" class="multiselect multiselect-custom form-control @error('loaiphim') is-invalid @enderror" multiple="multiple">
																																					
								@foreach($loaiphim as $key=>$lp)
										
										@if(($key < count($loaiphimphim)) && ($loaiphimphim[$key]->IDLoaiPhim == $lp->id))
											<option value="{{$lp->id}}" selected>{{$lp->TenLoaiPhim}}</option>
										@else
											<option value="{{$lp->id}}">{{$lp->TenLoaiPhim}}</option>
										@endif
										
								@endforeach
																	
							</select>

							@error('loaiphim[]')
								<div class="text-danger"><strong>{{ $message }}</strong></div>
							@enderror
						</div>

						<div class="form-group">
							<label for="text-input3">Thời lượng</label>
							<input type="text" name="thoiluong" value="{{$phim->ThoiLuong}}" id="text-input3" class="form-control @error('thoiluong') is-invalid @enderror" required>
						
							@error('thoiluong')
								<div class="text-danger"><strong>{{ $message }}</strong></div>
							@enderror
						</div>

						<div class="form-group">
							<label>Trailer link</label>
							<input type="text" name="trailer" value="{{$phim->Trailer}}" class="form-control @error('trailer') is-invalid @enderror" required>
							@error('trailer')
								<div class="text-danger"><strong>{{ $message }}</strong></div>
							@enderror
						</div>

						<div class="form-group">
							<label>Lứa tuổi</label>
							<input type="text" name="luatuoi" value="{{$phim->LuaTuoi}}" class="form-control @error('luatuoi') is-invalid @enderror" required>
							@error('luatuoi')
								<div class="text-danger"><strong>{{ $message }}</strong></div>
							@enderror
						</div>

						<div class="form-group">
							<label>Mô tả</label>
							<textarea class="form-control @error('mota') is-invalid @enderror" name="mota" rows="5" cols="30" required>{{$phim->MoTa}}</textarea>
							@error('mota')
								<div class="text-danger"><strong>{{ $message }}</strong></div>
							@enderror
						</div>

						<div class="form-group">
							<label for="exampleInputFile" class="control-label">Hình ảnh</label>
							<input type="file" name="hinhanh" id="exampleInputFile" class="@error('hinhanh') is-invalid @enderror">
							@if(!empty($phim->HinhAnh))
								<img style="display:block;margin-top:10px;width: 100px;" src="{{ env('APP_URL') . '/storage/app/IMG/' . $phim->HinhAnh }}" />
								<span class="d-block small text-danger">Bỏ trống nếu muốn giữ nguyên ảnh cũ</span>
							@endif
							@error('hinhanh')
								<div class="text-danger"><strong>{{ $message }}</strong></div>
							@enderror
						</div>

						<div class="form-group">
							<label>Năm sản xuất</label>
							<input type="text" name="namsanxuat" value="{{$phim->NamSanXuat}}" class="form-control @error('namsanxuat') is-invalid @enderror" required>
							@error('namsanxuat')
								<div class="text-danger"><strong>{{ $message }}</strong></div>
							@enderror
						</div>
				
						<button type="submit" class="btn btn-primary">Sửa phim</button>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>					
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
@endsection