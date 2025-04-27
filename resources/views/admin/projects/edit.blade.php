<x-app-layout>
    <div class="max-w-2xl mx-auto py-10 px-4">
        <h1 class="text-2xl font-bold mb-6">Edit Project</h1>

        @if (session('success'))
            <div 
                x-data="{ show: true }" 
                x-init="setTimeout(() => show = false, 3000)" 
                x-show="show"
                class="mb-6 bg-green-100 text-green-800 px-4 py-2 rounded transition"
            >
                {{ session('success') }}
            </div>
        @endif



        @if ($errors->any())
            <div class="mb-6 bg-red-100 text-red-800 px-4 py-2 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-6">
            <span class="inline-block bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs">
                Slug: {{ $designProject->slug }}
            </span>
        </div>
        
        <form action="{{ route('projects.update',  $designProject->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Project Title</label>
                <input type="text" name="title" id="title" 
                    class="w-full border-gray-300 rounded shadow-sm focus:ring focus:ring-blue-200" 
                    value="{{ old('title', $designProject->title) }}" required>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" id="description" rows="4" 
                    class="w-full border-gray-300 rounded shadow-sm focus:ring focus:ring-blue-200">{{ old('description', $designProject->description) }}</textarea>
            </div>

            <div>
                <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                <select name="type" id="type" 
                    class="w-full border-gray-300 rounded shadow-sm focus:ring focus:ring-blue-200" required>
                    <option value="web" {{ old('type', $designProject->type) == 'web' ? 'selected' : '' }}>Web Design</option>
                    <option value="app" {{ old('type', $designProject->type) == 'app' ? 'selected' : '' }}>App Design</option>
                    <option value="graphic" {{ old('type', $designProject->type) == 'graphic' ? 'selected' : '' }}>Graphic Design</option>
                </select>
            </div>

            <div>
                <label for="image_path" class="block text-sm font-medium text-gray-700 mb-1">Project Image</label>
                <input type="file" name="image_path" id="image_path" class="w-full border-gray-300 rounded shadow-sm focus:ring focus:ring-blue-200">
                
                @if($designProject->image_path)
                    <div class="mt-4">
                        <p class="text-sm text-gray-500 mb-1">Current Image:</p>
                        <img src="{{ asset('storage/' . $designProject->image_path) }}" class="h-32 rounded shadow">
                    </div>
                @endif
            </div>

            <div>
                <label for="link" class="block text-sm font-medium text-gray-700 mb-1">Project Link</label>
                <input type="text" name="link" id="link" class="w-full border-gray-300 rounded shadow-sm focus:ring focus:ring-blue-200" value="{{ old('link', $designProject->link) }}" required>
            </div>


            <div class="pt-6">
                <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-6 rounded">
                    Update Project
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
