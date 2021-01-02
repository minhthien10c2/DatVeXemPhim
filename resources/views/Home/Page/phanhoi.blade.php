@extends('Home.layouts.index')

@section('content')
<div class="feedback__form section--bg" data-bg="home_assett/img/section/section.jpg">
    <div class="container" style="margin-top:80px;">
        <div class="row">
            <div class="col-12">
                <div class="feedback__form__content">
                    
                   
                    <!-- Feedback form -->
                    <form action="{{route('phanhoi.them')}}" method="post" class="feedback__form__form">
                        @csrf
                        <input type="hidden" name="idnguoidung" value="{{Auth::User()->id}}">

                        <a class="feedback__form__btn--home" href="{{route('listphanhoi')}}">X</a>
                        <h3 class="feedback__form__title">Phản hồi</h3>

                        <div class="feedback__form__group">
                            <input type="text" name="tieude" class="feedback__form__input @error('tieude') is-invalid @enderror" placeholder="Tiêu đề">
                            @error('tieude')
                                	<div style="color:red;"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="feedback__form__group">
                            <textarea placeholder="Nội dung" name="chitiet" class="feedback__form__detail @error('noidung') is-invalid @enderror" id="" cols="60" rows="10"></textarea>
                            @error('chitiet')
                                	<div style="color:red;"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                                    
                        <button class="feedback__form__btn" type="submit">Đăng phản hồi</button>
                    </form>
                    <!-- Feedback form -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection