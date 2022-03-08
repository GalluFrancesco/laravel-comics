@extends('layouts.default')


@section('main')

<div class="card-container">
@foreach($comics as $comic)
    <div class="card txt-style">  
        <img src="{{$comic['thumb'] }}" alt="">   
        <h4> {{ $comic['title'] }} </h4>
    </div>
@endforeach
</div>
@include("partials.merchbox")
@endsection