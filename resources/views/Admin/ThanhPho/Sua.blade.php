@extends('Admin.layouts.index')

@section('content')

<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-content">
                    <form action="{{route('thanhpho.sua',['id'=>$thanhpho->id])}}" method="post">
                        @csrf
                        <div class="section-heading">
                            <h1 class="page-title">Sửa thành phố</h1>
                        </div>							
                        <div class="form-group" >
                            <label>Tên thành phố</label>
                            <input type="text" name="tenthanhpho" value="{{$thanhpho->TenThanhPho}}" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa thành phố</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>					
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->
@endsection