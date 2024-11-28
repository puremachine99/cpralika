<div class="col-span-1 p-4">
    <div x-data="{ openCategory: null }">
        @foreach ($categories as $category)
            <div class="mb-4">
                <!-- Kategori Utama -->
                <button @click="openCategory = openCategory === {{ $category->id }} ? null : {{ $category->id }}"
                    class="flex justify-between items-center w-full text-left text-xl font-bold text-blue-900 focus:outline-none ">
                    {{ $category->name }}
                    <span :class="{ 'rotate-180': openCategory === {{ $category->id }} }"
                        class="transform transition-transform duration-300">
                        &#9662;
                    </span>
                </button>

                <!-- Subkategori -->
                <div x-show="openCategory === {{ $category->id }}" x-cloak
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="mt-2 pl-4 border-l">
                    @if ($category->children->isNotEmpty())
                        <ul class="space-y-1">
                            @foreach ($category->children as $subcategory)
                                <li class="hover:bg-ralika-blue p-2 rounded-md">
                                    <a href="{{ route('products.index', ['category' => $subcategory->id]) }}"
                                        class="block text-xl text-gray-700 hover:text-white {{ $selectedCategory == $subcategory->id ? 'font-bold' : '' }}">
                                        {{ $subcategory->name }}
                                    </a>
                                </li>
                                <hr class="font-bold mb-2 mt-2">
                            @endforeach
                        </ul>
                    @else
                        <p class="text-xl text-gray-500">No subcategories</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
