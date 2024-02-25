<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vitereactrefresh
        @vite('resources/js/app.js')
        <title>Laravel</title>
    </head>
    <body>
        <div id="prueba"></div>
    </body>
</html>
