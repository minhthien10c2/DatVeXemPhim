@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">				
						<h3 style="float:left; display: inline;">Quản lý khuyến mãi</h3>
						<a style="float:right; display: inline;" href="addKhuyenMai.jsp" class="btn btn-primary">Thêm mới</a>
					</div>		
				</div>

				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-12">
						<table class="table table-hover">
							<thead>							
							<tr>
								<th scope="col">Tiêu đề</th>	
								<th scope="col">Hình ảnh</th>	
								<th scope="col">Chi tiết</th>
								<th scope="col"></th>
							</tr>
							</thead>
							<tbody>
								<tr class="table-active">
									<th scope="row"><%=km.getTieuDe() %></th>
									<td><img style="width:200px"; alt="" src="<%= km.getHinhAnh() %>"></td>
									<td><%= km.getChiTiet() %></td>
									<td style="width:50px"><a href="<%=editURL%>">Sửa</a>  <a class="deletekm" href="<%=deleteURL%>" onclick="return confirm('Bạn có muốn xóa?')" style="color:red;">Xóa</a></td>
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