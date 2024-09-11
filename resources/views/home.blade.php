{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
    <div class="container my-5">
        <h1>{{ $title }}</h1>

        <div class="row justify-content-center">

            @foreach ($movies as $movie)
                <div class="card text-center m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                        <p class="card-text">
                            @if (str_contains($movie->nationality, 'american/british'))
                                Americano/Inglese
                            @else
                                Americano
                            @endif
                        </p>
                        <p class="card-text">{{ date('d/m/Y', strtotime($movie->date)) }}</p>
                        <p class="card-text">{{ $movie->vote }}/10</p>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection


@section('titlePage')
    home
@endsection
