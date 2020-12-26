<div class="col-md-3">
        <div id="left-sidebar" class="sidebar">
            <button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
                <span class="sr-only">Toggle Fullwidth</span>
                <i class="fa fa-angle-left"></i>
            </button>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <div class="dropdown">
                    @if(Auth::user() != null)
                        <a href="#" class="dropdown-toggle user-name" data-toggle="dropdown">Hello, {{Auth::user()->name}}<i class="fa fa-caret-down"></i></a>
                    @endif
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <li>
                                <form action="NguoiDungDangXuat" method="post">
                                    <input type="submit" value="Đăng xuất" class="form-control" style="border:none;">
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <!---->
                
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class=""><a href="{{route('phim')}}"><i class="lnr lnr-film-play"></i> <span>Quản lý phim</span></a></li>
                        <li class=""><a href="{{route('suatchieu')}}"><i class="lnr lnr-calendar-full"></i> <span>Quản lý suất chiếu</span></a></li>
                        <li class=""><a href="{{route('ve')}}"><i class="lnr lnr-book"></i> <span>Quản lý vé</span></a></li>
                        <li class=""><a href="{{route('khuyenmai')}}"><i class="lnr lnr-gift"></i> <span>Quản lý khuyến mãi</span></a></li>
                        <li class=""><a href="{{route('hethongrap.danhsach')}}"><i class="lnr lnr-apartment"></i> <span>Quản lý hệ thống rạp</span></a></li>
                        <li class=""><a href="{{route('rap')}}"><i class="lnr lnr-store"></i> <span>Quản lý rạp</span></a></li>
                        <li class=""><a href="{{route('phong')}}"><i class="lnr lnr-home"></i> <span>Quản lý phòng</span></a></li>
                        <li class=""><a href="{{route('dinhdang.danhsach')}}"><i class="lnr lnr-magic-wand"></i> <span>Quản lý định dạng</span></a></li>
                        <li class=""><a href="{{route('loaiphim')}}"><i class="lnr lnr-dice"></i> <span>Quản lý loại phim</span></a></li>
                        <li class=""><a href="{{route('thanhpho')}}"><i class="lnr lnr-pushpin"></i> <span>Quản lý thành phô</span></a></li>
                        <li class=""><a href="{{route('quanhuyen')}}"><i class="lnr lnr-location"></i> <span>Quản lý quận huyện</span></a></li> 
                    </ul>
                </nav>
                
            </div>
        </div>
        </div>