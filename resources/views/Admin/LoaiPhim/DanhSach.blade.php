@extends('Admin.layouts.index')

@section('content')

    <!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">				
						<h3 style="float:left; display: inline;">Quản lý loại phim</h3>
						<a style="float:right; display: inline;" href="{{route('loaiphim.them')}}" class="btn btn-primary">Thêm mới</a>
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
								<th scope="col">Tên loại phim</th>							
								<th scope="col" colspan=2 class="text-center">Hành động</th>
							</tr>
							</thead>
							<tbody>
							@php $stt=0; @endphp
							@foreach($loaiphim as $lp)
								@php $stt++; @endphp
								<tr class="table-active">
									<td>{{ $stt }}</td>
									<td>{{ $lp->TenLoaiPhim }}</td>
									<td  class="text-right"><a href="{{route ('loaiphim.sua',['id'=>$lp->id])}}">Sửa</a></td>
									<td  class="text-left"><a onclick="return confirm('Bạn có muốn xóa?');" href="{{route ('loaiphim.xoa',['id'=>$lp->id])}}">Xóa</a></td>
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