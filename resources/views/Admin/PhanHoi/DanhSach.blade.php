@extends('Admin.layouts.index')

@section('content')
<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">				
                <h3 style="float:left; display: inline;">Quản lý phản hồi</h3>
            </div>		
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <caption>
                        @if(Session('mes'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>{{Session('mes')}}</strong>
                        </div>
                        @endif
                    </caption>
                    <thead>							
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Người dùng</th>
                        <th scope="col">Tiêu đề</th>	
                        <th scope="col">Chi tiết</th>
                        <th scope="col" colspan=2 class="text-center">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $stt=0; @endphp
                    @foreach($phanhoi as $ph)
                        @php $stt++; @endphp
                        <tr class="table-active">
                            <td>{{$stt}}</td>
                            <td>{{$ph->User->name}}</td>
                            <td>{{$ph->TieuDe}}</td>
                            <td>{{$ph->ChiTiet}}</td>
                            <td  class="text-right"><a href="{{route ('phanhoi.sua',['id'=>$ph->id])}}">Sửa</a></td>
                            <td  class="text-left"><a onclick="return confirm('Bạn có muốn xóa?');" href="{{route ('phanhoi.xoa',['id'=>$ph->id])}}">Xóa</a></td>
                        </tr>	
                    @endforeach			  
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>				
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->   
@endsection