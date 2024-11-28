<div class="col-span-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    {{-- dummy. butuh ambil dari products --}}
    @for ($i = 1; $i <= 8; $i++)
        <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
            <img src="https://via.placeholder.com/300x200" alt="Product {{ $i }}"
                class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-800">Product Name {{ $i }}</h3>
                <p class="text-sm text-gray-500 mt-1">Lorem Ipsum Dolor Sit Amet</p>
                <div class="mt-4">
                    <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Explore
                    </a>
                </div>
            </div>
        </div>
    @endfor
    
</div>
