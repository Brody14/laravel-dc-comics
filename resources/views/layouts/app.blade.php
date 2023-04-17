<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
    <script src="https://kit.fontawesome.com/d3a966ac98.js" crossorigin="anonymous"></script>

</head>

<body>

    <header class="text-center">
        <h1>DC Comics</h1>
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>