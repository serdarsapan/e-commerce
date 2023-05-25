<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Women's Dress | Women's Clothing | Women's Fashion | H&M</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('header')
@include('footer')
@include('sidebar')

<header>
    <div class="container">
        <div class="row">
            @yield('head')
        </div>
    </div>
</header>

<aside class="page-sidebar">
    @yield('sidebar')
</aside>

<div class="container">
    @include('gender.indexWoman')
</div>

<footer>
    <div class="container">
        @yield('footer')
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
