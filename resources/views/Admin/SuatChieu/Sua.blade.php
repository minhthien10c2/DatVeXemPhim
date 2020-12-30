@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-content">                   
                    <form action="{{route('suatchieu.sua',['id'=>$suatchieu->id])}}" method="post">
                         <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control">

                        <div class="section-heading">
                            <h1 class="page-title">Sửa suất chiếu</h1>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Chọn phim</label>
                            <select class="form-control @error('phim') is-invalid @enderror" name="phim">
                                
                                <option value="{{$suatchieu->id}}">{{$suatchieu->Phim->TenPhim}}</option>
                                
                            </select>

                            @error('phim')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Chọn hệ thống rạp</label>
                            <select class="form-control chon" id="HeThongRap">
                                <option>Chọn hệ thống rạp</option>
                                @foreach($hethongrap as $htr)
                                    @if($htr->id == $suatchieu->Phong->Rap->HeThongRap->id)
                                        <option value="{{$htr->id}}" selected>{{$htr->TenHeThongRap}}</option>
                                    @else
                                        <option value="{{$htr->id}}">{{$htr->TenHeThongRap}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Chọn rạp</label>
                            <select class="form-control chon" id="Rap">
                                
                                <option value="{{$suatchieu->Phong->Rap->id}}">{{$suatchieu->Phong->Rap->TenRap}}</option>
                                
                            </select>
                        </div>														
                            
                        <div class="form-group">
                            <label class="control-label">Chọn phòng</label>
                            <select class="form-control @error('phong') is-invalid @enderror" name="phong" id="Phong">
                                
                                <option value="{{$suatchieu->Phong->id}}">{{$suatchieu->Phong->TenPhong}}</option>
                                
                            </select>

                            @error('phong')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        @php 
                            $date_before = explode("-",$suatchieu->NgayChieu);
                            $date_after = $date_before[1]."/".$date_before[2]."/".$date_before[0];
                        
                        @endphp
                        <div class="form-group">
                            <label>Chọn ngày chiếu</label>
                            <input data-provide="datepicker" name="ngaychieu" value='{{$date_after}}' data-date-autoclose="true" class="form-control @error('ngaychieu') is-invalid @enderror" data-date-format="mm/dd/yyyy">
                            @error('ngaychieu')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>Giờ bắt đầu</label>
                            <input type="text" class="form-control @error('giobatdau') is-invalid @enderror" name="giobatdau" value="{{$suatchieu->GioBatDau}}" required>
                            @error('giobatdau')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Giá vé</label>
                            <input type="text" class="form-control @error('giave') is-invalid @enderror" name="giave" value="{{$suatchieu->GiaVe}}" required>
                            @error('giave')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa suất chiếu</button>
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