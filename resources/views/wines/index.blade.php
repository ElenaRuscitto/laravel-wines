@extends('layout.main')


@section('content')

    <div class="container">


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
    </tbody>
</table>








































        <h1 class="text-center text-white py-5">BEST SELLER</h1>

        <div class="row  row-cols-3 d-flex  justify-content-center ">
            @foreach ($wines as $wine )
                <div class="card d-flex col-4 bg-light m-3 mb-5" style="width: 18rem;">

                    <div class="m-3">
                        <img src="{{$wine->image}}" class="card-img-top h-100" alt="...">
                    </div>

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

        <div class="row justify-content-center">
            <div class="col-md-6">
                {{ $wines->links('pagination::bootstrap-5') }}
            </div>
        </div>

    </div>

@endsection
