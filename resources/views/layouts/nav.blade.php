<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Página Principal')</title>
    @vite('resources/css/app.css') <!-- Si estás usando Vite para Tailwind -->
</head>
<body class="bg-gray-100">
    <!-- Barra de navegación -->
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-white text-lg font-semibold">Mi App</a>

            <div>
                @auth
                    <a href="{{ route('home') }}" class="text-white px-4">Inicio</a>
                    <a href="{{ route('logout') }}" class="text-white px-4">Cerrar sesión</a>
                @else
                    <a href="{{ route('login') }}" class="text-white px-4">Iniciar sesión</a>
                    <a href="{{ route('register') }}" class="text-white px-4">Registrar</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Contenido principal de la página -->
    <div class="py-8">
        @yield('content')
    </div>
</body>
</html>
