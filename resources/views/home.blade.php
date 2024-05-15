@extends('layout.main')


@section('content')

    <div class="container">

    <h1 class="text-center text-white py-5">BEST SELLER</h1>

    <div class="row  row-cols-3 ">
        @foreach ($wines as $wine )
            <div class="card d-flex col-4 m-3" style="width: 18rem;">
                <img src="{{$wine->image}}" class="card-img-top h-100" alt="...">

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

    </div>

@endsection
