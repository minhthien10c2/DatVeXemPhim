@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-content">                   
                    <form action="{{route('suatchieu.them')}}" method="post">
                         <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control">

                        <div class="section-heading">
                            <h1 class="page-title">Thêm suất chiếu</h1>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Chọn phim</label>
                            <select class="form-control" name="phim">
                                @foreach($phim as $p)
                                    <option value="{{$p->id}}">{{$p->TenPhim}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Chọn hệ thống rạp</label>
                            <select class="form-control chon" id="HeThongRap">
                                <option>Chọn hệ thống rạp</option>
                                @foreach($hethongrap as $htr)
                                    <option value="{{$htr->id}}">{{$htr->TenHeThongRap}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Chọn rạp</label>
                            <select class="form-control chon" id="Rap">
                                
                                <option>Chọn rạp</option>
                                
                            </select>
                        </div>														
                            
                        <div class="form-group">
                            <label class="control-label">Chọn phòng</label>
                            <select class="form-control chon" name="phong" id="Phong">
                                
                                <option>Chọn phòng</option>
                                
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Chọn ngày chiếu</label>
                            <input data-provide="datepicker" name="ngaychieu" data-date-autoclose="true" class="form-control" data-date-format="mm/dd/yyyy">
                            
                        </div>
                        
                        <div class="form-group">
                            <label>Giờ bắt đầu</label>
                            <input type="text" class="form-control" name="giobatdau" required>
                        </div>

                        <div class="form-group">
                            <label>Giá vé</label>
                            <input type="text" class="form-control" name="giave" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm suất chiếu</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>					
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->

@endsection

@section('script')
<script>
    $(document).ready(function (){

        $('#HeThongRap').on('change',function () {
            $('#Rap').find('option').remove();
            $('#Rap').append('<option>Chọn rạp</option>'); 
            $('#Phong').find('option').remove();
            $('#Phong').append('<option>Chọn phòng</option>');	

            var mahtr = $(this).val();           
            var token = $('input[name="_token"]').val();
 
           $.ajax({
                url: ('ajaxgetrap'),
                method: 'get',
                data: {mahtr:mahtr, token:token},
                success: function(data){
                    $('#Rap').append(data);
                }
           });
        });

        $('#Rap').on('change',function () {
            $('#Phong').find('option').remove();
            $('#Phong').append('<option>Chọn phòng</option>');	

            var mar = $(this).val();           
            var token = $('input[name="_token"]').val();
 
           $.ajax({
                url: ('ajaxgetphong'),
                method: 'get',
                data: {mar:mar, token:token},
                success: function(data){
                    $('#Phong').append(data);
                }
           });
        });

    });
</script>

@endsection