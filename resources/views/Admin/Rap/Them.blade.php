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
                        @csrf
                        <div class="section-heading">
                            <h1 class="page-title">Thêm rạp</h1>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Chọn hệ thống rạp</label>
                            <select class="form-control" name="hethongrap">
                                @foreach($hethongrap as $htr)
                                    <option value="{{$htr->id}}">{{$htr->TenHeThongRap}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Chọn thành phố</label>
                            <select class="form-control" name="thanhpho" id="thanhpho">
                                @foreach($thanhpho as $tp)
                                    <option value="{{$tp->id}}">{{$tp->TenThanhPho}}</option>
                                @endforeach
                            </select>
                        </div>	
                        
                        <div class="form-group">
                            <label class="control-label">Chọn quận huyện</label>
                            <select class="form-control" name="quanhuyen">
                                
                                <option value="4">ChauDoc</option>
                                
                            </select>
                        </div>														

                        <div class="form-group">
                            <label>Tên rạp</label>
                            <input type="text" name="tenrap" class="form-control" required>
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