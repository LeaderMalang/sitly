<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Hello, world!</title>
</head>
<body>
@include('layouts.navbar')
@yield('content')

<script src="{{asset('js/slim.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>
