@extends('Home.layouts.index')

@section('content')
<!-- page title -->
<section class="section section--first section--bg" data-bg="home_assett/img/section/section.jpg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section__wrap">
					<!-- section title -->
					<h2 class="section__title">Đặt vé</h2>
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
					<div class="book__ticket__content">
						<div class="book__ticket__items">

							<input type="hidden" id="idphim" value="{{$phim->id}}">
							<input type="hidden" id="token" value="{{csrf_token()}}">
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
						</div>						
					</div>

					
					
					<table class="seats__list">
						<thead class="seats__list--number">
								
						</thead>
						<tbody class= "seats__list--letter">
								
						</tbody>
						<tbody>
							<tr>
								<td>A</td>
								<td>
									<input type="checkbox" disabled checked class="seats" value="A1">
								</td>
								<td>
									<input type="checkbox" class="seats" value="A2">
								</td>
								<td>
									<input type="checkbox" class="seats" value="A3">
								</td>
								<td>
									<input type="checkbox" class="seats" value="A4">
								</td>
								<td>
									<input type="checkbox" class="seats" value="A5">
								</td>
								<td>
									<input type="checkbox" class="seats" value="A6">
								</td>
								<td>
									<input type="checkbox" class="seats" value="A7">
								</td>
								<td>
									<input type="checkbox" class="seats" value="A8">
								</td>
								<td>
									<input type="checkbox" class="seats" value="A9">
								</td>
								<td>
									<input type="checkbox" class="seats" value="A10">
								</td>
								<td>
									<input type="checkbox" class="seats" value="A11">
								</td>
								<td>
									<input type="checkbox" class="seats" value="A12">
								</td>
							</tr>
		
							<tr>
								<td>B</td>
								<td>
									<input type="checkbox" class="seats" value="B1">
								</td>
								<td>
									<input type="checkbox" class="seats" value="B2">
								</td>
								<td>
									<input type="checkbox" class="seats" value="B3">
								</td>
								<td>
									<input type="checkbox" class="seats" value="B4">
								</td>
								<td>
									<input type="checkbox" class="seats" value="B5">
								</td>
								<td>
									<input type="checkbox" class="seats" value="B6">
								</td>
								<td>
									<input type="checkbox" class="seats" value="B7">
								</td>
								<td>
									<input type="checkbox" class="seats" value="B8">
								</td>
								<td>
									<input type="checkbox" class="seats" value="B9">
								</td>
								<td>
									<input type="checkbox" class="seats" value="B10">
								</td>
								<td>
									<input type="checkbox" class="seats" value="B11">
								</td>
								<td>
									<input type="checkbox" class="seats" value="B12">
								</td>
							</tr>
		
							<tr>
								<td>C</td>
								<td>
									<input type="checkbox" class="seats" value="C1">
								</td>
								<td>
									<input type="checkbox" class="seats" value="C2">
								</td>
								<td>
									<input type="checkbox" class="seats" value="C3">
								</td>
								<td>
									<input type="checkbox" class="seats" value="C4">
								</td>
								<td>
									<input type="checkbox" class="seats" value="C5">
								</td>
								<td>
									<input type="checkbox" class="seats" value="C6">
								</td>
								<td>
									<input type="checkbox" class="seats" value="C7">
								</td>
								<td>
									<input type="checkbox" class="seats" value="C8">
								</td>
								<td>
									<input type="checkbox" class="seats" value="C9">
								</td>
								<td>
									<input type="checkbox" class="seats" value="C10">
								</td>
								<td>
									<input type="checkbox" class="seats" value="C11">
								</td>
								<td>
									<input type="checkbox" class="seats" value="C12">
								</td>
							</tr>
		
							<tr>
								<td>D</td>
								<td>
									<input type="checkbox" class="seats" value="D1">
								</td>
								<td>
									<input type="checkbox" class="seats" value="D2">
								</td>
								<td>
									<input type="checkbox" class="seats" value="D3">
								</td>
								<td>
									<input type="checkbox" class="seats" value="D4">
								</td>
								<td>
									<input type="checkbox" class="seats" value="D5">
								</td>
								<td>
									<input type="checkbox" class="seats" value="D6">
								</td>
								<td>
									<input type="checkbox" class="seats" value="D7">
								</td>
								<td>
									<input type="checkbox" class="seats" value="D8">
								</td>
								<td>
									<input type="checkbox" class="seats" value="D9">
								</td>
								<td>
									<input type="checkbox" class="seats" value="D10">
								</td>
								<td>
									<input type="checkbox" class="seats" value="D11">
								</td>
								<td>
									<input type="checkbox" class="seats" value="D12">
								</td>
							</tr>
		
							<tr>
								<td>E</td>
								<td>
									<input type="checkbox" class="seats" value="E1">
								</td>
								<td>
									<input type="checkbox" class="seats" value="E2">
								</td>
								<td>
									<input type="checkbox" class="seats" value="E3">
								</td>
								<td>
									<input type="checkbox" class="seats" value="E4">
								</td>
								<td>
									<input type="checkbox" class="seats" value="E5">
								</td>
								<td>
									<input type="checkbox" class="seats" value="E6">
								</td>
								<td>
									<input type="checkbox" class="seats" value="E7">
								</td>
								<td>
									<input type="checkbox" class="seats" value="E8">
								</td>
								<td>
									<input type="checkbox" class="seats" value="E9">
								</td>
								<td>
									<input type="checkbox" class="seats" value="E10">
								</td>
								<td>
									<input type="checkbox" class="seats" value="E11">
								</td>
								<td>
									<input type="checkbox" class="seats" value="E12">
								</td>
							</tr>

							<tr>
								<td>F</td>
								<td>
									<input type="checkbox" class="seats" value="F1">
								</td>
								<td>
									<input type="checkbox" class="seats" value="F2">
								</td>
								<td>
									<input type="checkbox" class="seats" value="F3">
								</td>
								<td>
									<input type="checkbox" class="seats" value="F4">
								</td>
								<td>
									<input type="checkbox" class="seats" value="F5">
								</td>
								<td>
									<input type="checkbox" class="seats" value="F6">
								</td>
								<td>
									<input type="checkbox" class="seats" value="F7">
								</td>
								<td>
									<input type="checkbox" class="seats" value="F8">
								</td>
								<td>
									<input type="checkbox" class="seats" value="F9">
								</td>
								<td>
									<input type="checkbox" class="seats" value="F10">
								</td>
								<td>
									<input type="checkbox" class="seats" value="F11">
								</td>
								<td>
									<input type="checkbox" class="seats" value="F12">
								</td>
							</tr>
		
							<tr>
								<td>G</td>
								<td>
									<input type="checkbox" class="seats" value="G1">
								</td>
								<td>
									<input type="checkbox" class="seats" value="G2">
								</td>
								<td>
									<input type="checkbox" class="seats" value="G3">
								</td>
								<td>
									<input type="checkbox" class="seats" value="G4">
								</td>
								<td>
									<input type="checkbox" class="seats" value="G5">
								</td>
								<td>
									<input type="checkbox" class="seats" value="G6">
								</td>
								<td>
									<input type="checkbox" class="seats" value="G7">
								</td>
								<td>
									<input type="checkbox" class="seats" value="G8">
								</td>
								<td>
									<input type="checkbox" class="seats" value="G9">
								</td>
								<td>
									<input type="checkbox" class="seats" value="G10">
								</td>
								<td>
									<input type="checkbox" class="seats" value="G11">
								</td>
								<td>
									<input type="checkbox" class="seats" value="G12">
								</td>
							</tr>
		
							<tr>
								<td>H</td>
								<td>
									<input type="checkbox" class="seats" value="H1">
								</td>
								<td>
									<input type="checkbox" class="seats" value="H2">
								</td>
								<td>
									<input type="checkbox" class="seats" value="H3">
								</td>
								<td>
									<input type="checkbox" class="seats" value="H4">
								</td>
								<td>
									<input type="checkbox" class="seats" value="H5">
								</td>
								<td>
									<input type="checkbox" class="seats" value="H6">
								</td>
								<td>
									<input type="checkbox" class="seats" value="H7">
								</td>
								<td>
									<input type="checkbox" class="seats" value="H8">
								</td>
								<td>
									<input type="checkbox" class="seats" value="H9">
								</td>
								<td>
									<input type="checkbox" class="seats" value="H10">
								</td>
								<td>
									<input type="checkbox" class="seats" value="H11">
								</td>
								<td>
									<input type="checkbox" class="seats" value="H12">
								</td>
							</tr>
		
							<tr>
								<td>I</td>
								<td>
									<input type="checkbox" class="seats" value="I1">
								</td>
								<td>
									<input type="checkbox" class="seats" value="I2">
								</td>
								<td>
									<input type="checkbox" class="seats" value="I3">
								</td>
								<td>
									<input type="checkbox" class="seats" value="I4">
								</td>
								<td>
									<input type="checkbox" class="seats" value="I5">
								</td>
								<td>
									<input type="checkbox" class="seats" value="I6">
								</td>
								<td>
									<input type="checkbox" class="seats" value="I7">
								</td>
								<td>
									<input type="checkbox" class="seats" value="I8">
								</td>
								<td>
									<input type="checkbox" class="seats" value="I9">
								</td>
								<td>
									<input type="checkbox" class="seats" value="I10">
								</td>
								<td>
									<input type="checkbox" class="seats" value="I11">
								</td>
								<td>
									<input type="checkbox" class="seats" value="I12">
								</td>
							</tr>
		
							<tr>
								<td>J</td>
								<td>
									<input type="checkbox" class="seats" value="J1">
								</td>
								<td>
									<input type="checkbox" class="seats" value="J2">
								</td>
								<td>
									<input type="checkbox" class="seats" value="J3">
								</td>
								<td>
									<input type="checkbox" class="seats" value="J4">
								</td>
								<td>
									<input type="checkbox" class="seats" value="J5">
								</td>
								<td>
									<input type="checkbox" class="seats" value="J6">
								</td>
								<td>
									<input type="checkbox" class="seats" value="J7">
								</td>
								<td>
									<input type="checkbox" class="seats" value="J8">
								</td>
								<td>
									<input type="checkbox" class="seats" value="J9">
								</td>
								<td>
									<input type="checkbox" class="seats" value="J10">
								</td>
								<td>
									<input type="checkbox" class="seats" value="J11">
								</td>
								<td>
									<input type="checkbox" class="seats" value="J12">
								</td>
							</tr>
						</tbody>
					</table>

					<!-- screen -->
					<div class="screen">
						<h3 class="wthree">Screen this way</h3>
					</div>
					<!-- end screen -->

					<!-- book__ticket btn -->
					<button class="book__ticket__btn" type="button">Đặt vé ngay</button>
					<!-- end book__ticket btn -->	
					
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
            $('#Rap').append('<option>Chọn rạp</option>'); 
			$('#NgayChieu').find('option').remove();
            $('#NgayChieu').append('<option>Chọn ngày chiếu</option>'); 
			$('#SuatChieu').find('option').remove();
            $('#SuatChieu').append('<option>Chọn suất chiếu</option>'); 

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
            $('#NgayChieu').append('<option>Chọn ngày chiếu</option>'); 
			$('#SuatChieu').find('option').remove();
            $('#SuatChieu').append('<option>Chọn suất chiếu</option>'); 

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
            $('#SuatChieu').append('<option>Chọn suất chiếu</option>'); 

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

		$('#DinhDang').change(function () {				               
			$('.seats__list--number').find('th').remove();
			$('.seats__list--letter').find('tr').remove();

			$.ajax({
			url: "AjaxServlet",
				method: "GET",
				data: {
					operation: "Ghe",					                    	
					idphong: $('#DinhDang').val()			                    	
				},
				success: function (data) {
					
					$.each(data, function (key, value) {
						
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
								$('.A').append('<td><input type="checkbox" class="seats" name="seats" value="'+ data[key].IDGhe +'"></td>')
							else
								$('.A').append('<td><input type="checkbox" class="seats" name="seats" value="'+ data[key].IDGhe +'" checked disabled></td>')
						}
															
						if(key < 20)
						{
							if(data[key].TinhTrang == 0)
								$('.B').append('<td><input type="checkbox" class="seats" name="seats" value="'+ data[key].IDGhe +'"></td>')
							else
								$('.B').append('<td><input type="checkbox" class="seats" name="seats" value="'+ data[key].IDGhe +'" checked disabled></td>')	                   			}
						
						if(key < 30)
						{
							if(data[key].TinhTrang == 0)
								$('.C').append('<td><input type="checkbox" class="seats" name="seats" value="'+ data[key].IDGhe +'"></td>')
							else
								$('.C').append('<td><input type="checkbox" class="seats" name="seats" value="'+ data[key].IDGhe +'" checked disabled></td>')	                   			}
						
						if(key < 40)
						{
							if(data[key].TinhTrang == 0)
								$('.D').append('<td><input type="checkbox" class="seats" name="seats" value="'+ data[key].IDGhe +'"></td>')
							else
								$('.D').append('<td><input type="checkbox" class="seats" name="seats" value="'+ data[key].IDGhe +'" checked disabled></td>')	                   			}
						
						if(key < 50)
						{
							if(data[key].TinhTrang == 0)
								$('.E').append('<td><input type="checkbox" class="seats" name="seats" value="'+ data[key].IDGhe +'"></td>')
							else
								$('.E').append('<td><input type="checkbox" class="seats" name="seats" value="'+ data[key].IDGhe +'" checked disabled></td>')	                   			}
						
						if(key < 60)
						{
							if(data[key].TinhTrang == 0)
								$('.F').append('<td><input type="checkbox" class="seats" name="seats" value="'+ data[key].IDGhe +'"></td>')
							else
								$('.F').append('<td><input type="checkbox" class="seats" name="seats" value="'+ data[key].IDGhe +'" checked disabled></td>')	                   			}
					});
				},
			});		            
		});	 
    });
</script>
@endsection