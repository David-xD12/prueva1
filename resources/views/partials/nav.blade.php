<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <style>
        .active{
            color:red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li class="{{ setActive('home') }}"><a href="/">Home</a></li>
            <li class="{{ setActive('about') }}"><a href="/about">About</a></li>
            <li class="{{ setActive('portfolio') }}"><a href="/portfolio">Portafolio</a></li>
            <li class="{{ setActive('contact') }}"><a href="/contact">Contact</a></li>
        </ul>
    </nav>
   
</body>
</html>