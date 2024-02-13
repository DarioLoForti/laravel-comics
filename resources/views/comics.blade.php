@extends('layout.app')

@section('content')
    <div class="jumbo">
    </div>
    <div class="container">
        <div class="row">
            <button class="btn-top">current series</button>
            <div class="col-12">
                <div class="comic-content">
                    @foreach ($comics as $comic)
                        <div class="card">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <h5> {{ $comic['series'] }}</h5>
                        </div>
                    @endforeach
                </div>
                <div class="btn">
                    <button>Load More</button>
                </div>
            </div>
        </div>
    </div>
@endsection
