@extends('Admin.layouts.index')

@section('content')

<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-content">
                    <form action="{{route('loaiphim.sua',['id'=>$loaiphim->id])}}" method="post">
                        @csrf
                        <div class="section-heading">
                            <h1 class="page-title">Sửa loại phim</h1>
                        </div>							
                        <div class="form-group">
                            <label>Tên loại phim</label>
                            <input type="text" name="tenloaiphim" value="{{$loaiphim->TenLoaiPhim}}" class="form-control @error('tenloaiphim') is-invalid @enderror">
                            @error('tenloaiphim')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa loại phim</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>					
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->

@endsection