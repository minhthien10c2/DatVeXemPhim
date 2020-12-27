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
                            <label class="control-label">Chọn rạp</label>
                            <select name="rap" class="form-control">
                                @foreach($rap as $r)
                                    @if($phong->IDRap == $r->id)
                                        <option value="{{$r->id}}" selected>{{$r->TenRap}}</option>
                                    @else
                                        <option value="{{$r->id}}">{{$r->TenRap}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Chọn định dạng</label>
                            <select name="dinhdang" class="form-control">
                                @foreach($dinhdang as $dd)
                                    @if($phong->IDDinhDang == $dd->id)
                                        <option value="{{$dd->id}}" selected>{{$dd->TenDinhDang}}</option>
                                    @else
                                        <option value="{{$dd->id}}">{{$dd->TenDinhDang}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>														

                        <div class="form-group">
                            <label>Tên phòng</label>
                            <input type="text" name="tenphong" value="{{$phong->TenPhong}}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Số ghế tối đa</label>
                            <input type="text" name="soghetoida" value="{{$phong->SoGheToiDa}}" class="form-control" required>
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