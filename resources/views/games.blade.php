@extends('layout.app')

@section('content')
    <div class="jumbo">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="movie-content">
                    @foreach ($games as $game)
                        <div class="card-movie">
                            <img src="{{ $game['poster_path'] }}" alt="{{ $game['title'] }}">
                            <h5> {{ $game['title'] }}</h5>
                            <h5> {{ $game['release_date'] }}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
