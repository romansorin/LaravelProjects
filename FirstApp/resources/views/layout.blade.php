<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'LaravelApp')</title>
</head>
<body>
    @yield('content')

    <ul>
    	<li><a href="/">Home</a></li>
        <li><a href="/contact">Contact</a> us to learn more.</li>
        <li><a href="/about">About</a></li>
    </ul>
</body>
</html>
