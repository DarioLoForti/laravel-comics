@extends('layout.app')

@section('content')
    <div class="jumbo">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="movie-content">
                    @foreach ($movies as $movie)
                        <div class="card-movie">
                            <a href="{{ route('detail-movie', ['param' => $movie['id']]) }}">
                                <img src="{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}">
                                <h5> {{ $movie['title'] }}</h5>
                                <h5> {{ $movie['release_date'] }}</h5>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
