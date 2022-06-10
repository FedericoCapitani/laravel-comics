@extends('layouts.app')

@section('content')
<div class="bg_main">
    <div class="container pt-5">
        <div class="current_series py-2 px-4">
            CURRENT SERIES
        </div>
        <div class="row">
            @foreach($comics as $index => $comic)
            <div class="col-2">
                <a href="{{route('comics', $index)}}">
                    <div class="h_200">
                        <img src="{{$comic['thumb']}}" alt="" class="p_1 h_150">
                    </div>
                    <p> {{$comic['series']}} </p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-2 load_more p-2 mb-4">
                <a href="">LOAD MORE</a>
            </div>
        </div>
    </div>
</div>
<div class="bg_primary">
    <div class="container">
        <div class="row d-flex">
            <div class="col_custom_5 d-flex justify-content-center">
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <p>DIGITAL COMICS</p>
            </div>
            <div class="col_custom_5 d-flex justify-content-center">
                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                <p>DC MERCHANDISE</p>
            </div>
            <div class="col_custom_5 d-flex justify-content-center">
                <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                <p>SUBSCRIPTION</p>
            </div>
            <div class="col_custom_5 d-flex justify-content-center">
                <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                <p>COMIC SHOP LOCATOR</p>
            </div>
            <div class="col_custom_5 d-flex justify-content-center">
                <img style="width: 30%" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                <p>DC POWER VISA</p>
            </div>
        </div>
    </div>
</div>
@endsection