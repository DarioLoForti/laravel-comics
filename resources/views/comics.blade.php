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
    </main>

    @include('partials.footer')
</body>

</html>
