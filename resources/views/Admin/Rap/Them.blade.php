@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-content">
                    <form action="{{route('rap.them')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control">
                        <div class="section-heading">
                            <h1 class="page-title">Thêm rạp</h1>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Chọn hệ thống rạp</label>
                            <select class="form-control @error('hethongrap') is-invalid @enderror" value="{{ old('hethongrap') }}" name="hethongrap">
                                @foreach($hethongrap as $htr)
                                    <option value="{{$htr->id}}">{{$htr->TenHeThongRap}}</option>
                                @endforeach
                            </select>
                            @error('hethongrap')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror 
                        </div>

                        <div class="form-group">
                            <label class="control-label">Chọn thành phố</label>
                            <select class="form-control" id="ThanhPho">
                                <option>Chọn thành phố</option>
                                @foreach($thanhpho as $tp)
                                    <option value="{{$tp->id}}">{{$tp->TenThanhPho}}</option>
                                @endforeach
                            </select>
                        </div>	
                        
                        <div class="form-group">
                            <label class="control-label">Chọn quận huyện</label>
                            <select class="form-control @error('quanhuyen') is-invalid @enderror" value="{{ old('quanhuyen') }}" name="quanhuyen" id="QuanHuyen">
                                
                                <option>Chọn quận huyện</option>
                                
                            </select>
                            @error('quanhuyen')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror 
                        </div>														

                        <div class="form-group">
                            <label>Tên rạp</label>
                            <input type="text" name="tenrap" value="{{ old('tenrap') }}" class="form-control @error('tenrap') is-invalid @enderror">
                            @error('tenrap')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm rạp</button>
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

        $('#ThanhPho').on('change',function () {
            $('#QuanHuyen').find('option').remove();
            $('#QuanHuyen').append('<option>Chọn quận huyện</option>'); 

            var matp = $(this).val(); 
                 
            var token = $('input[name="_token"]').val();
 
           $.ajax({
                url: ('ajaxgetquanhuyen'),
                method: 'get',
                data: {matp:matp, token:token},
                success: function(data){
                    console.log(data);
                    $('#QuanHuyen').append(data);
                }
           });
        });
    });
</script>

@endsection