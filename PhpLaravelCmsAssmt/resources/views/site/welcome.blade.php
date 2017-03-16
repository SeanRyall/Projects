<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site Home</title>
</head>
<body>

<header>

    {{--@if()--}}
    <h1>Home Page</h1>

    {{--@foreach ($pages as $page)--}}

        {{--<div>--}}
            {{--<h2><a href="/pages/{{ $page->id }}" >{{ $page->name }}</a></h2>--}}

<nav>

    @foreach ($pages as $page)

            <ul class="nav navbar-nav">
                <li><a href="/{{ $page->alias }}">{{ $page->name }}</a></li>
            </ul>
    @endforeach
</nav>

</header>

<h1>This will be the home page</h1>



<a class="navbar-brand" href="{{ url('/home') }}">
    Backend site
</a>
<?php

?>

<footer><a href="{{ url('/login') }}">Login</a></footer>
</body>
</html>