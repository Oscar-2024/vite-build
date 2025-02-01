<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel Vue Site</title>
        @vite(['resources/js/site.js', 'resources/sass/site.scss'])
    </head>
    <body>
        <div id="site">
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>