<section class="bg-white py-12">
    <div class="container mx-auto px-6">
        <!-- Section Title -->
        <div class="text-center mb-8">
            <h2 class="text-3xl lg:text-4xl font-bold text-ralika-blue">HIGHLIGHT PRODUCTS</h2>
            <p class="text-gray-600 mt-4">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
            </p>
        </div>

        <!-- Filter Tabs -->
        <div class="flex justify-center space-x-4 mb-8">
            <button class="px-4 py-2 text-sm font-medium text-ralika-blue border-b-2 border-ralika-blue focus:outline-none">
                VEHICLE
            </button>
            <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-ralika-blue focus:outline-none">
                TECHNOLOGY
            </button>
            <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-ralika-blue focus:outline-none">
                CONSTRUCTION
            </button>
            <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-ralika-blue focus:outline-none">
                AVIATION
            </button>
        </div>

        <!-- Products Carousel -->
        <div class="carousel-container flex lg:grid lg:grid-cols-5 gap-6 overflow-x-auto lg:overflow-hidden">
            @for ($i = 1; $i <= 5; $i++)
                <div
                    class="carousel-item bg-white shadow-md rounded-lg overflow-hidden flex-shrink-0 w-60 lg:w-auto transition-transform transform hover:scale-105">
                    <!-- Image -->
                    <div class="h-40 bg-gray-200">
                        <img src="https://via.placeholder.com/150x100" alt="Product {{ $i }}" class="w-full h-full object-cover">
                    </div>
                    <!-- Content -->
                    <div class="p-4">
                        <p class="text-xs text-gray-500 mb-1 uppercase">CATEGORY</p>
                        <h3 class="text-base font-semibold text-gray-800 mb-2">LOREM IPSUM</h3>
                        <p class="text-xs text-gray-400">Date Upload</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

