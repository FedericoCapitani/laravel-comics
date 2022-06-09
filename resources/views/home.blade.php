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
                <img src="{{$comic['thumb']}}" alt="">
                <p> {{$comic['series']}} </p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection