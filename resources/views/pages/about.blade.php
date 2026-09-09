@extends('layouts.app')

@section('title', "About - We've Been Hacked")

@section('content')

<section class="min-h-screen bg-[#0b1a33] px-6 py-24 text-white">

    {{-- Container tanpa mx-auto, rata kiri dengan jarak --}}
    <div class="max-w-5xl ml-8 md:ml-12">

        {{-- FLEX ROW --}}
        <div class="flex flex-col md:flex-row items-center md:items-start gap-6 md:gap-10">

            {{-- GAMBAR KIRI (UKURAN SEDANG) --}}
            <div class="md:w-1/3 flex justify-center md:justify-start">
                <img src="{{ asset('karakter.png') }}" 
                     alt="We've Been Hacked Character" 
                     class="h-48 w-auto rounded-xl shadow-2xl ring-1 ring-white/10 object-contain">
            </div>

            {{-- TEKS KANAN --}}
            <div class="md:w-2/3 text-center md:text-left">
                <h2 class="text-2xl md:text-3xl font-black uppercase text-[#e8c84a]">
                    Oh No We've Been Tracked
                </h2>
                <p class="mt-4 text-gray-300 text-sm md:text-base leading-relaxed">
                    Game "Oh No! We've Been Tracked" adalah sebuah game edukasi 
                    yang mengajak pemain untuk menghadapi berbagai situasi dan 
                    ancaman digital melalui sebuah pengalaman interaktif. 
                    Pemain akan belajar cara melindungi data pribadi, mengenali 
                    serangan phishing, dan menjaga keamanan digital dalam 
                    kehidupan sehari-hari.
                </p>
                <div class="mt-6">
                    <a href="{{ url('/how-to-play') }}" 
                       class="inline-block px-6 py-2 bg-[#e8c84a] text-[#0b1a33] font-bold rounded-lg hover:bg-[#d4a832] transition">
                        Play Now
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection