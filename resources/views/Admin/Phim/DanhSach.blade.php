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
								<th scope="col">Tên phim</th>
								<th scope="col">Thời lượng</th>
								<th scope="col">Trailer</th>
								<th scope="col">Lứa tuổi</th>
								<th scope="col">Mô tả</th>
								<th scope="col">Hình ảnh</th>
								<th scope="col">Năm sản xuất</th>
								<th scope="col" colspan="2" class="text-center">Hành động</th>
							</tr>
							</thead>
							<tbody>
							@php $stt=0; @endphp
							@foreach($phim as $p)
								@php $stt++; @endphp
								<tr class="table-active">
									<td>{{$stt}}</td>
									<td>{{$p->TenPhim}}</td>
									<td>{{$p->ThoiLuong}}</td>
									<td>{{$p->Trailer}}</td>
									<td>{{$p->LuaTuoi}}</td>
									<td style="width:300px">{{$p->MoTa}}</td>
									<td style="width:100px"><img style="width:100px" src="{{$p->HinhAnh}}"></td>
									<td>{{$p->NamSanXuat}}</td>
									<td  class="text-right"><a href="{{route ('phim.sua',['id'=>$p->id])}}">Sửa</a></td>
									<td  class="text-left"><a onclick="return confirm('Bạn có muốn xóa?');" href="{{route ('phim.xoa',['id'=>$p->id])}}">Xóa</a></td>
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