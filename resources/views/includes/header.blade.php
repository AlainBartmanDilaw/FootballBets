<div class="container">
    <span class="navbar-brand-center">Football Bets</span>
    <span class="navbar-brand-right">© Copyright 2019-2020 Bartman Dilaw Alain & Ben-Oït (n'est ce pas !)</span>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        {{--    <div class="topnav">--}}
        <a class="navbar-brand" href="/home">Home</a>
        <a class="navbar-brand" href="/about">{{ __('message.About') }}</a>
        <a class="navbar-brand" href="/contact">Contact</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a id="navbarddLanguage" class="navbar-brand dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ __('message.ChampionShip') }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/locale/en">
                        UEFA Champions League
                    </a>
                    <a class="dropdown-item" href="/locale/fr">
                        UEFA Europa League
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a id="navbarddLanguage" class="navbar-brand dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ __('message.Language') }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/locale/en">
                        English
                    </a>
                    <a class="dropdown-item" href="/locale/fr">
                        Français
                    </a>
                </div>
            </li>
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="navbar-brand nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="navbar-brand nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="navbar-brand dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->username }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

        </ul>
    </nav>
{{--    <main class="py-4">--}}
{{--        @yield('content')--}}
{{--    </main>--}}
</div>
