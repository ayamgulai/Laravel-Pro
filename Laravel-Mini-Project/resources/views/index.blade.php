@extends('layouts.index')

@section('container')
    <div class="row">
    @foreach($movies as $m)
        <div class="col-lg-3 mb-2">
            <div class="card p-1" style="width: 18rem;">
                <img src="{{ $m["poster_url"] }}" class="card-img-top" alt="Poster {{ $m['title'] }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $m['title'] }}</h5>
                  <p class="card-text">{{ Str::words($m['description'],8,'') }} <a href="" class=" text-decoration-none text-secondary"><span class="small" >...Baca selengkapnya</span></a></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Release Year : {{ Str::of($m['release_date'])->limit(4,'') }} </li>
                    <li class="list-group-item">Age Rating   : {{ $m['age_rating'] }}</li>
                    <li class="list-group-item">Price        : {{ Number::format($m['ticket_price']) }}</li>
                </ul>
                <div class="card-body">
                  <a href="/movie/{{ $m['id'] }}" class="card-link btn btn-info">Details</a>
                  <a href="#" class="card-link btn btn-warning">Purchase    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
