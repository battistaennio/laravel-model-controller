{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
    <div class="container my-5">
        <h1>Titolo</h1>

        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque alias sit distinctio fugit quisquam ducimus
            quas. Iste labore, magnam laboriosam, eaque ex alias nihil perferendis sed recusandae pariatur reiciendis
            voluptate!
        </p>
    </div>
@endsection


@section('titlePage')
    home
@endsection
