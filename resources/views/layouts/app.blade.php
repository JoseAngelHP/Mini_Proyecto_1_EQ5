<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Barra de navegación, logotipo, menú, etc. -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Pie de página, información adicional, enlaces, etc. -->
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>