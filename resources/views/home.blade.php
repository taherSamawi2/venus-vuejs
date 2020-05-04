<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
    <title>Home</title>
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/site-style.css">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="app">
</div>

{{--<script src="/js/jquery-3.3.1.js"></script>--}}
{{--<script src="/js/popper.min.js"></script>--}}
{{--<script src="/js/bootstrap.min.js"></script>--}}
<script src="/js/main.js"></script>

<script src="{{asset('js/app.js') }}"></script>
<script>
    $(function () {
        'use strict'
        var winHeight = $(window).height();
        $('.header .carousel-item').height(winHeight);
    });
</script>
</body>
</html>

