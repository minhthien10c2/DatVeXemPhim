@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-content">
                    <form action="{{route('phong.sua',['id'=>$phong->id])}}" method="post">
                        @csrf
                        <div class="section-heading">
                            <h1 class="page-title">Sửa phòng</h1>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Chọn hệ thống rạp</label>
                            <select id="HeThongRap" class="form-control @error('tenphong') is-invalid @enderror">
                                <option>Chọn hệ thống rạp</option>
                                @foreach($hethongrap as $htr)
                                    @if($htr->id == $phong->Rap->HeThongRap->id)
                                        <option value="{{$htr->id}}" selected>{{$htr->TenHeThongRap}}</option>
                                    @else
                                        <option value="{{$htr->id}}">{{$htr->TenHeThongRap}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Chọn rạp</label>
                            <select name="rap" id="Rap" class="form-control @error('rap') is-invalid @enderror">
                                    <option value="{{$phong->IDRap}}" selected>{{$phong->Rap->TenRap}}</option>
                            </select>
                            @error('rap')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror  
                        </div>

                        <div class="form-group">
                            <label class="control-label">Chọn định dạng</label>
                            <select name="dinhdang" class="form-control @error('dinhdang') is-invalid @enderror">
                                @foreach($dinhdang as $dd)
                                    @if($phong->IDDinhDang == $dd->id)
                                        <option value="{{$dd->id}}" selected>{{$dd->TenDinhDang}}</option>
                                    @else
                                        <option value="{{$dd->id}}">{{$dd->TenDinhDang}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('dinhdang')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror  
                        </div>														

                        <div class="form-group">
                            <label>Tên phòng</label>
                            <input type="text" name="tenphong" value="{{$phong->TenPhong}}" class="form-control @error('tenphong') is-invalid @enderror">
                            @error('tenphong')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror  
                        </div>

                        <div class="form-group">
                            <label>Số ghế tối đa</label>
                            <input type="text" name="soghetoida" value="{{$phong->SoGheToiDa}}" class="form-control @error('soghetoida') is-invalid @enderror">
                            @error('soghetoida')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror  
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa phòng</button>
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
    });
</script>

@endsection