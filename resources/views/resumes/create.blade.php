<x-app-layout>
<div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-4">Generar Currículum</h1>
    <form action="{{ route('resumes.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" id="name" name="name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
            <input type="email" id="email" name="email" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div>
            <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
            <input type="text" id="phone" name="phone" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div>
            <label for="education" class="block text-sm font-medium text-gray-700">Educación</label>
            <textarea id="education" name="education" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <div>
            <label for="experience" class="block text-sm font-medium text-gray-700">Experiencia</label>
            <textarea id="experience" name="experience" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <div>
            <label for="skills" class="block text-sm font-medium text-gray-700">Habilidades</label>
            <textarea id="skills" name="skills" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <div>
            <label for="languages" class="block text-sm font-medium text-gray-700">Idiomas</label>
            <textarea id="languages" name="languages" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Generar Currículum</button>
    </form>
</div>
</x-app-layout>