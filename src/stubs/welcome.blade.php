<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alpha Laravel Presets</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-200">
        <div class="flex items-center justify-center h-screen">
            <h2 class="text-5xl text-red-700 text-center bg-white px-12 rounded-lg shadow-lg cursor-pointer hover:shadow-md hover:bg-gray-100 hover:text-black">
                Laravel
                <p class="text-base text-gray-500 pb-4 hover:text-red-700">Alpha Presets for Laravel</p>
            </h2>
        </div>
    </body>
</html>
