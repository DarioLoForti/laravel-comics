<header>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
            </div>
            <div class="menu">
                <ul class="list-unstyled d-flex">
                    <li>
                        <a class="{{ Route::currentRoutename() === 'home' ? 'navtext' : '' }}"
                            href="{{ route('home') }}">Characters</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'comics' ? 'navtext' : '' }}"
                            href="{{ route('comics') }}">Comics</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'movies' ? 'navtext' : '' }}"
                            href="{{ route('movies') }}">Movies</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'series' ? 'navtext' : '' }}"
                            href="{{ route('series') }}">Tv</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'games' ? 'navtext' : '' }}"
                            href="{{ route('games') }}">Games</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'collectibles' ? 'navtext' : '' }}"
                            href="#">Collectibles</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'videos' ? 'navtext' : '' }}"
                            href="#">Videos</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'fans' ? 'navtext' : '' }}" href="#">Fans</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'news' ? 'navtext' : '' }}" href="#">News</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'shop' ? 'navtext' : '' }}" href="#">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
