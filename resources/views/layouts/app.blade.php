<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="//////////////">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta name="theme-color" content="#000">
    <meta name="HandheldFriendly" content="True">
    <meta http-equiv="cleartype" content="on">
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//ajax.googleapis.com" />
    <link rel="dns-prefetch" href="//www.googletagmanager.com" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link rel="dns-prefetch" href="//code.jquery.com" />
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link as="style" media="all" rel="stylesheet preload prefetch" href="{{ asset('css/app.css') }}"
        type="text/css" crossorigin="anonymous" />

    @if (isAr())
        <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">
    @endif

    @include('layouts.includes.fonts')
    @livewireStyles
    @yield('after_css')

    <script type="text/javascript">
        var _URL = "{{ url('/') }}";
        var _ASSETS = "{{ asset('/') }}";
        var _Auth = true;
        var __ = function(msgid) {
            return window.i18n[msgid] || msgid;
        };
        window.i18n = {
            'No comments yet': 'No comments yet',
            'You must sign in': 'You must sign in',
            'Follow': 'Follow',
            'Following': 'Following',
            'Show more': 'Show more',
            'Show less': 'Show less',
            'no results': 'no results',
            'Results': 'Results',
            'Comment': 'Comment',
            'Actors': 'Actors',
        };
    </script>
    <style type="text/css">
        :root {
            --theme-color: #f5c518;
            --button-color: #f5c518;
            --background-color: #f5c518;
        }
    </style>
    <style type="text/css">
        /* :root {
            --theme-color: #967cf3;
            --button-color: #11a0e3;
            --background-color: #1215ff;
        } */

        body {
            margin: auto;
        }

        .app {
            border-radius: 0;
        }

        .app .navbar {
            position: fixed;
            top: 0;
            z-index: 999999;
            background: black;
            width: 1250px;
            transition-duration: .5s;
        }

        .app .app-wrapper {
            display: flex;
            margin-top: 55px;
        }

        @media(min-width:540px) {
            .app .navbar {
                max-width: 540px
            }
        }

        @media(min-width:576px) {
            .app .navbar {
                max-width: 540px
            }
        }

        @media(min-width:768px) {
            .app .navbar {
                max-width: 720px
            }
        }

        @media(min-width:992px) {
            .app .navbar {
                max-width: 1170px
            }
        }

        @media(min-width:1200px) {
            .app .navbar {
                max-width: 1270px
            }
        }
    </style>
    <link rel="shortcut icon" href="{{ asset('images/logo.svg') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <a class="skip-link d-none" href="#maincontent">Skip</a>
    <div class="container">
        <div class="app">
            @include('layouts.includes.header')
            <div class="app-wrapper">
                <div class="hide-me">
                    @include('layouts.includes.sidebar')
                </div>
                <div class="app-container flex-fill">
                    <div class="container">
                        @yield('main')
                    </div>
                </div>
            </div>
            @include('layouts.includes.footer_fixed_ads')
        </div>
    </div>
    @include('layouts.includes.footer')
    <div class="scroll-up">
        <svg>
            <use xlink:href="{{ asset('images/sprite.svg') }}#caret-up" />
        </svg>
    </div>

    <div class="modal" id="m" tabindex="-1" aria-labelledby="m" aria-hidden="true" data-backdrop="static">
        <button class="modal-close" data-dismiss="modal">
            <svg class="icon">
                <use xlink:href="{{ asset('images/sprite.svg') }}#close" />
            </svg>
        </button>
        <div class="modal-dialog modal-dialog-centered">
        </div>
    </div>
    <div class="modal" id="lg" tabindex="-1" aria-labelledby="m" aria-hidden="true" data-backdrop="static">
        <button class="modal-close" data-dismiss="modal">
            <svg class="icon">
                <use xlink:href="{{ asset('images/sprite.svg') }}#close" />
            </svg>
        </button>
        <div class="modal-dialog modal-dialog-centered modal-lg">
        </div>
    </div>
    @livewireScripts
    @include('layouts.includes.scripts')
    <script>
        if (window.innerWidth > 960) {
            document.getElementById("app-navbar").innerHTML =
                '<div class="bar_icon" ><i class="fa fa-bars" aria-hidden="true" style="font-size:35px;color: var(--theme-color)"></i></div><a href="{{ route('index') }}" class="navbar-brand"><img src="{{ asset('images/logo.svg') }}"style="height:50px;width:auto;"></a>';
        } else {
            console.log("small");
            document.getElementById("app-navbar").innerHTML =
                '<a href="{{ route('index') }}" class="navbar-brand"><img src="{{ asset('images/logo.svg') }}"style="height:50px;width:auto;"></a>';
        }
    </script>
    <script>
        var lastScrollTop; // This Varibale will store the top position

        navbar = document.getElementById('navbar'); // Get The NavBar

        window.addEventListener('scroll', function() {
            //on every scroll this funtion will be called

            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            //This line will get the location on scroll

            if (scrollTop > lastScrollTop) { //if it will be greater than the previous
                navbar.style.top = '-80px';
                //set the value to the negetive of height of navbar
            } else {
                navbar.style.top = '0';
            }

            lastScrollTop = scrollTop; //New Position Stored
        });
    </script>
    @if (session('success'))
        <script type="text/javascript">
            Snackbar.show({
                text: "{{ session('success') }}",
                customClass: "bg-success",
            });
        </script>
    @endif
    @if (session('error'))
        <script type="text/javascript">
            Snackbar.show({
                text: "{{ session('error') }}",
                customClass: "bg-danger",
            });
        </script>
    @endif
    @if (session('warning'))
        <script type="text/javascript">
            Snackbar.show({
                text: "{{ session('warning') }}",
                customClass: "bg-warning",
            });
        </script>
    @endif
</body>

</html>
