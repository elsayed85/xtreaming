<!DOCTYPE html>
<html lang="ACTIVE_LANG">

<head>
    <title> Page not found </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Page not found">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta name="theme-color" content="#000">
    <meta name="HandheldFriendly" content="True">
    <meta http-equiv="cleartype" content="on">
    <link rel="canonical" href="{{ url('/') }}/404">
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//ajax.googleapis.com" />
    <link rel="dns-prefetch" href="//www.googletagmanager.com" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link rel="dns-prefetch" href="//code.jquery.com" />
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link as="style" media="all" rel="stylesheet preload prefetch" href="{{ asset('css/app.css') }}"
        type="text/css" crossorigin="anonymous" />
    @include('layouts.includes.fonts')

    <style type="text/css">
        :root {
            --theme-color: #f5c518;
            --button-color: #f5c518;
            --background-color: #f5c518;
        }
    </style>
    <link rel="shortcut icon" href="{{ asset('images/logo.svg') }}">
</head>

<body>
    <a class="skip-link d-none" href="#maincontent">Skip</a>
    <div class="d-flex align-items-center justify-content-center flex-column vh-100 noting">
        <div class="d-flex align-items-center justify-content-center flex-column vh-100 noting">
            <div class="glitch" data-text="404">404</div>
            <div class="glitch glitch-p" data-text="Page not found">Page not found</div>
            <a href="/">Homepage Go</a>
        </div>
    </div>
</body>

</html>
