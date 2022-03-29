<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ mix('/js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @php
            $text = 'Create a Blog';   
        @endphp 
        <site-header :categories='@json($blogCategories)' :title='@json($text)'></site-header>   
    </div>
</body>
</html>