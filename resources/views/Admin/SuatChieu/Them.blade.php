@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-content">                   
                    <form action="AddSuatChieuServlet" method="post">
                         <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control">

                        <div class="section-heading">
                            <h1 class="page-title">Thêm suất chiếu</h1>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Chọn phim</label>
                            <select class="form-control" name="tenphim">
                                @foreach($phim as $p)
                                    <option value="{{$p->id}}">{{$p->TenPhim}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Chọn hệ thống rạp</label>
                            <select class="form-control chon" id="HeThongRap">
                                @foreach($hethongrap as $htr)
                                    <option value="{{$htr->id}}">{{$htr->TenHeThongRap}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Chọn rạp</label>
                            <select class="form-control chon" id="Rap">
                                
                                <option value="-1">Chọn rạp</option>
                                
                            </select>
                        </div>														
                            
                        <div class="form-group">
                            <label class="control-label">Chọn phòng</label>
                            <select class="form-control chon" name="phong" id="Phong">
                                
                                <option value="-1">Chọn phòng</option>
                                
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Chọn ngày chiếu</label>
                            <input data-provide="datepicker" name="ngaychieu" data-date-autoclose="true" class="form-control" data-date-format="dd/mm/yyyy">
                            
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

        $('.chon').on('change',function () {
            var action = $(this).attr('id');
            var mahtr = $(this).val();
            var mar = $(this).val();
            console.log(mar);
            var token = $('input[name="_token"]').val();
            var kq = '';
            if(action=='HeThongRap')
                {
                    kq='Rap';
                }
            else
                kq="Phong";
           $.ajax({
                url: ('ajaxhtr'),
                method: 'get',
                data: {action:action, mahtr:mahtr, mar:mar, token:token},
                success: function(data){
                    $('#'+kq).html(data);
                }
           });
        });

    });
</script>

@endsection