<x-app-layout>
    <!-- Section Header -->
    <section class="relative bg-cover bg-center h-[500px]"
        style="background-image: url('{{ asset('images/bgAbout.jpg') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Content -->
        <div class="container relative mx-auto h-full flex items-center justify-center px-6 lg:px-12">
            <div class="text-center text-white">
                <h2 class="text-3xl lg:text-5xl font-bold">DUMMY ITEM </h2>
                <p class="mt-4 text-base lg:text-lg">
                    Lorem ipsum dolor sit amet consectetur. Dignissim aliquam mattis quam.
                </p>
            </div>
        </div>
    </section>


    <!-- Main Content -->
    <div class="container mx-auto py-8 px-4 lg:px-12">
        <div class="lg:flex lg:space-x-6">
            <!-- Sidebar Navigation -->
            @include('pages.products.partials.sidebar-category')

            <!-- Product Details -->
            <main class="flex-1">
                <div class="flex space-x-6 mb-8">
                    <!-- Main Image -->
                    <div class="flex flex-col items-center w-3/4">
                        <!-- Main Image -->
                        <div class="w-3/4 mb-4">
                            <img src="https://via.placeholder.com/600x800" alt="Main Product Image"
                                class="w-full h-auto rounded-lg shadow-lg">
                        </div>

                        <!-- Thumbnails -->
                        <div class="flex space-x-4 justify-center">
                            <!-- Thumbnail Images -->
                            <img src="https://via.placeholder.com/100x100" alt="Thumbnail 1"
                                class="w-20 h-20 border border-gray-300 rounded shadow-lg cursor-pointer">
                            <img src="https://via.placeholder.com/100x100" alt="Thumbnail 2"
                                class="w-20 h-20 border border-gray-300 rounded shadow-lg cursor-pointer">
                            <img src="https://via.placeholder.com/100x100" alt="Thumbnail 3"
                                class="w-20 h-20 border border-gray-300 rounded shadow-lg cursor-pointer">
                            <img src="https://via.placeholder.com/100x100" alt="Thumbnail 4"
                                class="w-20 h-20 border border-gray-300 rounded shadow-lg cursor-pointer">
                            <img src="https://via.placeholder.com/100x100" alt="Thumbnail 5"
                                class="w-20 h-20 border border-gray-300 rounded shadow-lg cursor-pointer">
                        </div>
                        <!-- Tactical Video Section -->
                        <div class="mb-5 mt-6">
                            <h2 class="text-xl font-bold mb-4">TACTICAL VIDEO: RALIKAGROUP TOUR</h2>
                            <div class="w-  bg-black flex items-center justify-center">
                                <iframe class="w-full h-full" src="https://www.youtube.com/embed/dummy-video"
                                    frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>


                    <!-- Specifications Table -->
                    <div class="w-1/4">
                        <table class="w-full border border-gray-300 text-sm rounded-md">
                            <!-- Umum Section -->
                            <thead class="bg-ralika-blue text-white">
                                <tr>
                                    <th colspan="2" class="p-2 text-left">Umum</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 border">Type</td>
                                    <td class="p-2 border">Ransus</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Tahun pembuatan</td>
                                    <td class="p-2 border">Tahun pembelian</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Warna</td>
                                    <td class="p-2 border">Army Green</td>
                                </tr>
                            </tbody>

                            <!-- Dimensi Section -->
                            <thead class="bg-ralika-blue text-white">
                                <tr>
                                    <th colspan="2" class="p-2 text-left">Dimensi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 border">Panjang</td>
                                    <td class="p-2 border">6.500 – 6.700 mm</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Lebar</td>
                                    <td class="p-2 border">2.200 – 2.500 mm</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Tinggi</td>
                                    <td class="p-2 border">2.500 – 2.800 mm</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Jarak terendah ke tanah</td>
                                    <td class="p-2 border">Min. 300 mm</td>
                                </tr>
                            </tbody>

                            <!-- Kemampuan Section -->
                            <thead class="bg-ralika-blue text-white">
                                <tr>
                                    <th colspan="2" class="p-2 text-left">Kemampuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 border">Kecepatan</td>
                                    <td class="p-2 border">60 – 80 km/jam</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Berat kotor kendaraan</td>
                                    <td class="p-2 border">Maks. 7.000 kg</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Kapasitas BBM</td>
                                    <td class="p-2 border">95+95 (190 L)</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Radius putar</td>
                                    <td class="p-2 border">Maks. 11 m</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Daya tanjak</td>
                                    <td class="p-2 border">Maks. 30°</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Rintangan tegak</td>
                                    <td class="p-2 border">Maks. 0,4 m</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Melintasi air</td>
                                    <td class="p-2 border">Maks. 1,2 m</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Lintas parit</td>
                                    <td class="p-2 border">Maks. 0,7 m</td>
                                </tr>
                            </tbody>

                            <!-- Mesin Section -->
                            <thead class="bg-ralika-blue text-white">
                                <tr>
                                    <th colspan="2" class="p-2 text-left">Mesin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 border">Type</td>
                                    <td class="p-2 border">4 stroke with turbocharger</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Isi silinder</td>
                                    <td class="p-2 border">Min. 4.400 cc</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Daya maksimum</td>
                                    <td class="p-2 border">Min. 150 Hp/2.300 Rpm</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Torsi Maksimum</td>
                                    <td class="p-2 border">Min. 490 Nm/1.200 – 2.100 Rpm</td>
                                </tr>
                            </tbody>

                            <!-- Transmisi Section -->
                            <thead class="bg-ralika-blue text-white">
                                <tr>
                                    <th colspan="2" class="p-2 text-left">Transmisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 border">Type</td>
                                    <td class="p-2 border">Manual, Min. 5 percepatan</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border">Penggerak</td>
                                    <td class="p-2 border">4x4</td>
                                </tr>
                            </tbody>

                            <!-- Kelistrikan Section -->
                            <thead class="bg-ralika-blue text-white">
                                <tr>
                                    <th colspan="2" class="p-2 text-left">Kelistrikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 border" colspan="2">12/24 V</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>



                <!-- Other Products Section -->
                <div>
                    <h2 class="text-xl font-bold mb-4">OUR OTHER PRODUCTS</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @for ($i = 1; $i <= 4; $i++)
                            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                                <img src="https://via.placeholder.com/200x400" alt="Product {{ $i }}"
                                    class="w-full h-40 object-cover">
                                <div class="p-4">
                                    <h3 class="text-lg font-bold">MOBIL ARMORED RALIKA</h3>
                                    <p class="text-sm text-gray-500">ARMORED {{ $i }}</p>
                                    <a href="#"
                                        class="block mt-4 px-4 py-2 text-center text-white bg-ralika-blue rounded hover:bg-blue-700">Explore</a>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
