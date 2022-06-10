@extends('layouts.app')

@section('content')
<div class="comic_thumb mb-4">
    <div class="container">
        <div class="thumb_container">
            <img src="{{$comic['thumb']}}" alt="">
            <p class="thumb_text">COMIC BOOK</p>
            <p class="thumb_link"> <a href="{{route('home')}}">VIEW GALLERY</a> </p>
        </div>
    </div>
</div>
<div class="descriptions container mt-4">
    <div class="row">
        <div class="col-8 mt-4">
            <h2 class="title text-uppercase"> {{$comic['title']}} </h2>
            <div class="row py-4">
                <div class="col-8 d-flex justify-content-between price_container">
                    <div class="price white_text"> <span>U.S. Price: </span> {{$comic['price']}} </div>
                    <div class="status">Available</div>
                </div>
                <div class="col-4 text-center price_container">
                    <p class="white_text">Check Availability</p>
                </div>
            </div>
            <p> {{$comic['description']}} </p>
        </div>
        <div class="col-4">
            <p class="text-end">ADVERTISMENT</p>
            <img class="pad_l_7" src="{{asset('img/adv.jpg')}}" alt="">
        </div>
    </div>
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