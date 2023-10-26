<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>

<body class="text-bg-dark">

    @include('layouts.partials.head')
    
    <main>
        @yield('content')
    </main>

    <footer>

    </footer>

</body>

</html>