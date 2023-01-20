<div class="app-header">
    <div class="navbar navbar-expand-lg">
        <div class="menu d-md-none d-block" data-toggle="modal" data-target="#aside">
            <svg class="icon">
                <use xlink:href="{{ asset('images/sprite.svg') }}#bars" />
            </svg>
        </div>
        <div class="app-navbar" id="app-navbar">
            <div class="navbar-brand">
                <script>
                    if (window.innerWidth > 960) {
                        document.getElementById("app-navbar").innerHTML =
                            '<i class="fa fa-bars" aria-hidden="true" style="font-size:35px;color: var(--theme-color)"></i>';
                    } else {
                        document.getElementById("app-navbar").innerHTML =
                            '<a href="https://watcha.movie" class="navbar-brand"><img src="https://watcha.movie/public/static/logo.png?v=3.0.0" alt="Watch A Movie" style="height:50px;width:auto;"></a>';
                    }
                </script>
            </div>
        </div>
        <div class="search-btn d-md-none d-block">
            <svg class="icon">
                <use xlink:href="{{ asset('images/sprite.svg') }}#search" />
            </svg>
        </div>
        <form class="header-search input-group d-md-block d-none" method="post"
            action="https://demo.codelug.com/wovie/search" id="navbarToggler">
            <div class="typeahead__container app-search">
                <div class="typeahead__field">
                    <div class="typeahead__query">
                        <label for="search-input" class="btn px-0 mb-0" aria-label="Search">
                            <svg class="icon">
                                <use xlink:href="{{ asset('images/sprite.svg') }}#search" />
                            </svg>
                        </label>
                        <input class="video-search form-control" name="q" type="text" id="search-input"
                            placeholder="Search .." autocomplete="off">
                        <button type="button" class="btn close-btn d-md-none d-block px-0" aria-label="Close">
                            <svg class="icon">
                                <use xlink:href="{{ asset('images/sprite.svg') }}#close" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <ul class="navbar-nav navbar-user ml-auto align-items-center text-nowrap">
            @auth()
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}#collections" aria-label="Collections">
                        <svg class="icon">
                            <use xlink:href="{{ asset('images/sprite.svg') }}#bookmark" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle notification-btn" href="#" role="button"
                        id="dropdown-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        aria-label="Notifications">
                        <svg class="icon">
                            <use xlink:href="{{ asset('images/sprite.svg') }}#bell" />
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-notification dropdown-menu-{{ isAr() ? 'left' : 'right' }}"
                        aria-labelledby="dropdown-notification">
                        <div class="notifications">
                            <div class="text-center">
                                Empty Notifications </div>
                        </div>
                        <a href="{{ route('notifications') }}" class="all text-center">
                            All</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-profile dropdown-toggle pr-md-0" href="#" role="button"
                        id="dropdown-profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        aria-label="Profile">
                        <div>
                            <div class="avatar avatar-sm" style="">{{ authNameFirstLetter() }}</div>
                        </div>
                        <div class="profile-text">
                            <div class="profile-head">
                                Hello,</div>
                            <div class="text-nowrap">
                                {{ authName() }} </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-profile" aria-labelledby="Dropdown Profile">
                        @if (isAdmin())
                            <a class="dropdown-item" href="{{ route('filament.pages.dashboard') }}">
                                Admin panel</a>
                        @endif
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('profile') }}">
                            الصفحة الشخصية
                        </a>
                        <a class="dropdown-item" href="{{ route('profile') }}#collections">
                            Collections</a>
                        <a class="dropdown-item" href="{{ route('notifications') }}">
                            Notifications</a>
                        <a class="dropdown-item" href="{{ route('settings') }}">
                            Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}">
                            Logout</a>
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}" aria-label="Register">
                        Register </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" aria-label="Login">
                        Login </a>
                </li>
            @endauth
        </ul>
    </div>
</div>
