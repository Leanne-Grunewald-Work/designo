<x-app-layout>
    <div class="max-w-2xl mx-auto py-10 px-4">
        <h1 class="text-2xl font-bold mb-6">Add New Project</h1>

        @if ($errors->any())
            <div class="mb-6 bg-red-100 text-red-800 px-4 py-2 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data"
         class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Project Title</label>
                <input type="text" name="title" id="title" class="w-full border-gray-300 rounded shadow-sm focus:ring focus:ring-blue-200" value="{{ old('title') }}" required>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" id="description" rows="4" class="w-full border-gray-300 rounded shadow-sm focus:ring focus:ring-blue-200">{{ old('description') }}</textarea>
            </div>

            <div>
                <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                <select name="type" id="type" class="w-full border-gray-300 rounded shadow-sm focus:ring focus:ring-blue-200" required>
                    <option value="">Select Type</option>
                    <option value="web" {{ old('type') == 'web' ? 'selected' : '' }}>Web Design</option>
                    <option value="app" {{ old('type') == 'app' ? 'selected' : '' }}>App Design</option>
                    <option value="graphic" {{ old('type') == 'graphic' ? 'selected' : '' }}>Graphic Design</option>
                </select>
            </div>

            <div>
                <label for="image_path" class="block text-sm font-medium text-gray-700 mb-1">Project Image</label>
                <input type="file" name="image_path" id="image_path" class="w-full border-gray-300 rounded shadow-sm focus:ring focus:ring-blue-200">
            </div>

            <div>
                <label for="link" class="block text-sm font-medium text-gray-700 mb-1">Project Link</label>
                <input type="text" name="link" id="link" class="w-full border-gray-300 rounded shadow-sm focus:ring focus:ring-blue-200" value="{{ old('link') }}">
            </div>

            

            <div class="pt-6">
                <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-6 rounded">
                    Save Project
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
