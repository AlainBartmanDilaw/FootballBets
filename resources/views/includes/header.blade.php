<header class="row">
  <div class="container">
      <span class="navbar-brand-center">Football Bets</span>
      <span class="navbar-brand-right"></span>
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
          {{--    <div class="topnav">--}}
          <a class="navbar-brand" href="/">{{ __('message.Home') }}</a>
          <a class="navbar-brand" href="/About">{{ __('message.About') }}</a>
          <a class="navbar-brand" href="/Contact">{{ __('message.Contact') }}</a>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a id="navbarddLanguage" class="navbar-brand dropdown-toggle" href="#" role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ __('message.ChampionShip') }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/">
                          Euro 2020
                      </a>
                      <a class="dropdown-item" href="/">
                          Coupe du Monde 2022
                      </a>
                  </div>
              </li>
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="navbar-brand nav-link" href="{{ route('login') }}">{{ __('message.Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="navbar-brand nav-link" href="{{ route('register') }}">{{ __('message.Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="navbar-brand dropdown-toggle" href="#" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->username }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @if (Auth::user()->admin === 1)
                        <a class="dropdown-item" href="Admin">
                            {{ __('message.Administrator') }}
                        </a>
                        @endif
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                              {{ __('message.Logout') }}
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
</header>
