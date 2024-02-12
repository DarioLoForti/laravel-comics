<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('partials.header')

    <main>
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
    </main>

    @include('partials.footer')
</body>

</html>
