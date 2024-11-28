<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Manajemen Product
        </h2>
    </x-slot>
    <div class="container mx-auto py-12">

        <!-- Flash Messages -->
        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Create Product -->
        <div class="bg-white p-6 rounded shadow mb-6">
            <h2 class="text-xl font-bold mb-4">Add New Product</h2>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Product Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded"
                        placeholder="Enter product name" required>
                </div>

                <!-- Category -->
                <div class="mb-4">
                    <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                    <select name="category_id" id="category_id" class="w-full px-4 py-2 border rounded" required>
                        <option value="" disabled selected>-- Select Category --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @foreach ($category->children as $child)
                                <option value="{{ $child->id }}">-- {{ $child->name }}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>

                <!-- Main Image -->
                <div class="mb-4">
                    <label for="main_image" class="block text-sm font-medium text-gray-700">Main Image</label>
                    <input type="file" name="main_image" id="main_image" class="w-full px-4 py-2 border rounded"
                        accept="image/*" required>
                </div>

                <!-- Gallery Images -->
                <div class="mb-4">
                    <label for="gallery_images" class="block text-sm font-medium text-gray-700">Gallery Images</label>
                    <input type="file" name="gallery_images[]" id="gallery_images"
                        class="w-full px-4 py-2 border rounded" accept="image/*" multiple>
                    <p class="text-sm text-gray-500 mt-1">You can upload multiple images.</p>
                </div>

                <!-- Specifications -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Specifications</label>
                    <div x-data="{ specifications: [] }">
                        <template x-for="(spec, index) in specifications" :key="index">
                            <div class="flex items-center space-x-2 mb-2">
                                <input type="text" :name="`specifications[${index}][spec_key]`"
                                    class="flex-1 px-4 py-2 border rounded" placeholder="Key" required>
                                <input type="text" :name="`specifications[${index}][spec_value]`"
                                    class="flex-1 px-4 py-2 border rounded" placeholder="Value" required>
                                <input type="text" :name="`specifications[${index}][spec_category]`"
                                    class="flex-1 px-4 py-2 border rounded" placeholder="Category (Optional)">
                                <button type="button" @click="specifications.splice(index, 1)"
                                    class="text-red-600 hover:underline">Remove</button>
                            </div>
                        </template>
                        <button type="button" @click="specifications.push({})"
                            class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Add
                            Specification</button>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Create
                        Product</button>
                </div>
            </form>
        </div>

        <!-- Table Product List -->
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-bold mb-4">Product List</h2>
            <table class="min-w-full bg-white border rounded">
                <thead>
                    <tr class="bg-gray-200 text-left">
                        <th class="py-3 px-4">#</th>
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Category</th>
                        <th class="py-3 px-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td class="py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4">{{ $product->name }}</td>
                            <td class="py-3 px-4">{{ $product->category->name ?? 'No Category' }}</td>
                            <td class="py-3 px-4 flex space-x-2">
                                <a href="{{ route('products.edit', $product) }}"
                                    class="text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-3 px-4 text-center text-gray-500">No products available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>
