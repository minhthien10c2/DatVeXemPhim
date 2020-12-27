@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-content">
                    <form action="{{route('rap.sua',['id'=>$rap->id])}}" method="post">
                        @csrf
                        <div class="section-heading">
                            <h1 class="page-title">Sửa rạp</h1>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Chọn hệ thống rạp</label>
                            <select class="form-control" name="hethongrap">
                                @foreach($hethongrap as $htr)
                                    @if($rap->IDHeThongRap == $htr->id)
                                        <option value="{{$htr->id}}" selected>{{$htr->TenHeThongRap}}</option>
                                    @else
                                        <option value="{{$htr->id}}">{{$htr->TenHeThongRap}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Chọn thành phố</label>
                            <select class="form-control" name="thanhpho" id="thanhpho">
                                @foreach($thanhpho as $tp)
                                    @if($rap->QuanHuyen->ThanhPho->id == $htr->id)
                                        <option value="{{$tp->id}}" selected>{{$tp->TenThanhPho}}</option>
                                    @else
                                        <option value="{{$tp->id}}">{{$tp->TenThanhPho}}</option>
                                    @endif
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
                            <input type="text" name="tenrap" value="{{$rap->TenRap}}" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa rạp</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>					
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->

@endsection