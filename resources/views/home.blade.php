@extends('layout.main')


@section('content')

<div class="container d-flex flex-wrap justify-content-center ">

    <h1 class="text-center">BEST SELLER</h1>

    @foreach ($wines as $wine )
<div class="card col-4 m-3" style="width: 18rem;">
    <img src="{{$wine->image}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$wine->wine}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$wine->winery}}</h6>
      <p class="card-text">{{$wine->rating_average}}</p>
      <p class="card-text">{{$wine->rating_reviews}}</p>
      <p class="card-text">{{$wine->location}}</p>
    </div>
  </div>
@endforeach
</div>
@endsection
