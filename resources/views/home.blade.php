@extends('layouts.nav')

@section('content')
    <div class="min-h-screen flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-6 text-blue-600">Bienvenido a la Página Principal</h1>

            <p class="text-lg mb-6">Inicia sesión para continuar</p>

            <!-- Botón de inicio de sesión -->
            <a href="{{ route('login') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 transition">Iniciar sesión</a>
        </div>
    </div>
@endsection