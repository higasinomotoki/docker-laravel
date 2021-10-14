<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content={{ csrf_token() }}>
        <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href={{ mix('/css/app.css') }} rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <table class="table">
                <tr>
                    <th>タイトル</th>
                    <th>test</th>
                    <th>test</th>
                </tr>
            @foreach($records as $record)
                <tr>
                    <th>{{ $record->title }}</th>
                    <th>{{ $record->content }}</th>
                    <th>{{ $record->person_in_charge }}</th>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
    <!-- Scripts -->
    <script src={{ mix('/js/app.js') }} defer></script>
</html>
