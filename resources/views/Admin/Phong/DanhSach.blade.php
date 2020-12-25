@extends('Admin.layouts.index')

@section('content')

    <!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">				
						<h3 style="float:left; display: inline;">Quản lý phòng</h3>
						<a style="float:right; display: inline;" href="addPhong.jsp" class="btn btn-primary">Thêm mới</a>
					</div>		
				</div>

				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-12">
						<table class="table table-hover">
							<thead>							
							<tr>
								<th scope="col">Rạp</th>
								<th scope="col">Tên phòng</th>	
								<th scope="col">Định dạng</th>
								<th scope="col">Số ghế tối đa</th>								
								<th scope="col"></th>
							</tr>
							</thead>
							<tbody>
								<tr class="table-active">
									<td><%=r.getTenRap() %></td>
									<td><%=p.getTenPhong() %></td>
									<td><%=dd.getTenDinhDang() %></td>
									<td><%=p.getSoGheToiDa() %></td>
									<td style="width:50px"><a href="<%=editURL%>">Sửa</a></td>
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