<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet"/>
{{--    <link rel="stylesheet" href="{{ asset('/css/dataTables.bootstrap4.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

</head>
<body>
<div id="dashboard">
</div>
<script src="{{asset('js/dashboard.js') }}"></script>
{{--<script src="{{asset('/js/query.dataTables.min.js') }}"></script>--}}
{{--<script src="{{asset('/js/dataTables.bootstrap4.min.js') }}"></script>--}}
<script src="{{asset('/js/main.js') }} "></script>

</body>
</html>

