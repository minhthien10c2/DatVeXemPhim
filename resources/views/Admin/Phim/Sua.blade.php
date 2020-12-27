@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="panel-content">			
					<form action="{{route('phim.sua',['id'=>$phim->id])}}" method="post">
						@csrf
						<div class="section-heading">
							<h1 class="page-title">Sửa phim</h1>
						</div>
						<div class="form-group">
							<label>Tên phim</label>
							<input type="text" name="tenphim" value="{{$phim->TenPhim}}" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label class="control-label">Định dạng</label>
							<br>
							<select id="multiselect1" name="dinhdang" class="multiselect multiselect-custom form-control" multiple="multiple">

								@foreach($dinhdang as $dd)
									
									@if(($loop->index < count($dinhdangphim)) && ($dinhdangphim[$loop->index]->IDDinhDang == $dd->id))
										<option value="{{$dd->id}}" selected>{{$dd->TenDinhDang}}</option>
									@else
										<option value="{{$dd->id}}">{{$dd->TenDinhDang}}</option>
									@endif
									
								@endforeach

							</select>
						</div>

						<div class="form-group">
							<label class="control-label">Loại phim</label>
							<br>
							<select id="multiselect2" name="loaiphim" class="multiselect multiselect-custom form-control" multiple="multiple">
								
								@foreach($loaiphim as $lp)
									
									@if(($loop->index < count($loaiphimphim)) && ($loaiphimphim[$loop->index]->IDLoaiPhim == $lp->id))
										<option value="{{$lp->id}}" selected>{{$lp->TenLoaiPhim}}</option>
									@else
										<option value="{{$lp->id}}">{{$lp->TenLoaiPhim}}</option>
									@endif
									
								@endforeach
							
							</select>
						</div>

						<div class="form-group">
							<label for="text-input3">Thời lượng</label>
							<input type="text" name="thoiluong" value="{{$phim->ThoiLuong}}" id="text-input3" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Trailer link</label>
							<input type="text" name="trailer" value="{{$phim->Trailer}}" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Lứa tuổi</label>
							<input type="text" name="luatuoi" value="{{$phim->LuaTuoi}}" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Mô tả</label>
							<textarea class="form-control" name="mota" rows="5" cols="30" required>{{$phim->MoTa}}</textarea>
						</div>

						<div class="form-group">
							<label for="exampleInputFile" class="control-label">Hình ảnh</label>
							<input type="file" name="hinhanh" value="{{$phim->HinhAnh}}" id="exampleInputFile">
						</div>

						<div class="form-group">
							<label>Năm sản xuất</label>
							<input type="text" name="namsanxuat" value="{{$phim->NamSanXuat}}" class="form-control" required>
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