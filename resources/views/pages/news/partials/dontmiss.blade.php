<section class="container mx-auto px-6 lg:px-12 py-12 border-b-2 border-black -pb-1 mb-6">
    <div class="flex flex-col lg:flex-row gap-6 ">
        <!-- Don't Miss -->
        <div class="lg:w-1/2">
            <h2 class="text-lg font-bold border-b-2 border-black -pb-1 mb-6">
                <span class="bg-ralika-blue text-white px-6 py-1">DON'T MISS</span>
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Artikel 1 -->
                @for ($i = 1; $i <= 6; $i++)
                    <div class="border rounded-lg shadow-md overflow-hidden w-full bg-white">
                        <!-- Gambar dengan Label Kategori -->
                        <div class="relative">
                            <img src="https://via.placeholder.com/400x200" alt="Placeholder Image"
                                class="w-full h-48 object-cover">
                            <span
                                class="absolute bottom-2 left-2 bg-zinc-400 text-white text-xs font-medium px-2 py-1 rounded">
                                Religion
                            </span>
                        </div>

                        <!-- Deskripsi -->
                        <div class="p-4">
                            <h4 class="text-lg font-bold text-gray-800">Lorem ipsum dolor sit amet consectur.</h4>
                            <p class="text-sm text-gray-500 mt-2">MONDAY | DECEMBER 19, 2022</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <!-- Editor Picks -->
        <div class="lg:w-1/2">
            <h2 class="text-lg font-bold border-b-2 border-black -pb-1 mb-6">
                <span class="bg-ralika-blue text-white px-6 py-1">EDITOR PICKS</span>
            </h2>
            <div class="space-y-4">
                <!-- Artikel Editor -->
                @for ($i = 1; $i <= 4; $i++)
                    <div class="flex gap-4">
                        <div class="bg-cover bg-center h-[80px] w-[100px]"
                            style="background-image: url('https://via.placeholder.com/200x200');"></div>
                        <div class="w-auto items-end">
                            <p class="text-xs text-gray-400">MONDAY | DECEMBER 19, 2022</p>
                            <h4 class="font-bold text-sm">Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</h4>
                            <span class="text-xs bg-zinc-400 text-white px-4 py-1 inline-block mb-2 ">Category
                                {{ $i }}</span>
                        </div>
                    </div>
                @endfor
                <!-- Video Section -->
                <section class="container mx-auto">
                    <h2 class="text-lg font-bold border-b-2 border-black pb-1 mb-6">
                        <span class="bg-ralika-blue text-white px-6 py-1">EDITOR PICKS</span>
                    </h2>
                    <div class="relative">
                        <iframe class="w-full h-[400px] lg:h-[500px]" src="https://www.youtube.com/embed/example"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
