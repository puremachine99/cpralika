<nav class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
    <!-- Top Navigation -->
    <div class="bg-gray-100 py-2">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-4 text-sm text-gray-600">
                <div class="items-center hidden lg:flex">
                    <!-- Logo Pin Gmap -->
                    <x-logo-pin-gmap class="h-5 w-5 text-ralika-blue mr-1" />
                    Jl. Cideng Barat No. 70 C-F, Jakarta Pusat, 10150
                </div>
                <div class="items-center hidden lg:flex">
                    <!-- Logo Clock -->
                    <x-logo-clock class="h-5 w-5 text-ralika-blue mr-1" />
                    Mon - Fri : 08.00 AM - 17.00 PM
                </div>
            </div>
            <div class="flex space-x-4 text-ralika-blue">
                <a href="#" class="flex items-center">
                    <!-- Logo Phone -->
                    <x-logo-phone class="h-5 w-5 text-ralika-blue mr-1" />
                    +62 21 3810010
                </a>
                <a href="#" class="flex items-center">
                    <!-- Logo Youtube -->
                    <x-logo-youtube class="h-5 w-5 text-ralika-blue" />
                </a>
                <a href="#" class="flex items-center">
                    <!-- Logo Instagram -->
                    <x-logo-instagram class="h-5 w-5 text-ralika-blue" />
                </a>
                <a href="#" class="flex items-center">
                    <!-- Logo Tiktok -->
                    <x-logo-tiktok class="h-5 w-5 text-ralika-blue" />
                </a>
                <a href="#" class="flex items-center">
                    <!-- Logo Email -->
                    <x-logo-email class="h-5 w-5 text-ralika-blue" />
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="{{ url('/') }}">
                <x-logo-ralika class="h-8 w-auto mx-auto lg:mx-0 text-white" />
            </a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-8 text-sm font-medium">
            <a href="{{ url('/') }}"
                class="relative px-3 py-2 group 
                      {{ request()->is('/') ? 'bg-ralika-blue text-white rounded-lg' : 'hover:text-white text-gray-800' }}">
                <span class="relative z-10">HOME</span>
                <span
                    class="absolute inset-0 bg-ralika-blue rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0"></span>
            </a>
            <a href="{{ url('/about') }}"
                class="relative px-3 py-2 group 
                      {{ request()->is('about') ? 'bg-ralika-blue text-white rounded-lg' : 'hover:text-white text-gray-800' }}">
                <span class="relative z-10">ABOUT US</span>
                <span
                    class="absolute inset-0 bg-ralika-blue rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0"></span>
            </a>
            <a href="{{ url('/news') }}"
                class="relative px-3 py-2 group 
                      {{ request()->is('news') ? 'bg-ralika-blue text-white rounded-lg ' : 'hover:text-white text-gray-800' }}">
                <span class="relative z-10">NEWS</span>
                <span
                    class="absolute inset-0 bg-ralika-blue rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0"></span>
            </a>
            <a href="{{ url('/products') }}"
                class="relative px-3 py-2 group 
                      {{ request()->is('products') ? 'bg-ralika-blue text-white rounded-lg' : 'hover:text-white text-gray-800' }}">
                <span class="relative z-10">PRODUCTS</span>
                <span
                    class="absolute inset-0 bg-ralika-blue rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0"></span>
            </a>
            <a href="{{ url('/contacts') }}"
                class="relative px-3 py-2 group 
                      {{ request()->is('contacts') ? 'bg-ralika-blue text-white rounded-lg' : 'hover:text-white text-gray-800' }}">
                <span class="relative z-10">CONTACTS</span>
                <span
                    class="absolute inset-0 bg-ralika-blue rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0"></span>
            </a>
            <a href="{{ url('/portfolio') }}"
                class="relative px-3 py-2 group 
                      {{ request()->is('portfolio') ? 'bg-ralika-blue text-white rounded-md lg' : 'hover:text-white text-gray-800' }}">
                <span class="relative z-10">PORTFOLIO</span>
                <span
                    class="absolute inset-0 bg-ralika-blue rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0"></span>
            </a>
        </div>

        <!-- Hamburger Menu for Mobile -->
        <div class="md:hidden" x-data="{ open: false }">
            <!-- Hamburger Button -->
            <button @click="open = !open" class="focus:outline-none">
                <svg class="h-6 w-6 text-gray-800" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <!-- Mobile Navigation with Animation -->
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95"
                class="absolute top-24 left-0 w-full bg-gray-100 shadow-md rounded-lg z-50">
                <a href="{{ url('/') }}" class="block py-2 px-4 text-sm text-gray-800 hover:bg-gray-200">HOME</a>
                <a href="{{ url('/about') }}" class="block py-2 px-4 text-sm text-gray-800 hover:bg-gray-200">ABOUT
                    US</a>
                <a href="{{ url('/news') }}" class="block py-2 px-4 text-sm text-gray-800 hover:bg-gray-200">NEWS</a>
                <a href="{{ url('/products') }}"
                    class="block py-2 px-4 text-sm text-gray-800 hover:bg-gray-200">PRODUCTS</a>
                <a href="{{ url('/contacts') }}"
                    class="block py-2 px-4 text-sm text-gray-800 hover:bg-gray-200">CONTACTS</a>
                <a href="{{ url('/portfolio') }}"
                    class="block py-2 px-4 text-sm text-gray-800 hover:bg-gray-200">PORTFOLIO</a>
            </div>
        </div>

</nav>
