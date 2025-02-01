<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel Vue Backoffice</title>
        @vite(['resources/js/backoffice.js', 'resources/sass/backoffice.scss'])
    </head>
    <body>
        <div id="backoffice">
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>