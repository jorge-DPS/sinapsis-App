<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Sinapsis - @yield('titulo')</title>

    </head>
    <body class="bg-red-50">
        <nav>
            <a href="./views/Tienda">tienda</a>
        </nav>

        <h1 class="text-4xl">@yield('titulo')</h1>
    </body>
</html>