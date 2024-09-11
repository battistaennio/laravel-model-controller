{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <div class="card text-center">
            <div class="card-header">
            </div>
            <div class="card-body">
                <h5 class="card-title"> {{ $movie->title }} </h5>
                <p class="card-text">Questa è la trama del film {{ $movie->title }}, con titolo originale
                    {{ $movie->original_title }} un film molto bello bellissimo</p>
                <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
            </div>
            <div class="card-footer text-body-secondary">

            </div>
        </div>

    </div>
@endsection


@section('titlePage')
    Film Datati
@endsection
