@extends('Admin.layouts.index')

@section('content')

<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-content">
                    <form action="{{route('thanhpho.them')}}" method="post">
                        @csrf
                        <div class="section-heading">
                            <h1 class="page-title">Thêm thành phố</h1>
                        </div>							
                        <div class="form-group" >
                            <label>Tên thành phố</label>
                            <input type="text" name="tenthanhpho" value="{{ old('tenthanhpho') }}" class="form-control @error('tenthanhpho') is-invalid @enderror">
                            @error('tenthanhpho')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm thành phố</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>					
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->
@endsection