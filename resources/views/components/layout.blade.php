<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="m-5">
        <div id="app">
            {{ $slot }}
        </div>

        <script src="{{ mix('js/app.js') }}"></script>

    </body>
</html>
