<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content={{ csrf_token() }}>
        <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>
            <link href={{ mix('/css/app.css') }} rel="stylesheet">
        <style>
            
        </style>
    </head>
    <body>
        <div id="app">
            <header-component></header-component>
        </div>
    </body>
    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}" defer></script>
</html>
