@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <img src="{{asset('img/jumbotron.jpg')}}" alt="">
</div>

<div class="bg_main">
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-2">
                <div class="h_200">
                    <img src="{{$comic['thumb']}}" alt="" class="p_1 h_150">
                </div>
                <p> {{$comic['series']}} </p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection