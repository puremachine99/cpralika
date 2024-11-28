 <!-- Konten Produk -->


 <div class="col-span-3">
     @for ($j = 1; $j <= 3; $j++)
         <!-- Kategori Header -->
         <div class="flex items-center justify-between mb-5 border-b-2 border-black -pb-1 mt-5">
             <h2 class="text-sm font-bold">
                 <span class="bg-ralika-blue text-white px-6 py-1 mb-0">Category {{ $j }}</span>
             </h2>
             <a href="#" class="text-blue-600 hover:underline font-medium">Show More >>></a>
         </div>

         <!-- Produk Cards -->
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
             @for ($i = 1; $i <= 3; $i++)
                 <!-- Produk Card -->
                 <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
                     <img src="https://via.placeholder.com/300x200" alt="Product {{ $i }}"
                         class="w-full h-40 object-cover">
                     <div class="p-4">
                         <h3 class="text-lg  text-gray-800">MOBIL ARMORED RALIKA</h3>
                         <p class="text-xl font-bold text-black mt-1">ARMORED {{ $i }}</p>
                         <div class="mt-4">
                             <a href="#"
                                 class="px-4 py-2 border border-gray-800 text-gray-800 rounded hover:bg-gray-800 hover:text-white">
                                 Explore
                             </a>
                         </div>
                     </div>
                 </div>
             @endfor
         </div>
     @endfor
 </div>
