<header class="dark-bb">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/img/logo-light.png') }}"
                alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
            aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icon ion-md-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="headerMenu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        Home
                    </a>

                </li>

                <!--li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Exchange
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="exchange-dark.html">Exchange</a>
              <a class="dropdown-item" href="exchange-dark-live-price.html">Exchange Live Price</a>
              <a class="dropdown-item" href="exchange-dark-ticker.html">Exchange Ticker</a>
              <a class="dropdown-item" href="exchange-dark-fluid.html">Exchange Fluid</a>
            </div>
          </li--->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Markets
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/markets') }}">Markets</a>
                        <!---a class="dropdown-item" href="market-capital-dark.html">Markets Line</a>
              <a class="dropdown-item" href="market-capital-bar-dark.html">Markets Bar</a>
              <a class="dropdown-item" href="market-overview-dark.html">Market Overview</a>
              <a class="dropdown-item" href="market-screener-dark.html">Market Screener</a--->
                        <a class="dropdown-item" href="{{ url('/market-crypto') }}">Market Crypto</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about-us') }}" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        About Us
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/terms-condition') }}" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        Terms & Conditions
                    </a>

                </li>
                {{-- @guest
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        Mining Wall
                    </a>
                </li>
                  @else --}}
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/minning-wall') }}" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        Mining Wall
                    </a>

                </li>
                {{-- @endguest --}}
               

                <!--li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Dashboard
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="settings-profile-dark.html">Profile</a>
              <a class="dropdown-item" href="settings-wallet-dark.html">Wallet</a>
              <a class="dropdown-item" href="settings-dark.html">Settings</a>
            </div>
          </li--->

                <!--li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Others
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="signin-dark.html">Sign in</a>
              <a class="dropdown-item" href="signup-dark.html">Sign up</a>
                <a href="about-us.html" class="dropdown-item">About Us</a>
                <a href="terms-condition.html" class="dropdown-item">Terms & Conditions</a>
            </div>
          </li-->
            </ul>

            @guest
                <ul class="navbar-nav ml-auto">
                    <a href="{{ url('/login') }}" class="btn-1">Sign In</a>
                    <a href="{{ url('/register') }}" class="btn-2">Get Started</a>

                </ul>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        {{-- < class="d-flex flex-column justify-content-start align-items-center"> --}}
                          $0.00
                        {{-- </div> --}}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                      <div class="profile-name text-center text-white">{{ Auth::user()->name }}</div>
                      <div class="dropdown-divider"></div>
                        {{-- <div class="dropdown-menu"> --}}
                            <a class="dropdown-item pl-3" href="{{ url('/profile') }}">Profile</a>
                            <a class="dropdown-item pl-3" href="{{ url('/wallet') }}">Wallet</a>
                            <a class="dropdown-item pl-3" href="{{ url('/settings') }}">Settings</a>
                        {{-- </div> --}}
                    </div>
                </li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"
                    class="btn-2">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </div>
    </nav>
</header>
