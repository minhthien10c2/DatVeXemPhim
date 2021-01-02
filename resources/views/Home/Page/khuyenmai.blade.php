@extends('Home.layouts.index')

@section('content')
<!-- page title -->
<section class="section section--first section--bg" data-bg="home_assett/img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__wrap">
                    <!-- section title -->
                    <h2 class="section__title">Sự kiện</h2>
                    <!-- end section title -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- event -->
<div class="section">
    <div class="container">
        <div class="row">
            <!-- detail -->					
            <div class="event__item event__item--first"><span>{{$khuyenmai->TieuDe}}</span> <a class="event__detail-back" href="{{route('listkhuyenmai')}}">Trở lại</a></div>
            <img src="{{ env('APP_URL') . '/storage/app/IMG/' . $khuyenmai->HinhAnh }}" alt="" style="width: 100%;height: 100%;">
            <!-- end detail -->
            <div class="event__item event__item--first"><span>{{$khuyenmai->ChiTiet}}</span></div>

        </div>
    </div>
</div>
<!-- end event -->
@endsection