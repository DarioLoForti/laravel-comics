<header>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
            </div>
            <div class="menu">
                <ul class="list-unstyled d-flex">
                    <li>
                        <a class="{{ Route::currentRoutename() === 'Characters' ? 'navtext' : '' }}"
                            href="#">Characters</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'Comics' ? 'navtext' : '' }}"
                            href="#">Comics</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'Movies' ? 'navtext' : '' }}"
                            href="#">Movies</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'Tv' ? 'navtext' : '' }}" href="#">Tv</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'Games' ? 'navtext' : '' }}" href="#">Games</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'COllectibles' ? 'navtext' : '' }}"
                            href="#">COllectibles</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'Videos' ? 'navtext' : '' }}"
                            href="#">Videos</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'Fans' ? 'navtext' : '' }}" href="#">Fans</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'News' ? 'navtext' : '' }}" href="#">News</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRoutename() === 'Shop' ? 'navtext' : '' }}" href="#">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
