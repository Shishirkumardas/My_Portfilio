<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('My-Blog')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset('/')}}css/all.css"/>
    <link rel="stylesheet" href="{{asset('/')}}css/style.css"/>

</head>
<body>
<nav class="navbar navbar-expand-md navbar-transparent bg-transparent">
    <div class="container">
        <a href="" class="navbar-brand text-warning fw-bold">SHISHIR</a>
        <ul class="navbar-nav">
            <li><a href="{{route('portfolio')}}" class="nav-link">Portfolio</a> </li>
            <li><a href="{{route('hobbies')}}" class="nav-link">Hobbies</a> </li>
            <li><a href="{{route('cv')}}" class="nav-link">CV</a> </li>
            <li></li>
            <li></li>
        </ul>
    </div>
</nav>
@yield('body')

<script src="resources/js/bootstrap.bundle.js"></script>
</body>
</html>
