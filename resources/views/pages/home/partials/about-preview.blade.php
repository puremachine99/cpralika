<section class="relative bg-cover bg-center h-[1000px] overflow-hidden"
    style="background-image: url('{{ asset('images/bgAbout.jpg') }}');">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black opacity-20"></div>

    <!-- Gambar Gedung -->
    <div class="absolute hidden sm:flex justify-start top-20 sm:top-32 md:top-44 left-0 w-full h-full">
        <img src="{{ asset('images/building.png') }}" alt="Ralika Group Building"
            class="h-[200px] sm:h-[400px] md:h-[600px] lg:h-[900px] object-contain opacity-40">
    </div>

    <!-- Container -->
    <div class="container relative mx-auto h-full flex flex-col justify-center lg:justify-end items-center px-6 lg:px-12 overflow-hidden lg:flex-row">

        <!-- Konten Teks -->
        <div class="flex-1 max-w-lg text-white text-center lg:text-left">
            <h1 class="text-3xl sm:text-4xl lg:text-6xl font-bold">RALIKA GROUP</h1>
            <p class="mt-4 text-sm sm:text-base lg:text-base text-justify leading-relaxed">
                Ralika Group is a company specializing in the procurement of goods and services, with a primary focus on
                providing defense and security equipment, including military hardware and other essential supplies.
                Committed to quality and professionalism, Ralika Group plays a vital role in supporting the strategic
                needs of various institutions and organizations in the defense sector.
            </p>
            <a href="{{ route('about') }}"
                class="inline-block mt-6 px-6 py-1 text-md lg:text-base font-medium bg-ralika-blue text-white rounded-md shadow hover:bg-gray-100 transition">
                See More
            </a>
        </div>
    </div>
</section>
