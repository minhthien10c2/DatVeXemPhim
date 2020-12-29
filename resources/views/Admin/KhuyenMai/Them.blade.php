@extends('Admin.layouts.index')

@section('content')

<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-content">
                            
                    <form action="{{route('khuyenmai.them')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="section-heading">
                            <h1 class="page-title">Thêm khuyến mãi</h1>
                        </div>
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" name="tieude" class="form-control" required>
                        </div>
                                                                        
                        <div class="form-group">
                            <label for="exampleInputFile" class="control-label">Hình ảnh</label>
                            <input type="file" name="hinhanh" id="exampleInputFile">
                        </div>
                        
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" name="chitiet" rows="5" cols="30" required></textarea>
                        </div>
                
                        <button type="submit" class="btn btn-primary">Thêm khuyến mãi</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>					
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->

@endsection