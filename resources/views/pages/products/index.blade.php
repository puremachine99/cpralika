<x-app-layout>
    @include('pages.products.partials.header-slider')

    <div class="bg-gray-100 py-12">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mt-5">
                @include('pages.products.partials.sidebar-category')
                @include('pages.products.partials.grid-products')
            </div>
        </div>
        <div class="mt-8 flex justify-center">
            <ul class="flex space-x-2">
                <li>
                    <a href="#" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">1</a>
                </li>
                <li>
                    <a href="#" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">2</a>
                </li>
                <li>
                    <a href="#" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">3</a>
                </li>
            </ul>
        </div>
    </div>

</x-app-layout>
