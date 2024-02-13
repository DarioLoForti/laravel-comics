@extends('layout.app')

@section('content')
    <div class="jumbo">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="movie-content">
                    @foreach ($series as $serie)
                        <div class="card-movie">
                            <img src="{{ $serie['poster_path'] }}" alt="{{ $serie['title'] }}">
                            <h5> {{ $serie['title'] }}</h5>
                            <h5> {{ $serie['release_date'] }}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
