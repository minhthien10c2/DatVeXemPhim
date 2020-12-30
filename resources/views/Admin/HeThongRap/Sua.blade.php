@extends('Admin.layouts.index')

@section('content')

<!-- MAIN CONTENT -->
<div id="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="panel-content">
							<form action="{{route('hethongrap.sua',['id'=>$hethongrap->id])}}" method="post">
								@csrf
								<div class="section-heading">
									<h1 class="page-title">Sửa hệ thống rạp</h1>
								</div>							
								<div class="form-group">
									<label>Tên hệ thống rạp</label>
									<input type="text" name="tenhethongrap" class="form-control @error('tenhethongrap') is-invalid @enderror" value="{{$hethongrap->TenHeThongRap}}" required>
									@error('tenhethongrap')
										<div class="text-danger"><strong>{{ $message }}</strong></div>
									@enderror
								</div>

								<button type="submit" class="btn btn-primary">Sửa hệ thống rạp</button>
							</form>
						</div>
						<div class="col-md-3"></div>
					</div>					
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
@endsection