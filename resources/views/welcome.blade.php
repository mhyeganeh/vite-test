<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/scss/app.scss')
    </head>
    <body>
        <h1>Hello Vite!</h1>
        <div class="version">
            Should have digital font: <span class="digit-font">Ver. 3.0.0</span>
        </div>
        <p>Logo should be displayed below:</p>
        <div class="logo-wrapper"></div>
    </body>
    @vite('resources/js/app.js')
</html>
