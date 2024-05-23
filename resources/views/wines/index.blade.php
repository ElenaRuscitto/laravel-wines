@extends('layout.main')

@section('content')


<div class="container">

    <h1 class="text-center text-white py-5">BEST SELLER</h1>

    <div class="row  row-cols-3 d-flex  justify-content-center ">


        <table class="table">
            <thead>

              <tr>

                <th scope="col">Nome Vino</th>
                <th scope="col">Cantina</th>
                <th scope="col">Voto medio</th>
                <th scope="col">Voti tot.</th>
                <th scope="col">Paese di Origine</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($wines as $wine )
                    <tr>

                        <td>{{$wine->wine}}</td>
                        <td>{{$wine->winery}}</td>
                        <td>{{$wine->rating_average}}</td>
                        <td>{{$wine->rating_reviews}}</td>
                        <td>{{$wine->location}}</td>

                        <td>
                            <div class="d-flex ">
                                <a class="btn btn-success " href="{{route('wines.show', $wine->id)}}"><i class="fa-solid fa-eye"></i></a>
                                <button class="btn btn-warning mx-2"><i class="fa-solid fa-pencil"></i></button>

                                <form action="{{route('wines.destroy', $wine)}}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-danger "><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </div>

                        </td>

                    </tr>
                @endforeach
            </tbody>
          </table>


          <div class="row justify-content-center">
            <div class="col-md-6">
                {{ $wines->links('pagination::bootstrap-5') }}
            </div>
        </div>















@endsection
