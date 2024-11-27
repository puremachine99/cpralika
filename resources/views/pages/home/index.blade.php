<x-app-layout>
    <style>
        .swiper-button-next,
        .swiper-button-prev {
            color: white;
            width: 60px;
            height: 60px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: rgba(0, 0, 0, 0.3);
        }
    </style>
    @include('pages.home.partials.home')
    @include('pages.home.partials.highlight-products')
    @include('pages.home.partials.about-preview')
    @include('pages.home.partials.news')
    @include('pages.home.partials.contact')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const swiper = new Swiper('.swiper-container', {
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                slidesPerView: 1,
                spaceBetween: 10,
            });
        });
    </script>



</x-app-layout>
