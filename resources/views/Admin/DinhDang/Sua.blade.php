@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="panel-content">
							<form action="{{route('dinhdang.sua',['id'=>$dinhdang->id])}}" method="post">
								@csrf
								<div class="section-heading">
									<h1 class="page-title">Sửa định dạng</h1>
								</div>							
								<div class="form-group">
									<label>Tên định dạng</label>						
									<input type="text" name="tendinhdang" value="{{$dinhdang->TenDinhDang}}" class="form-control  @error('tenloai') is-invalid @enderror" value="{{ old('tendinhdang') }}">
									@error('tendinhdang')
										<div class="text-danger"><strong>{{ $message }}</strong></div>
									@enderror
								</div>
								<button type="submit" class="btn btn-primary">Sửa định dạng</button>
							</form>
						</div>
						<div class="col-md-3"></div>
					</div>					
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
@endsection