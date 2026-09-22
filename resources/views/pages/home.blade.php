@extends('layouts.app')

@section('title', "We've Been Hacked")

@section('content')

{{-- ============================================================ --}}
{{-- 1. HERO SECTION --}}
{{-- ============================================================ --}}
<section class="relative min-h-screen bg-[#0b1a33] overflow-hidden">

    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-[#e8c84a]/5 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-blue-500/5 rounded-full blur-[100px]"></div>
        <div class="absolute inset-0 opacity-[0.03]" 
             style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>

    <div class="relative max-w-6xl mx-auto px-6 pt-36 pb-24 flex flex-col items-center">

        {{-- BADGE --}}
        <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-[#e8c84a]/20 bg-[#e8c84a]/5 backdrop-blur-sm">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#e8c84a] opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-[#e8c84a]"></span>
            </span>
            <span class="text-[10px] font-bold uppercase tracking-[0.3em] text-[#e8c84a]">
                A Cybersecurity Educational Game
            </span>
        </div>

        {{-- JUDUL --}}
        <h1 class="mt-10 text-center">
            <span class="block text-5xl sm:text-6xl md:text-7xl font-black uppercase text-white tracking-tight leading-[0.95]">
                WE'VE BEEN
            </span>
            <span class="block mt-3 text-6xl sm:text-7xl md:text-8xl font-black uppercase tracking-tight leading-[0.95] text-transparent bg-clip-text bg-gradient-to-b from-[#f0d76b] to-[#d4a832]">
                HACKED!
            </span>
        </h1>

        {{-- GARIS PEMISAH --}}
        <div class="mt-10 flex items-center gap-3">
            <span class="w-12 h-px bg-gradient-to-r from-transparent to-[#e8c84a]/50"></span>
            <span class="w-1.5 h-1.5 bg-[#e8c84a] rounded-full"></span>
            <span class="w-12 h-px bg-gradient-to-l from-transparent to-[#e8c84a]/50"></span>
        </div>

        {{-- DESKRIPSI --}}
        <p class="mt-8 max-w-xl text-center text-gray-400 text-base md:text-lg leading-relaxed">
            Sebuah game edukasi bertema <span class="text-[#e8c84a] font-semibold">cybersecurity</span> 
            yang mengajak pemain menghadapi berbagai situasi dan ancaman digital 
            melalui pengalaman interaktif yang menegangkan.
        </p>

        {{-- TOMBOL CTA --}}
        <div class="mt-10 flex flex-col sm:flex-row gap-3 items-center">
            <a href="{{ url('/how-to-play') }}"
               class="group inline-flex items-center gap-2 px-8 py-4 bg-[#e8c84a] text-[#0b1a33] font-bold rounded-xl transition-all duration-300 hover:bg-[#f0d76b] hover:shadow-[0_10px_40px_-10px_rgba(232,200,74,0.6)] hover:-translate-y-0.5">
                Mulai Bermain
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="{{ url('/about') }}"
               class="inline-flex items-center gap-2 px-8 py-4 border border-white/10 text-white font-bold rounded-xl hover:bg-white/5 hover:border-white/20 transition-all duration-300">
                Pelajari Game
            </a>
        </div>

        {{-- VIDEO SHOWCASE --}}
        <div class="mt-20 w-full max-w-3xl">
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-[#e8c84a]/20 via-transparent to-blue-500/20 rounded-3xl blur-2xl"></div>

                <div class="relative rounded-2xl overflow-hidden ring-1 ring-white/10 shadow-2xl bg-black">
                    <div class="flex items-center gap-2 px-4 py-3 bg-[#0d1f3d] border-b border-white/5">
                        <span class="w-3 h-3 rounded-full bg-red-500/70"></span>
                        <span class="w-3 h-3 rounded-full bg-yellow-500/70"></span>
                        <span class="w-3 h-3 rounded-full bg-green-500/70"></span>
                        <span class="ml-4 text-[10px] font-mono text-gray-500 uppercase tracking-wider">
                            gameplay_preview.mp4
                        </span>
                    </div>
                    <video autoplay muted loop playsinline class="w-full h-auto">
                        <source src="{{ asset('intro_Game.mp4') }}" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- ============================================================ --}}
{{-- 2. FITUR UTAMA --}}
{{-- ============================================================ --}}
<section class="bg-[#0a1730] border-y border-white/5 px-6 py-28">
    <div class="max-w-6xl mx-auto">

        {{-- HEADER --}}
        <div class="max-w-2xl">
            <p class="text-[10px] font-bold uppercase tracking-[0.4em] text-[#e8c84a]">
                Fitur Unggulan
            </p>
            <h2 class="mt-4 text-3xl md:text-4xl font-black uppercase text-white leading-tight">
                Belajar Cybersecurity <br>
                <span class="text-[#e8c84a]">Tanpa Terasa Sulit</span>
            </h2>
            <p class="mt-4 text-gray-400 leading-relaxed">
                Setiap level dirancang untuk membuat Anda memahami ancaman digital 
                melalui pengalaman bermain yang menyenangkan.
            </p>
        </div>

        {{-- GRID FITUR --}}
        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6">

            {{-- Fitur 1 --}}
            <div class="group relative bg-[#0b1a33] border border-white/5 rounded-2xl p-8 transition-all duration-300 hover:border-[#e8c84a]/30 hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-[#e8c84a]/10 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#e8c84a]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h3 class="mt-6 font-bold text-white text-lg">Simulasi Keamanan</h3>
                <p class="mt-3 text-gray-400 text-sm leading-relaxed">
                    Rasakan langsung bagaimana rasanya melindungi server dari berbagai serangan.
                </p>
                <div class="mt-6 flex items-center gap-2 text-xs font-semibold text-[#e8c84a] uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity">
                    <span>Pelajari</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>

            {{-- Fitur 2 --}}
            <div class="group relative bg-[#0b1a33] border border-white/5 rounded-2xl p-8 transition-all duration-300 hover:border-[#e8c84a]/30 hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-[#e8c84a]/10 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#e8c84a]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="mt-6 font-bold text-white text-lg">Keputusan Nyata</h3>
                <p class="mt-3 text-gray-400 text-sm leading-relaxed">
                    Setiap pilihan berdampak. Uji instingmu dalam menentukan ancaman.
                </p>
                <div class="mt-6 flex items-center gap-2 text-xs font-semibold text-[#e8c84a] uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity">
                    <span>Pelajari</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>

            {{-- Fitur 3 --}}
            <div class="group relative bg-[#0b1a33] border border-white/5 rounded-2xl p-8 transition-all duration-300 hover:border-[#e8c84a]/30 hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-[#e8c84a]/10 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#e8c84a]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h3 class="mt-6 font-bold text-white text-lg">Materi Terstruktur</h3>
                <p class="mt-3 text-gray-400 text-sm leading-relaxed">
                    Konsep cybersecurity dijelaskan dengan bahasa yang mudah dipahami.
                </p>
                <div class="mt-6 flex items-center gap-2 text-xs font-semibold text-[#e8c84a] uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity">
                    <span>Pelajari</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- 3. STATISTIK --}}
{{-- ============================================================ --}}
<section class="bg-[#0b1a33] px-6 py-24">
    <div class="max-w-5xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-y-12 gap-x-6">

            <div class="text-center">
                <div class="text-5xl md:text-6xl font-black text-white">
                    10<span class="text-[#e8c84a]">+</span>
                </div>
                <p class="mt-3 text-[10px] md:text-xs text-gray-500 uppercase tracking-[0.3em] font-semibold">
                    Level
                </p>
            </div>

            <div class="text-center">
                <div class="text-5xl md:text-6xl font-black text-white">
                    20<span class="text-[#e8c84a]">+</span>
                </div>
                <p class="mt-3 text-[10px] md:text-xs text-gray-500 uppercase tracking-[0.3em] font-semibold">
                    Ancaman
                </p>
            </div>

            <div class="text-center">
                <div class="text-5xl md:text-6xl font-black text-white">
                    5
                </div>
                <p class="mt-3 text-[10px] md:text-xs text-gray-500 uppercase tracking-[0.3em] font-semibold">
                    Kategori
                </p>
            </div>

            <div class="text-center">
                <div class="text-5xl md:text-6xl font-black text-[#e8c84a]">
                    ∞
                </div>
                <p class="mt-3 text-[10px] md:text-xs text-gray-500 uppercase tracking-[0.3em] font-semibold">
                    Pembelajaran
                </p>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================ --}}
{{-- 4. CTA PENUTUP --}}
{{-- ============================================================ --}}
<section class="relative bg-[#0a1730] border-t border-white/5 px-6 py-28 overflow-hidden">

    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-[#e8c84a]/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="relative max-w-2xl mx-auto text-center">

        <p class="text-[10px] font-bold uppercase tracking-[0.4em] text-[#e8c84a]">
            Siap Memulai?
        </p>

        <h2 class="mt-5 text-4xl md:text-5xl font-black uppercase text-white leading-tight">
            Uji Kemampuanmu <br>
            <span class="text-[#e8c84a]">Sebelum Terlambat</span>
        </h2>

        <p class="mt-6 text-gray-400 leading-relaxed max-w-lg mx-auto">
            Hadapi ancaman digital yang semakin canggih. Apakah kamu bisa 
            melindungi server sebelum waktu habis?
        </p>

        <div class="mt-10 flex flex-col sm:flex-row gap-3 items-center justify-center">
            <a href="{{ url('/how-to-play') }}"
               class="inline-flex items-center gap-2 px-8 py-4 bg-[#e8c84a] text-[#0b1a33] font-bold rounded-xl transition-all duration-300 hover:bg-[#f0d76b] hover:shadow-[0_10px_40px_-10px_rgba(232,200,74,0.6)] hover:-translate-y-0.5">
                Mainkan Sekarang
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="{{ url('/gallery') }}"
               class="inline-flex items-center px-8 py-4 border border-white/10 text-white font-bold rounded-xl hover:bg-white/5 hover:border-white/20 transition-all duration-300">
                Lihat Galeri
            </a>
        </div>

    </div>
</section>

@endsection