@extends('layout.main')

@section('content')


<div class="container bg-white ">
    <h1 class="text-center  py-5">{{$wine->wine}}</h1>
    <div class="d-flex justify-content-center ">
        <div class="me-5">
            <h4 class="">Cantina: {{$wine->winery}}</h4>
            <p class="">Voto medio: {{$wine->rating_average}}</p>
            <p class="">Voti tot: {{$wine->rating_reviews}}</p>
            <p class="">Paese di Origine: {{$wine->location}}</p>
        </div>
        <div class="ms-5">
            <img src="{{$wine->image}}" alt="">
        </div>

    </div>






</div>

















@endsection
