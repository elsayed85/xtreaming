<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#111113">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="robots" content="index,follow" />
    <meta http-equiv="cleartype" content="on">
    <link rel="dns-prefetch" href="//ajax.googleapis.com" />
    <link rel="dns-prefetch" href="//www.googletagmanager.com" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    @include('layouts.includes.fonts')
    <link as="style" media="all" rel="stylesheet" href="{{ asset('css/theme.css') }}" type="text/css"
        crossorigin="anonymous" defer="">
    <script type="text/javascript">
        var _Auth = true;
        var __ = function(msgid) {
            return window.i18n[msgid] || msgid;
        };
        window.i18n = {
            'more': 'more',
            'less': 'less'
        };
        var ad_vast = '';
    </script>
    <style type="text/css">
        :root {
            --theme-color: #864bfc;
            --background: #864bfc;
            --movie-aspect: 150%;
            --people-aspect: 100%;
            --slide-aspect: 60vh;
        }

        @media (min-width: 1400px) {
            .container {
                max-width: 1600px !important;
            }
        }
    </style>
</head>

<body class="layout">
    <div id="loading-bar"></div>
    <div class="layout-skin"></div>
    <div class="container">
        <div class="layout-app">
            <div class="row gx-lg-3 gx-0">

                <div class="col-lg-auto">
                    <!---- SideBar ---->
                    <div class="w-lg-250">
                        @include('layouts.includes.sidebar')
                    </div>
                </div>

                <div class="col-md">
                    <nav class="navbar navbar-expand-lg layout-header navbar-dark mb-lg-2 d-lg-flex">
                        <div class="collapse navbar-collapse" id="navbar">
                            <form class="form-search w-lg-300 py-1 mb-3 mb-lg-0"
                                action="https://demo.codelug.com/xtreaming/search" method="post">
                                <div class="input-group input-group-inline shadow-none">
                                    <span class="input-group-text bg-transparent border-0 text-gray-500 shadow-none">
                                        <svg width="18" height="18" stroke="currentColor" stroke-width="1.75"
                                            fill="none">
                                            <use
                                                xlink:href="{{ asset('images/icons.svg') }}#search">
                                            </use>
                                        </svg>
                                    </span>
                                    <input type="text" name="q"
                                        class="form-control form-control-flush bg-transparent border-0 ps-0"
                                        id="search" placeholder="Search .." aria-label="Search" required="true"
                                        minlength="3">
                                </div>
                            </form>
                            <ul class="navbar-nav mb-2 mb-lg-0 fw-semibold flex-row align-items-lg-center ms-xl-auto">
                                <li class="nav-item">
                                    <a href="https://demo.codelug.com/xtreaming/login" class="nav-link fs-sm fw-normal">
                                        Login</a>
                                </li>
                                <li class="nav-item ms-lg-0 ms-3">
                                    <a href="https://demo.codelug.com/xtreaming/register"
                                        class="nav-link fs-sm fw-normal">
                                        Sign up</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!---- Main ---->
                    @yield('main')
                </div>
                <!---- footer ---->
                <div class="py-3">
                    @include('layouts.includes.footer')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/lazysizes.js') }}"></script>
    <script src="{{ asset('js/jquery.snackbar.js') }}"></script>
    <script src="{{ asset('js/jquery.range.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    @yield('after_js')
    <script src="{{ asset('js/main.js') }}"></script>
    <div class="modal-box">
        <div class="modal-box-content text-center">
            <img src="https://demo.codelug.com/xtreaming/app/theme/assets/img/adblock.webp" class="mb-4"
                width="80px" height="80px">
            <h3 class="h3 mb-2">Adblock Detected</h3>
            <div class="text-muted">Please disable AdBlock to proceed to the destination page</div>
        </div>
    </div>
    <button type="button" class="btn btn-square btn-scroll btn-lg rounded-circle">
        <svg width="18" height="18" fill="currentColor">
            <use xlink:href="{{ asset('images/icons.svg') }}#up"></use>
        </svg>
    </button>
    <div class="modal" id="xl" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <div class="modal" id="lg" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <div class="modal" id="m" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <div class="modal" id="sm" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
            </div>
        </div>
    </div>
</body>

</html>
