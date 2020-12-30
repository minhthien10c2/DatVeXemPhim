@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-content">
                    <form action="{{route('phong.them')}}" method="post">
                        @csrf
                        <div class="section-heading">
                            <h1 class="page-title">Thêm phòng</h1>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Chọn hệ thống rạp</label>
                            <select id="HeThongRap" class="form-control">
                                <option>Chọn hệ thống rạp</option>
                                @foreach($hethongrap as $htr)
                                    <option value="{{$htr->id}}">{{$htr->TenHeThongRap}}</option>
                                @endforeach
                            </select>        
                        </div>

                        <div class="form-group">
                            <label class="control-label">Chọn rạp</label>
                            <select name="rap" value="{{ old('rap') }}" id="Rap" class="form-control @error('rap') is-invalid @enderror">
                                <option>Chọn rạp</option>
                            </select>
                            @error('rap')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror   
                        </div>

                        <div class="form-group">
                            <label class="control-label">Chọn định dạng</label>
                            <select name="dinhdang" value="{{ old('dinhdang') }}" class="form-control @error('dinhdang') is-invalid @enderror">
                                @foreach($dinhdang as $dd)
                                    <option value="{{$dd->id}}">{{$dd->TenDinhDang}}</option>
                                @endforeach
                            </select>
                            @error('dinhdang')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror   
                        </div>														

                        <div class="form-group">
                            <label>Tên phòng</label>
                            <input type="text" value="{{ old('tenphong') }}" name="tenphong" class="form-control @error('tenphong') is-invalid @enderror">
                            @error('tenphong')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror   
                        </div>

                        <div class="form-group">
                            <label>Số ghế tối đa</label>
                            <input type="text" value="{{ old('soghetoida') }}" name="soghetoida" class="form-control @error('soghetoida') is-invalid @enderror">
                            @error('soghetoida')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror   
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm phòng</button>
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