<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    html,
    body {
        overflow-x: hidden;
        max-width: 100%;
    }

    .carousel-container {
        scroll-behavior: smooth;
        /* Smooth scroll */
        white-space: nowrap;
        /* Force single-line items */
    }

    .carousel-item {
        flex: 0 0 auto;
        /* Prevent flex-shrink */
    }

    @media (max-width: 1024px) {
        .carousel-container {
            display: flex;
            /* Enable horizontal scroll on mobile */
            gap: 16px;
            /* Space between items */
        }
    }

    @media (min-width: 1025px) {
        .carousel-container {
            display: grid;
            /* Switch to grid for desktop */
        }
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        @include('layouts.footer')
    </div>
</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</html>
