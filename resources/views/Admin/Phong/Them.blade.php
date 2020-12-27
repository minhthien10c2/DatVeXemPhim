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
                            <label class="control-label">Chọn rạp</label>
                            <select name="rap" class="form-control">
                                @foreach($rap as $r)
                                    <option value="{{$r->id}}">{{$r->TenRap}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Chọn định dạng</label>
                            <select name="dinhdang" class="form-control">
                                @foreach($dinhdang as $dd)
                                    <option value="{{$dd->id}}">{{$dd->TenDinhDang}}</option>
                                @endforeach
                            </select>
                        </div>														

                        <div class="form-group">
                            <label>Tên phòng</label>
                            <input type="text" name="tenphong" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Số ghế tối đa</label>
                            <input type="text" name="soghetoida" class="form-control" required>
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