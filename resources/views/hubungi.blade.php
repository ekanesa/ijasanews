<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

        <div class="p-8 mt-14">
            <h1 class="text-3xl font-semibold text-center">Hubungi <span class="text-red-600">iJasa</span></h1>
            <p class="text-center font-light text-slate-600 p-2">Berbicaralah dengan tim penjualan kami untuk informasi lebih lanjut.</p>
        </div>
        <div data-aos="zoom-in" class="absolute left-0 top-0 z-10 md:w-72 w-5">
            <img src="asset/img/svg/blob.svg" alt="blob" class="blur-3xl opacity-30">
        </div>
        <div data-aos="zoom-in" class="absolute right-0 bottom-0 z-10 md:w-72 w-5">
            <img src="asset/img/svg/blob-2.svg" alt="blob" class="blur-3xl opacity-30">
        </div>
        <div class="mx-auto max-w-6xl w-full p-4 z-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 w-full gap-5 lg:divide-x"> <!-- Menambahkan gap yang lebih besar -->

                <!-- Contact Information -->

                <div class="text-2xl p-4 flex flex-col gap-2 text-slate-600 h-80 border shadow-md bg-red-700">
                <style>
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
    </style>
                    <div class="leading-tight">
                        <div id="animated-text" class="text-2xl text-white font-bold mb-3 transition-opacity opacity-0">Kontak</div>
                        <div class="text-lg text-white font-normal tracking-tighter animate-float">Email</div>
                        <a href="mailto:cs@ijasa.id" class="flex gap-1 items-center hover:underline text-base mb-5 text-white font-light animate-float">
                            <span class="iconify i-ph:envelope-light" aria-hidden="true"></span>
                            <p > cs@ijasa.id </p>
                        </a>

                        <div class="text-lg text-white font-normal animate-float">No telp</div>
                            <a href="https://wa.me/+628113562254" class="flex gap-1 items-center hover:underline text-base text-white">
                            <span class="iconify i-ph:whatsapp-logo-light" aria-hidden="true"></span>
                            {{-- <p class="tabular-nums text-white font-light animate-float"> 08113562254 </p> --}}
                        </a>
                    </div>


                    <div class="mt-auto text-sm text-white">
                        <address>Jl. Tukad Batanghari 1C, Renon - Denpasar</address>
                    </div>
                </div>


                <!-- Form Section -->
                <div class="w-full bg-white p-4 flex flex-col rounded-md shadow-[0px_2px_14px_rgba(0,0,0,0.4)] z-20">
                    <div id="animated-text2" class="text-2xl text-black font-bold mb-3 transition-opacity opacity-0">Hubungi Kami</div>
                    <div class="text-black mb-8">
                        Tim unggulan kami siap membantu Anda menemukan layanan optimal yang sesuai dengan kebutuhan bisnis Anda. Silakan kirim pesan Anda melalui formulir di bawah ini, dan kami akan segera menghubungi Anda kembali.</div>
                    <!-- Form Section -->
                    <form id="contactForm" action="/send-mail" method="POST">
                        @csrf
                        <!-- Email Field -->
                        <p class="mb-2 text-md text-slate-800">Email Perusahaan</p>
                        <input
                            name="email"
                            class="shadow w-full py-2 px-3 focus:outline-none border border-slate-200 rounded-md"
                            type="email"
                            required
                            placeholder="cth: email@namaperusahaan.com">

                        <!-- Phone Number Field -->
                        <p class="mt-4 text-md text-slate-800">Nomor Telepon (Whatsapp)</p>
                        <input
                            name="phone"
                            class="shadow w-full py-2 px-3 focus:outline-none border border-slate-200 rounded-md"
                            type="text"
                            required
                            placeholder="cth: 62812345678">

                        <!-- Text Area Field -->
                        <p class="mt-4 mb-2 text-md text-slate-800">Bagaimana kami dapat membantu?</p>
                        <textarea
                            name="message"
                            required
                            placeholder="cth: Saya dari SMA Bali ada budget 15jt per bulan, fasilitas internet apa yang saya bisa dapat?"
                            class="shadow h-32 w-full py-2 px-3 focus:outline-none border border-slate-200 rounded-md"></textarea>

                        <!-- Submit Button -->
                        <button
                            type="submit"
                            class="group relative inline-flex border border-red-600 focus:outline-none mt-3">
                            <p class="font-bold inline-flex items-center justify-center self-stretch px-8 py-2 text-sm text-red-600 text-center uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform hover:translate-y-1 hover:translate-x-1 focus:translate-y-1 focus:translate-x-1">Send</p>
                            <span class="iconify i-eos-icons:three-dots-loading" aria-hidden="true" style="display:none;"></span>
                        </button>
                    </form>

                </div>

            </div>
        </div>
        <script src="{{ asset('js/textAnimation.js') }}"></script>
        <script src="{{ asset('js/textAnimation2.js') }}"></script>





</x-layout>