<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog Project</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ mix('/js/app.js') }}"></script>

    </head>
    <body>
        <div id="app">
            <h1 class="cursor-pointer"> Welcome To The Ryan's Blog </h1>
            <home :blogs='@json($blogs)'></home>
         </div>
    </body>
</html>
