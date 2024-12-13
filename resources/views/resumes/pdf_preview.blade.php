@extends('layouts.app') <!-- Puedes usar un layout o dejarlo vacío -->

@section('content')
<div class="container mx-auto mt-10 bg-white p-6 shadow-md">
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold">{{ $resume->name }}</h1>
        <p>{{ $resume->email }}</p>
        <p>{{ $resume->phone }}</p>
    </div>
    <div>
        <h2 class="text-xl font-bold mb-2">Información Personal</h2>
        <p>Email: {{ $resume->email }}</p>
        <p>Teléfono: {{ $resume->phone }}</p>
    </div>
    <div class="mt-4">
        <h2 class="text-xl font-bold mb-2">Educación</h2>
        <p>{{ $resume->education }}</p>
    </div>
    <div class="mt-4">
        <h2 class="text-xl font-bold mb-2">Experiencia</h2>
        <p>{{ $resume->experience }}</p>
    </div>
    <div class="mt-4">
        <h2 class="text-xl font-bold mb-2">Habilidades</h2>
        <p>{{ $resume->skills }}</p>
    </div>
    <div class="text-center mt-6">
        <a href="{{ route('resumes.export', $resume->id) }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Exportar PDF</a>
    </div>
</div>
@endsection
