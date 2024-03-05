@extends('layouts.index')

@section('container')
    <div class="row pt-4">
        <div class="col-md-3">
            <img src="{{ $movie['poster_url'] }}" class="img-thumbnail" alt="">
        </div>
        <div class="col-md-8">
            <h2>{{ $movie['title'] }}</h4>
            <p>{{ $movie['description'] }}</p>
            <li >Release Year : {{ Str::of($movie['release_date'])->limit(4,'') }} </li>
            <li >Age Rating   : {{ $movie['age_rating'] }}</li>
            <li >Price        : {{ Number::format($movie['ticket_price']) }}</li>
        </div>
    </div>


@endsection

