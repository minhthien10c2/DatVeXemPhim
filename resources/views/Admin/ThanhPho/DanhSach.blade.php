@extends('Admin.layouts.index')

@section('content')

    <!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">				
						<h3 style="float:left; display: inline;">Quản lý thành phố</h3>
						<a style="float:right; display: inline;" href="addThanhPho.jsp" class="btn btn-primary">Thêm mới</a>
					</div>		
				</div>

				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-12">
						<table class="table table-hover">
							<thead>							
							<tr>
								<th scope="col">Tên thành phố</th>	
								<th scope="col"></th>
							</tr>
							</thead>
							<tbody>
								<tr class="table-active">
									<th scope="row"><%=tp.getTenThanhPho() %></th>
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