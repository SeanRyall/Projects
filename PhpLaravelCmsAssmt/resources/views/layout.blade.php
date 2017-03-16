<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Document</title>

    {{--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">--}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    {{--<link rel="stylesheet" href="/css/style.css">--}}

    @yield('header')

</head>

<body>

    <div class="container">

    @yield('content')

    </div>


    @yield('footer')

</body>

</html>