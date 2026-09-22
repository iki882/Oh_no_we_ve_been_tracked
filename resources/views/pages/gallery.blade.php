@extends('layouts.app')

@section('title', "Gallery - We've Been Hacked")

@section('content')

<section class="min-h-screen bg-[#0b1a33] px-6 py-24 text-white">

    <div class="mx-auto max-w-7xl">

        {{-- ================= HEADER ================= --}}
        <h1 class="text-center text-5xl font-black">
            GAME GALLERY
        </h1>

        <p class="mt-4 text-center text-gray-400">
            Take a look inside We've Been Hacked.
        </p>

        {{-- ================= SCREENSHOTS ================= --}}
        <div class="mt-16 rounded-2xl border border-white/10 bg-white/5 p-7">
            <h2 class="text-2xl font-bold text-cyan-300">In-Game Screenshots</h2>
            <p class="mt-2 text-sm text-gray-400">
                Tampilan asli dari dalam game — suasana, environment, dan momen pertarungan.
            </p>
        </div>

        <div class="mt-8 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <img
                src="{{ asset('images/screenshot-1.jpg') }}"
                alt="Screenshot 1 - We've Been Hacked"
                class="h-40 w-full rounded-xl border border-white/10 object-cover transition duration-300 hover:border-cyan-400"
            >
            <img
                src="{{ asset('images/screenshot-2.jpg') }}"
                alt="Screenshot 2 - We've Been Hacked"
                class="h-40 w-full rounded-xl border border-white/10 object-cover transition duration-300 hover:border-cyan-400"
            >
            <img
                src="{{ asset('images/screenshot-3.jpg') }}"
                alt="Screenshot 3 - We've Been Hacked"
                class="h-40 w-full rounded-xl border border-white/10 object-cover transition duration-300 hover:border-cyan-400"
            >
        </div>

        {{-- ================= MERCHANDISE INTRO ================= --}}
        <div class="mt-20 rounded-2xl border border-white/10 bg-white/5 p-7">
            <h2 class="text-2xl font-bold text-cyan-300">Official Merchandise</h2>
            <p class="mt-2 text-sm text-gray-400">
                Setiap item merchandise di bawah ini dibuat berdasarkan karakter, simbol, dan elemen visual
                yang muncul langsung di dalam game. Bukan sekadar gambar acak — semua desainnya punya
                kaitan cerita dengan karakter-karakter utama.
            </p>
        </div>

        {{-- ================= KARAKTER A — ARKA ================= --}}
        <div class="mt-14 grid items-center gap-10 md:grid-cols-2">
            <div>
                <span class="mb-2 inline-block text-[11px] uppercase tracking-widest text-violet-300">Protagonist</span>
                <h3 class="text-2xl font-bold text-white">Karakter A — Arka</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Karakter utama dengan elemen cahaya. Simbolnya adalah
                    <strong class="text-cyan-300">segitiga bercahaya</strong> yang mewakili keberanian.
                    Merchandise bertema Arka didominasi warna hijau neon dan elemen garis tajam,
                    sesuai dengan desain armor-nya di dalam game.
                </p>
            </div>
            <img
                src="{{ asset('images/karakter-arka.png') }}"
                alt="Karakter Arka - We've Been Hacked"
                class="mx-auto h-52 w-full max-w-sm rounded-2xl border border-white/10 object-cover"
            >
        </div>

        {{-- ================= MERCHANDISE ARKA ================= --}}
        <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

            {{-- Card 1 --}}
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/5 transition duration-300 hover:-translate-y-1.5 hover:border-cyan-400">
                <img
                    src="{{ asset('images/merch-kaos-arka.jpg') }}"
                    alt="Kaos Light of Arka"
                    class="h-32 w-full object-cover"
                >
                <div class="p-4">
                    <h4 class="text-sm font-semibold text-white">Kaos "Light of Arka"</h4>
                    <p class="mt-1 text-xs text-gray-400">Desain segitiga bercahaya di dada, warna hijau neon.</p>
                    <span class="mt-3 inline-block rounded-full bg-white/10 px-3 py-1 text-[10px] tracking-widest text-cyan-300">ARKA SERIES</span>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/5 transition duration-300 hover:-translate-y-1.5 hover:border-cyan-400">
                <img
                    src="{{ asset('images/merch-keychain-arka.jpg') }}"
                    alt="Keychain Segitiga Arka"
                    class="h-32 w-full object-cover"
                >
                <div class="p-4">
                    <h4 class="text-sm font-semibold text-white">Keychain Segitiga Arka</h4>
                    <p class="mt-1 text-xs text-gray-400">Logam dengan ukiran simbol karakter Arka.</p>
                    <span class="mt-3 inline-block rounded-full bg-white/10 px-3 py-1 text-[10px] tracking-widest text-cyan-300">ARKA SERIES</span>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/5 transition duration-300 hover:-translate-y-1.5 hover:border-cyan-400">
                <img
                    src="{{ asset('kittchen.jpeg') }}"
                    alt="Poster Arka Full Art"
                    class="h-32 w-full object-cover"
                >
                <div class="p-4">
                    <h4 class="text-sm font-semibold text-white">Poster Arka Full Art</h4>
                    <p class="mt-1 text-xs text-gray-400">Ilustrasi resmi Arka dalam pose pertarungan.</p>
                    <span class="mt-3 inline-block rounded-full bg-white/10 px-3 py-1 text-[10px] tracking-widest text-cyan-300">ARKA SERIES</span>
                </div>
            </div>
        </div>

        {{-- ================= KETERANGAN KAITAN ================= --}}
        <div class="mt-8 rounded-r-lg border-l-4 border-cyan-400 bg-white/5 px-6 py-4 text-sm italic text-gray-300">
            💡 <strong class="not-italic text-cyan-300">Kaitan dengan game:</strong>
            Simbol segitiga pada kaos & keychain Arka adalah tanda yang muncul di atas kepala Arka
            saat mengaktifkan skill ultimate di dalam game.
        </div>

    </div>

</section>

@endsection