<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site Home</title>
</head>
<body>

<header>

    <h1>Home Page</h1>



<nav>



            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/users') }}">Users</a></li>
                <li><a href="{{ url('/articles') }}">Articles</a></li>
                <li><a href="{{ url('/pages') }}">Pages</a></li>
                <li><a href="{{ url('/contentareas') }}">Content Areas</a></li>
                <li><a href="{{ url('/csstemplates') }}">CSS Templates</a></li>
                <li><a href="{{ url('/') }}">Site</a></li>
            </ul>
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