@extends('layouts.app')

@section('content')
 {{-- <div class="relative mx-auto w-full h-full overflow-hidden">
     <!-- Banner Iklan -->
    <div id="carousel" class="flex transition-transform duration-500 ease-in-out" style="transform: translateX(0);">
        @foreach ($banners as $banner)
            <div class="min-w-full h-full relative">
                <a href="{{ $banner->link }}" target="_blank">
                    <img src="{{ asset('storage/' . $banner->thumbnail) }}" class="object-cover object-center w-full h-full shadow-sm" alt="Advertisement">
                </a>
            </div>
        @endforeach
    </div>
    <!-- Controls -->
    <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-transparent text-gray-200 px-4 py-2 rounded-full">
        <span class="iconify" data-icon="akar-icons:arrow-left" data-inline="false"></span>
    </button>
    <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-transparent text-gray-200 px-4 py-2 rounded-full">
        <span class="iconify" data-icon="akar-icons:arrow-right" data-inline="false"></span>
    </button>
</div> --}}

<div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
<div class="mt-20 lg:max-w-7xl items-end relative mx-auto grid w-full max-w-2xl gap-x-16 px-6">
    <div class="relative mx-auto">
        <!-- Tambahkan class untuk mengatur ukuran gambar -->
        <a class="router-link-active router-link-exact-active items-center flex gap-2 px-2 mx auto mt-14" aria-current="page">
            <img src="data:image/svg+xml,%3csvg%20width='239'%20height='205'%20viewBox='0%200%20239%20205'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M238.522%20100.051C238.522%20155.279%20193.75%20200.051%20138.522%20200.051C129.486%20200.051%20120.73%20198.852%20112.404%20196.606C52.7408%20220.359%20-32.4304%20186.149%2013.0217%20120.551C12.7386%20122.008%2012.4901%20123.436%2012.2754%20124.833C8.16842%20138.772%2010.3869%20152.888%2017.0262%20162.275C24.4249%20175.109%2038.2%20181.422%2054.2838%20183.512C71.8192%20187.221%2093.9839%20186.293%20119.272%20176.801C162.074%20160.734%20193.188%20103.145%20204.268%2082.6368C205.444%2080.4609%20206.394%2078.7024%20207.108%2077.4552L214.233%2078.8295L200.395%2035.3714L167.022%2067.3009L175.274%2069.7324C144.522%20148.301%2084.7718%20172.801%2051.7718%20167.051C24.7099%20162.336%2012.818%20138.352%2020.188%20113.266C22.255%20107.79%2025.3851%20102.36%2029.6719%2097.2169C27.175%20104.936%2026.491%20112.231%2028.2717%20120.051C34.0217%20145.301%2057.0217%20149.356%2082.5217%20143.551C104.215%20138.613%20118.522%20127.051%20138.522%20100.051L144.272%20102.051L138.022%2064.301L107.772%2085.551L113.022%2089.801C112.337%2091.1372%20111.667%2092.6728%20110.937%2094.3458C106.067%20105.506%2098.5269%20122.783%2066.2717%20127.801C47.2686%20130.757%2039.0786%20117.245%2038.525%2099.2242C38.605%2089.3449%2040.1176%2079.8071%2042.8652%2070.8081C42.9979%2070.3884%2043.1334%2069.9693%2043.2717%2069.551L43.2417%2069.6027C56.1219%2029.2633%2093.9103%200.0509644%20138.522%200.0509644C193.75%200.0509644%20238.522%2044.8225%20238.522%20100.051Z'%20fill='%23B8292E'/%3e%3c/svg%3e" width="100" height="100" alt="">
            <h1 class="text-5xl font-bold sm:text-6xl">iJASA News</h1>
        </a>
        <h2 class="text-center text-xl">Portal Berita iJASA</h2>
    </div>

    <div data-aos-delay="200" data-aos="fade-down" data-aos-easing="ease-in-out" class="max-w-6xl mx-auto p-4 mt-8">
        <div id="Solutions" class="my-6 max-w-6xl mx-auto mt-4 mb-14 z-1">
            <div class="gap-8 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
                @foreach($articles as $article)
                <div class="p-6 border rounded-lg border-transparent shadow-lg transition-transform transform hover:scale-105 hover:border-red-600" data-aos="fade-down" data-aos-delay="200" data-aos-duration="600">
                    <!-- Container gambar dengan tinggi tetap -->
                    <div class="w-full h-80 overflow-hidden rounded-md">
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->name }}" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center mb-2 mt-4">
                        <h3 class="text-2xl font-bold text-gray-800">{{ Str::limit($article->name, 100) }}</h3>
                    </div>
                    <div class="py-4">
                        <p class="text-gray-600">{{ Str::limit($article->content, 80, '...') }} <a href="{{ route('article.show', $article->slug) }}" class="text-red-600 font-semibold hover:underline">Read More</a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    @endsection



{{-- 

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carousel = document.getElementById('carousel');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const banners = document.querySelectorAll('#carousel > div');
        let index = 0;
        const bannerWidth = banners[0].offsetWidth;
        const totalBanners = banners.length;

        function updateCarousel() {
            carousel.style.transform = `translateX(-${index * bannerWidth}px)`;
        }

        function showNextBanner() {
            index = (index + 1) % totalBanners;
            updateCarousel();
        }

        function showPrevBanner() {
            index = (index - 1 + totalBanners) % totalBanners;
            updateCarousel();
        }

        // Automatic movement
        setInterval(showNextBanner, 5000); // Change slide every 5 seconds

        // Next and Previous button functionality
        nextButton.addEventListener('click', showNextBanner);
        prevButton.addEventListener('click', showPrevBanner);

        // Update carousel width on window resize
        window.addEventListener('resize', () => {
            bannerWidth = banners[0].offsetWidth;
            updateCarousel();
        });
    });
</script> --}}
