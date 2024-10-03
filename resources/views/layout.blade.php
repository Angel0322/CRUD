<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <!-- Agrega aquí tus enlaces a hojas de estilo, scripts, etc. -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Gestión de Categorías</h1>
        <nav>
            <ul>
                <li><a href="{{ route('categorias.index') }}">Inicio</a></li>
                <li><a href="{{ route('categorias.create') }}">Crear Categoría</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Aquí se insertará el contenido de cada vista hija -->
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Mi Aplicación</p>
    </footer>

    <!-- Agrega aquí tus scripts si es necesario -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>