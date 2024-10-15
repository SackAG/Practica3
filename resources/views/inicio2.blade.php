<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    @include('menu')
    @yield('contenidouno')
    @yield('contenidodos')
    @yield('contenidotres')
    @yield('contenidocuatro')
    @yield('contenidocinco')
</body>
</html>