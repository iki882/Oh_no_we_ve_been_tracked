@extends('layouts.app')

@section('title', "We've Been Hacked")

@section('content')

 {{-- 2. JUDUL GAME --}}
        <div class="mt-8 text-center">
            
            <h1 class="text-5xl font-black uppercase md:text-7xl text-white">
                WE'VE BEEN
            </h1>
            <h1 class="text-5xl font-black uppercase md:text-7xl text-[#e8c84a]">
                HACKED!
            </h1>
        </div>

    <section class="min-h-screen bg-[#0b1a33] px-6 pb-12 pt-32 text-white flex flex-col items-center justify-start">
            
        {{-- 1. VIDEO UKURAN KECIL --}}
        <div class="w-full max-w-3xl mx-auto rounded-xl right-100% overflow-hidden shadow-2xl ring-1 ring-white/10">
            <video 
                autoplay muted loop playsinline 
                class="w-full h-auto"
            >
                <source src="{{ asset('intro_Game.mp4') }}" type="video/mp4">
                Browser Anda tidak mendukung tag video.
            </video>
        </div>

       

        {{-- 3. TEKS DESKRIPSI --}}
        <div class="mt-6 text-center max-w-3xl mx-auto">
            <p class="mt-2 font-bold tracking-wide text-white/50">
                We've Been Hacked adalah game bertema cybersecurity
                yang mengajak pemain menghadapi berbagai situasi dan
                ancaman digital melalui sebuah pengalaman interaktif.
            </p>
        </div>

        {{-- <div class="mt-6 left-50% tracking-normal text-white/50">
            <p class="mt-2 font-bold *:tracking-normal text-white/50">
             Game ini adalah sebuah permainan edukatif yang dirancang untuk kembalikan komputer yang telah kena retas sama orang lain       
            </p> --}}

        </div>

    </section>

@endsection