@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">				
						<h3 style="float:left; display: inline;">Quản lý khuyến mãi</h3>
						<a style="float:right; display: inline;" href="{{route ('khuyenmai.them')}}" class="btn btn-primary">Thêm mới</a>
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
								<th scope="col">Tiêu đề</th>	
								<th scope="col">Hình ảnh</th>	
								<th scope="col">Chi tiết</th>
								<th scope="col" colspan=2 class="text-center">Hành động</th>
							</tr>
							</thead>
							<tbody>
							@php $stt=0; @endphp
							@foreach($khuyenmai as $km)
								@php $stt++; @endphp
								<tr class="table-active">
									<tr>{{$stt}}</tr>
									<tr>{{$km->TieuDe}}</tr>
									<td><img style="width:200px"; alt="" src="{{$km->HinhAnh}}"></td>
									<td>{{$km->ChiTiet}}</td>
									<td  class="text-right"><a href="{{route ('khuyenmai.sua',['id'=>$km->id])}}">Sửa</a></td>
									<td  class="text-left"><a onclick="return confirm('Bạn có muốn xóa?');" href="{{route ('khuyenmai.xoa',['id'=>$km->id])}}">Xóa</a></td>
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