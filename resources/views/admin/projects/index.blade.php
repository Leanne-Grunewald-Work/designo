<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 px-4">
        <h1 class="text-2xl font-bold mb-6">Design Projects</h1>

        <a href="{{ route('projects.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">
            + New Project
        </a>

        @if (session('success'))
            <div class="mt-4 bg-green-100 text-green-800 px-4 py-2 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-6 overflow-x-auto">
            <table class="min-w-full bg-white rounded shadow">
                <thead class="bg-gray-200 text-left text-sm uppercase tracking-wide">
                    <tr>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Type</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    @forelse ($designProject as $project)
                        <tr class="border-t">
                            <td class="px-4 py-2">
                                <div class="font-semibold">{{ $project->title }}</div>
                                <div class="text-gray-400 text-xs truncate max-w-xs">/{{ $project->slug }}</div>
                            </td>                            
                            <td class="px-4 py-2 capitalize">{{ $project->type }}</td>
                            <td class="px-4 py-2 space-x-2">
                                <a href="{{ route('projects.edit', $project) }}" class="text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('projects.destroy', $project) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this project?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-4 py-2 text-center text-gray-500">No projects yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
