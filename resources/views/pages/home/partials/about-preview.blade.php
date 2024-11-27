<section class="relative bg-cover bg-center h-[500px] lg:h-[600px]" style="background-image: url('/images/bgAbout.jpg');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-ralika-blue opacity-80"></div>

    <!-- Container -->
    <div class="container relative mx-auto h-full flex flex-col lg:flex-row items-center px-6 lg:px-12">
        <!-- Gambar Gedung -->
        <div class="flex-1 hidden lg:flex justify-center">
            <img src="/images/building.png" alt="Ralika Group Building" class="h-[250px] lg:h-[400px] object-contain">
        </div>

        <!-- Konten Teks -->
        <div class="flex-1 max-w-lg text-white">
            <h1 class="text-3xl lg:text-5xl font-bold">RALIKA GROUP</h1>
            <p class="mt-4 text-sm lg:text-base leading-relaxed">
                Ralika Group is a company specializing in the procurement of goods and services, with a primary focus on
                providing defense and security equipment, including military hardware and other essential supplies.
                Committed to quality and professionalism, Ralika Group plays a vital role in supporting the strategic
                needs of various institutions and organizations in the defense sector.
            </p>
            <a href="{{ route('about') }}" class="inline-block mt-6 px-6 py-3 text-sm lg:text-base font-medium bg-white text-ralika-blue rounded-md shadow hover:bg-gray-100 transition">
                See More
            </a>
        </div>
    </div>
</section>
