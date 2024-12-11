<x-app-layout>
<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold mb-4">{{ $resume->name }}</h1>
    <p class="text-lg text-gray-600">{{ $resume->email }}</p>
    <p class="text-lg text-gray-600">{{ $resume->phone }}</p>

    <div class="mt-6">
        <h2 class="text-xl font-semibold mb-2">Educación</h2>
        <p class="text-lg text-gray-700">{{ $resume->education }}</p>
    </div>

    <div class="mt-6">
        <h2 class="text-xl font-semibold mb-2">Experiencia</h2>
        <p class="text-lg text-gray-700">{{ $resume->experience }}</p>
    </div>

    <div class="mt-6">
        <h2 class="text-xl font-semibold mb-2">Habilidades</h2>
        <p class="text-lg text-gray-700">{{ $resume->skills }}</p>
    </div>

    <div class="mt-6">
        <a href="{{ route('resumes.export', $resume->id) }}" class="inline-block bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Descargar en PDF</a>
    </div>
</div>
</x-app-layout>

