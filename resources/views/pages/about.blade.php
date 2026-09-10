@extends('layouts.app')

@section('title', "About - We've Been Hacked")

@section('content')

<section class="min-h-screen bg-[#0b1a33] px-6 py-24 text-white">

    <div class="max-w-5xl mx-auto">

        <div class="flex flex-col md:flex-row items-center gap-6 md:gap-10">

            {{-- GAMBAR KIRI: DUA KARAKTER SEJAJAR DI TENGAH --}}
            <div class="md:w-1/3 flex flex-col items-center gap-2">
                <div class="flex flex-row gap-4">
                    <img src="{{ asset('karakter.png') }}" 
                         alt="Karakter 1" 
                         class="h-16 w-auto rounded-xl shadow-2xl ring-1 ring-white/10 object-contain">
                    <img src="{{ asset('charakter.png') }}" 
                         alt="Karakter 2" 
                         class="h-16 w-auto rounded-xl shadow-2xl ring-1 ring-white/10 object-contain">
                </div>
            </div>

            {{-- TEKS KANAN --}}
            <div class="md:w-2/3 text-center md:text-left">

                <h2 class="text-2xl md:text-3xl font-black uppercase text-[#e8c84a]">
                    Oh No! We've Been Tracked
                </h2>
                <p class="text-sm text-gray-400 mt-1">A Cybersecurity Educational Game</p>

                <p class="mt-4 text-gray-300 text-sm md:text-base leading-relaxed">
                    <span class="font-bold text-white">We've Been Hacked</span> adalah game edukasi 
                    bertema <span class="text-[#e8c84a]">cybersecurity</span> yang mengajak pemain 
                    memasuki sebuah sistem yang sedang mengalami gangguan keamanan. 
                    Ketika berbagai aktivitas mencurigakan mulai muncul dan data berada dalam risiko, 
                    pemain harus mencari petunjuk, menyelidiki ancaman, serta mengambil keputusan 
                    yang tepat untuk mengungkap apa yang sebenarnya terjadi.
                </p>

                <div class="md:w-1/3 flex flex-col items-center gap-2">
                    <div class="flex flex-row gap-4">
                        <img src="{{ ('game.png') }}"
                        alt="game"
                        class="h-20  w-auto rounded-xl shadow-2xl ring-1 ring-white/10 object-contain">                
                
                </div>

                <p class="mt-4 text-gray-300 text-sm md:text-base leading-relaxed">
                    Melalui pengalaman bermain yang interaktif, pemain akan diperkenalkan dengan 
                    berbagai konsep dasar cybersecurity, seperti 
                    <span class="text-[#e8c84a]">phishing</span>, 
                    <span class="text-[#e8c84a]">password security</span>, 
                    <span class="text-[#e8c84a]">social engineering</span>, 
                    <span class="text-[#e8c84a]">malware</span>, dan 
                    <span class="text-[#e8c84a]">online safety</span>. 
                    Game ini menggabungkan unsur edukasi, eksplorasi, dan pemecahan masalah 
                    agar pemain tidak hanya bermain, tetapi juga memahami pentingnya menjaga 
                    keamanan di dunia digital.
                </p>

                <p class="mt-4 text-gray-300 text-sm md:text-base leading-relaxed">
                    Dengan alur cerita yang menegangkan dan tantangan yang menguji logika, 
                    <span class="text-[#e8c84a]">We've Been Hacked</span> dirancang untuk 
                    meningkatkan kesadaran akan ancaman siber yang semakin kompleks. 
                    Pemain diajak untuk berpikir kritis, bekerja sama, dan mengambil keputusan 
                    cepat dalam situasi darurat digital. Cocok untuk pelajar, profesional IT, 
                    maupun siapa pun yang ingin belajar cybersecurity dengan cara yang menyenangkan.
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