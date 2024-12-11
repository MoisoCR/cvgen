<x-app-layout>
<div class="max-w-7xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4 text-gray-800 dark:text-gray-100">Lista de Currículums</h1>
    @if(session('success'))
        <div class="mb-4 text-green-600">{{ session('success') }}</div>
    @endif
    <a href="{{ route('resumes.create') }}" class="inline-block bg-indigo-600 text-white py-2 px-4 rounded-md mb-4 hover:bg-indigo-700">Crear Nuevo Currículum</a>
    <table class="min-w-full table-auto">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 text-left">Nombre</th>
                <th class="px-4 py-2 text-left">Correo Electrónico</th>
                <th class="px-4 py-2 text-left">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($resumes as $resume)
            <tr class="border-t">
                <td class="px-6 py-3 text-gray-800 dark:text-gray-100">{{ $resume->name }}</td>
                <td class="px-6 py-3 text-gray-800 dark:text-gray-100">{{ $resume->email }}</td>
                <td class="px-6 py-3 text-gray-800 dark:text-gray-100">{{ $resume->phone }}</td>
                <td class="px-6 py-3 text-gray-800 dark:text-gray-100">
                    <a href="{{ route('resumes.edit', $resume->id) }}" class="text-blue-500 hover:underline">Editar</a> |
                    
                    <form action="{{ route('resumes.destroy', $resume->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Eliminar</button>
                    </form> |
                    
                    <!-- Botón para exportar a PDF -->
                    <a href="{{ route('resumes.export', $resume->id) }}" class="text-green-500 hover:underline">Exportar a PDF</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>