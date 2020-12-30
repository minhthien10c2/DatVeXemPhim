@extends('Admin.layouts.index')

@section('content')

<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-content">
                            
                    <form action="{{route('khuyenmai.sua',['id'=>$khuyenmai->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="section-heading">
                            <h1 class="page-title">Sửa khuyến mãi</h1>
                        </div>
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" name="tieude" value="{{$khuyenmai->TieuDe}}" class="form-control @error('tieude') is-invalid @enderror" required>
                            @error('tieude')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                                                                        
                        <div class="form-group">
                            <label for="exampleInputFile" class="control-label">Hình ảnh</label>
                            <input type="file" name="hinhanh" id="exampleInputFile" class="@error('hinhanh') is-invalid @enderror">
                            @if(!empty($khuyenmai->HinhAnh))
								<img style="display:block;margin-top:10px;width: 100px;" src="{{ env('APP_URL') . '/storage/app/IMG/' . $khuyenmai->HinhAnh }}" />
								<span class="d-block small text-danger">Bỏ trống nếu muốn giữ nguyên ảnh cũ</span>
							@endif
                            @error('hinhanh')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control @error('chitiet') is-invalid @enderror" name="chitiet" rows="5" cols="30" required>{{$khuyenmai->ChiTiet}}</textarea>
                            @error('chitiet')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                       </div>
                
                        <button type="submit" class="btn btn-primary">Sửa khuyến mãi</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>					
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->

@endsection