@extends('Admin.layouts.index')

@section('content')

    <!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">				
						<h3 style="float:left; display: inline;">Quản lý phòng</h3>
						<a style="float:right; display: inline;" href="{{route('phong.them')}}" class="btn btn-primary">Thêm mới</a>
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
									<th scope="col">Hệ thống rạp</th>
									<th scope="col">Rạp</th>
									<th scope="col">Tên phòng</th>	
									<th scope="col">Định dạng</th>
									<th scope="col">Số ghế tối đa</th>								
									<th scope="col" colspan="2" class="text-center">Hành động</th>
								</tr>							
							</thead>
							<tbody>
								@php $stt=0; @endphp
								@foreach($phong as $p)
									@php $stt++; @endphp
									<tr class="table-active">
										<td>{{$stt}}</td>
										<td>{{$p->Rap->HeThongRap->TenHeThongRap}}</td>
										<td>{{$p->Rap->TenRap}}</td>										
										<td>{{$p->TenPhong}}</td>
										<td>{{$p->DinhDang->TenDinhDang}}</td>
										<td>{{$p->SoGheToiDa}}</td>
										<td  class="text-right"><a href="{{route ('phong.sua',['id'=>$p->id])}}">Sửa</a></td>
										<td class="text-left"><a onclick="return confirm('Bạn có muốn xóa?');" href="{{route ('phong.xoa',['id'=>$p->id])}}">Xóa</a></td>
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