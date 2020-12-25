@extends('Admin.layouts.index')

@section('content')

    <!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">				
						<h3 style="float:left; display: inline;">Quản lý rạp</h3>
						<a style="float:right; display: inline;" href="addRap.jsp" class="btn btn-primary">Thêm mới</a>
					</div>		
				</div>

				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-12">
						<table class="table table-hover">
							<thead>							
							<tr>
								<th scope="col">Tên hệ thống rạp</th>
								<th scope="col">Tên rạp</th>	
								<th scope="col">Thành phố</th>
								<th scope="col">Quận huyện</th>							
								<th scope="col"></th>
							</tr>
							</thead>
							<tbody>
								<tr class="table-active">
									<th scope="row"><%=htr.getTenHeThongRap() %></th>
									<td><%=r.getTenRap() %></td>
									<td><%=tp.getTenThanhPho() %></td>
									<td><%=qh.getTenQuanHuyen() %></td>
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