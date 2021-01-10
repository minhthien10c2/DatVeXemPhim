@extends('Home.layouts.index')

@section('content')
<!-- page title -->
<section class="section section--first section--bg" data-bg="home_assett/img/section/section.jpg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section__wrap">
					<!-- section title -->
					<h2 class="section__title">Đặt vé > {{$phim->TenPhim}}</h2>
					<!-- end section title -->
				</div>
			</div>
		</div>
	</div>
</section>
	<!-- end page title -->

<!-- book__ticket -->
<div class="book__ticket">
		<div class="container">
			<div class="row">
				<div class="col-12">
				<form action="{{ route ('ve.them') }}" method="post">
					<div class="book__ticket__content">
						<div class="book__ticket__items">
							<input type="hidden" name ="idnguoidung" value="{{Auth::User()->id}}">
							<input type="hidden" name="idphim" id="idphim" value="{{$phim->id}}">
							<input type="hidden" id="tenphim" value="{{$phim->TenPhim}}">
							<input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
							<!-- book__ticket item -->
							<div class="book__ticket__item" id="book__ticket__quality">
								<span class="book__ticket__item-label">Hệ Thống Rạp</span>
								<select name="hethongrap" id="HeThongRap" style="background-color:transparent; border:none; color:#ff5563; font-weight: 500;">
									<option value="-1">Chọn hệ thống rạp</option>
									@foreach($hethongrapbysuatchieu as $htr)
										<option value="{{$htr->id}}">{{$htr->TenHeThongRap}}</option>
									@endforeach	
								</select>
							</div>
							<!-- end book__ticket item -->

							<!-- book__ticket item -->
							<div class="book__ticket__item" id="book__ticket__quality">
								<span class="book__ticket__item-label">Hệ Thống Rạp</span>
								<select name="rap" id="Rap" style="background-color:transparent; border:none; color:#ff5563; font-weight: 500;">
									<option value="-1">Chọn rạp</option>
								</select>
							</div>
							<!-- end book__ticket item -->

							<!-- book__ticket item -->
							<div class="book__ticket__item" id="book__ticket__quality">
								<span class="book__ticket__item-label">Ngày chiếu</span>
								<select name="ngaychieu" id="NgayChieu" style="background-color:transparent; border:none; color:#ff5563; font-weight: 500;">
									<option value="-1">Chọn ngày chiếu</option>
								</select>
							</div>
							<!-- end book__ticket item -->

							<!-- book__ticket item -->
							<div class="book__ticket__item" id="book__ticket__quality">
								<span class="book__ticket__item-label">Suất chiếu</span>
								<select name="suatchieu" id="SuatChieu" style="background-color:transparent; border:none; color:#ff5563; font-weight: 500;">
									<option value="-1">Chọn suất chiếu</option>
								</select>
							</div>
							<!-- end book__ticket item -->	

							<!-- book__ticket item -->
							<div class="book__ticket__item" id="book__ticket__quality">
								<span class="book__ticket__item-label">Định dạng</span>
								<select name="phong" id="Phong" style="background-color:transparent; border:none; color:#ff5563; font-weight: 500;">
									<option value="-1">Chọn định dạng</option>
								</select>
							</div>
							<!-- end book__ticket item -->						
						</div>						
					</div>

					
					
					<table class="seats__list">
						<thead class="seats__list--number">
								
						</thead>
						<tbody class= "seats__list--letter">
								
						</tbody>			
					</table>

					<!-- screen -->
					<div class="screen">
						<h3 class="wthree">Màn hình ở đây</h3>
					</div>
					<!-- end screen -->

					<!-- book__ticket btn -->
					<button class="book__ticket__btn" onclick="xacnhan();" type="submit">Đặt vé ngay</button>
					<!-- end book__ticket btn -->	
				</form>	
				</div>				
			</div>
				
		</div>
	</div>
	<!-- end book__ticket -->

@endsection

@section('script')
<script>
    $(document).ready(function (){

        $('#HeThongRap').on('change',function () {	
            $('#Rap').find('option').remove();
            $('#Rap').append('<option value = "-1">Chọn rạp</option>'); 
			$('#NgayChieu').find('option').remove();
            $('#NgayChieu').append('<option value = "-1">Chọn ngày chiếu</option>'); 
			$('#SuatChieu').find('option').remove();
            $('#SuatChieu').append('<option value = "-1">Chọn suất chiếu</option>'); 
			$('#Phong').find('option').remove();
            $('#Phong').append('<option value = "-1">Chọn định dạng</option>'); 

			$('.seats__list--number').find('th').remove();
			$('.seats__list--letter').find('tr').remove();

            var mahtr = $(this).val(); 
			var idphim = $('#idphim').val(); 
			var token = $('#token').val();
			
           $.ajax({
                url: ('ajaxgetrapbyhtrsc'),
                method: 'get',
                data: {mahtr:mahtr, idphim:idphim, token:token},
                success: function(data){
                    console.log(data);
                    $('#Rap').append(data);
                }
           });
        });

		$('#Rap').on('change',function () {
            $('#NgayChieu').find('option').remove();
            $('#NgayChieu').append('<option value = "-1">Chọn ngày chiếu</option>'); 
			$('#SuatChieu').find('option').remove();
            $('#SuatChieu').append('<option value = "-1">Chọn suất chiếu</option>'); 
			$('#Phong').find('option').remove();
            $('#Phong').append('<option value = "-1">Chọn định dạng</option>'); 

			$('.seats__list--number').find('th').remove();
			$('.seats__list--letter').find('tr').remove();

            var mar = $(this).val(); 
			var idphim = $('#idphim').val(); 
			var token = $('#token').val();
			
           $.ajax({
                url: ('ajaxgetncbyrandphim'),
                method: 'get',
                data: {mar:mar, idphim:idphim, token:token},
                success: function(data){
                    console.log(data);
                    $('#NgayChieu').append(data);
                }
           });
        });

		$('#NgayChieu').on('change',function () {
			$('#SuatChieu').find('option').remove();
            $('#SuatChieu').append('<option value = "-1">Chọn suất chiếu</option>'); 
			$('#Phong').find('option').remove();
            $('#Phong').append('<option value = "-1">Chọn định dạng</option>'); 

			$('.seats__list--number').find('th').remove();
			$('.seats__list--letter').find('tr').remove();

			var ngaychieu = $(this).val();
            var mar = $('#Rap').val(); 
			var idphim = $('#idphim').val(); 
			var token = $('#token').val();
			
           $.ajax({
                url: ('ajaxgetgcbyrandphim'),
                method: 'get',
                data: {ngaychieu:ngaychieu,mar:mar, idphim:idphim, token:token},
                success: function(data){
                    console.log(data);
                    $('#SuatChieu').append(data);
                }
           });
        });

		$('#SuatChieu').on('change',function () {
			$('#Phong').find('option').remove();
            $('#Phong').append('<option value = "-1">Chọn định dạng</option>'); 

			$('.seats__list--number').find('th').remove();
			$('.seats__list--letter').find('tr').remove();

			var mar = $('#DinhDang').val();
			var ngaychieu = $('#NgayChieu').val();
			var idphim = $('#idphim').val();
			var giochieu = $(this).val();
			var token = $('#token').val();	
			
			$.ajax({
				url: "ajaxgetsuatchieu",
				method: "GET",
				data: {				                    	
					mar: mar,
					ngaychieu: ngaychieu,
					idphim: idphim,
					giochieu: giochieu,
					token: token,
				},
                success: function(data){
                    console.log(data);
                    $('#Phong').append(data);
                }
           });
        });

		$('#Phong').on('change', function () {				               
			$('.seats__list--number').find('th').remove();
			$('.seats__list--letter').find('tr').remove();

			var maphong = $(this).val();
			var token = $('#token').val();

			$.ajax({
				url: "ajaxgetghe",
				method: "GET",
				dataType:"json",
				data: {				                    	
					maphong: maphong,
					token: token,
				},
				success: function (data) {
					console.log(data);
					$.each(data, function (key, value) {
						console.log(value);
						if(key == 0)
							$('.seats__list--number').append('<th></th>')
							
						if(key > 0 && key <= 10)
						{
							$('.seats__list--number').append('<th>'+ (key) +'</th>')
						}
						
						switch(key)
						{
							case 0:
								$('.seats__list--letter').append('<tr class="A"><td>A</td></tr>')
								break;
							case 10:
								$('.seats__list--letter').append('<tr class="B"><td>B</td></tr>')
								break;
							case 20:
								$('.seats__list--letter').append('<tr class="C"><td>C</td></tr>')
								break;	
							case 30:
								$('.seats__list--letter').append('<tr class="D"><td>D</td></tr>')
								break;	
							case 40:
								$('.seats__list--letter').append('<tr class="E"><td>E</td></tr>')
								break;	
							case 50:
								$('.seats__list--letter').append('<tr class="F"><td>F</td></tr>')
								break;	
						}
						
						if(key < 10)
						{
							if(data[key].TinhTrang == 0)
								$('.A').append('<td><input type="checkbox" class="seats" name="seats[]" id="'+data[key].LoaiGhe+'" value="'+ data[key].id +'"></td>')
							else
								$('.A').append('<td><input type="checkbox" class="seats" name="seats[]" id="'+data[key].LoaiGhe+'" value="'+ data[key].id +'" disabled></td>')
						}
															
						if(key < 20)
						{
							if(data[key].TinhTrang == 0)
								$('.B').append('<td><input type="checkbox" class="seats" name="seats[]" id="'+data[key].LoaiGhe+'" value="'+ data[key].id +'"></td>')
							else
								$('.B').append('<td><input type="checkbox" class="seats" name="seats[]" id="'+data[key].LoaiGhe+'" value="'+ data[key].id +'" disabled></td>')	                   			}
						
						if(key < 30)
						{
							if(data[key].TinhTrang == 0)
								$('.C').append('<td><input type="checkbox" class="seats" name="seats[]" id="'+data[key].LoaiGhe+'" value="'+ data[key].id +'"></td>')
							else
								$('.C').append('<td><input type="checkbox" class="seats" name="seats[]" id="'+data[key].LoaiGhe+'" value="'+ data[key].id +'" disabled></td>')	                   			}
						
						if(key < 40)
						{
							if(data[key].TinhTrang == 0)
								$('.D').append('<td><input type="checkbox" class="seats" name="seats[]" id="'+data[key].LoaiGhe+'" value="'+ data[key].id +'"></td>')
							else
								$('.D').append('<td><input type="checkbox" class="seats" name="seats[]" id="'+data[key].LoaiGhe+'" value="'+ data[key].id +'" disabled></td>')	                   			}
						
						if(key < 50)
						{
							if(data[key].TinhTrang == 0)
								$('.E').append('<td><input type="checkbox" class="seats" name="seats[]" id="'+data[key].LoaiGhe+'" value="'+ data[key].id +'"></td>')
							else
								$('.E').append('<td><input type="checkbox" class="seats" name="seats[]" id="'+data[key].LoaiGhe+'" value="'+ data[key].id +'" disabled></td>')	                   			}
						
						if(key < 60)
						{
							if(data[key].TinhTrang == 0)
								$('.F').append('<td><input type="checkbox" class="seats" name="seats[]" id="'+data[key].LoaiGhe+'" value="'+ data[key].id +'"></td>')
							else
								$('.F').append('<td><input type="checkbox" class="seats" name="seats[]" id="'+data[key].LoaiGhe+'" value="'+ data[key].id +'" disabled></td>')	                   			}
					 });
				},
			});		            
		});	 
    });

	function xacnhan() {
		var tenphim = $('#tenphim').val();
		var hethongrap = $('#HeThongRap option:selected');
		var rap = $('#Rap option:selected');
		var ngaychieu = $('#NgayChieu option:selected');
		var giochieu = $('#SuatChieu option:selected');
		var dinhdang = $('#Phong option:selected');
		var giave = $('#Phong option:selected').attr('gia');
		var ghe = $('input[class="seats"]:checked');
		var ghedata = "";
		$.each(ghe, function (key, value) {
			ghedata += value.id + '  '; 
		});
		console.log(ghedata);
		var veconfirm = 
			'\n========================================'+
			'\n   Tên phim: '+tenphim+
			'\n   Hệ thống rạp: ' + hethongrap.text()+ 
			'\n   Rạp: ' + rap.text() + 
			'\n   Ngày chiếu: ' + ngaychieu.text() + 
			'\n   Giờ chiếu: ' + giochieu.text() + 
			'\n   Định dạng: ' + dinhdang.text() +
			'\n   Ghế: ' + ghedata+
			'\n   Giá một vé: '+ new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(giave) +
			'\n   Tổng giá vé: '+ new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(giave * ghe.length) +
			'\n========================================'+
			'\n\nNếu muốn đặt vé nhấn OK.'+
			'\nNếu muốn thay đổi thông tin nhấn Hủy.'
		if((hethongrap.val() != -1) && rap.val() != -1 && ngaychieu.val() != -1 && giochieu.val() != -1 && dinhdang.val() != -1 && ghedata != "")
		{
			if (confirm('Xác nhận thông tin vé: '+ veconfirm)) {
				$('.book__ticket__btn').submit();
			} else {
				return false;
			}
		}
		else 
		{
			alert("Vui lòng chọn đầy đủ dữ liệu.");
			return false;
		}
    }
</script>
@endsection