@extends('layouts.app')

@section('content')
<div class="comic_thumb">
    <div class="container">
        <div class="thumb_container">
            <img src="{{$comic['thumb']}}" alt="">
            <p class="thumb_text">COMIC BOOK</p>
            <p class="thumb_link"> <a href="{{route('home')}}">VIEW GALLERY</a> </p>
        </div>
    </div>
</div>
<div class="descriptions">

</div>
<div class="infos">

</div>
<div class="links_collection">
    <div class="container">
        <div class="row">
            <div class="col-3 br_l">
                <img src="{{asset('img/cta-icons.png')}}" alt="">
                <p>DIGITAL COMICS</p>
            </div>
            <div class="col-3 br_l">
                <img src="{{asset('img/cta-icons.png')}}" alt="">
                <p>SHOP DC</p>
            </div>
            <div class="col-3 br_l">
                <img src="{{asset('img/cta-icons.png')}}" alt="">
                <p>COMIC SHOP LOCATOR</p>
            </div>
            <div class="col-3 br_l br_r">
                <img src="{{asset('img/cta-icons.png')}}" alt="">
                <p>SUBSCRIPTIONS</p>
            </div>
        </div>
    </div>
</div>
@endsection