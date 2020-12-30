@extends('Admin.layouts.index')

@section('content')

<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-content">
                    <form action="{{route('quanhuyen.sua',['id'=>$quanhuyen->id])}}" method="post">
                        @csrf
                        <div class="section-heading">
                            <h1 class="page-title">Sửa quận huyện</h1>
                        </div>	
                        <div class="form-group">
                            <label class="control-label">Chọn thành phố</label>
                            <select name="thanhpho" class="form-control @error('thanhpho') is-invalid @enderror">
                                @foreach($thanhpho as $tp)
                                    @if($quanhuyen->IDThanhPho == $tp->id)
                                        <option value="{{$tp->id}}" selected>{{$tp->TenThanhPho}}</option>
                                    @else
                                        <option value="{{$tp->id}}">{{$tp->TenThanhPho}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('thanhpho')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror 
                        </div>

                        <div class="form-group">
                            <label>Tên quận huyện</label>
                            <input type="text" name="tenquanhuyen" value="{{$quanhuyen->TenQuanHuyen}}" class="form-control @error('tenquanhuyen') is-invalid @enderror">
                            @error('tenquanhuyen')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror 
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa quận huyện</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>					
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->
@endsection