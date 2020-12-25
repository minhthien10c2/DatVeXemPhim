@extends('Admin.layouts.index')

@section('content')

    <!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">				
						<h3 style="float:left; display: inline;">Quản lý người dùng</h3>
					</div>		
				</div>

				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-12">
						<table class="table table-hover">
							<thead>							
							<tr>
								<th scope="col">Tên người dùng</th>
								<th scope="col">Số điện thoại</th>	
								<th scope="col">Địa chỉ</th>		
								<th scope="col">Email</th>						
								<th scope="col"></th>
							</tr>
							</thead>
							<tbody>
								<tr class="table-active">
									<th scope="row"><%=nd.getHoTen() %></th>
									<td><%=nd.getSDT() %></td>
									<td><%=nd.getDiaChi() %></td>
									<td><%=nd.getEmail() %></td>
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