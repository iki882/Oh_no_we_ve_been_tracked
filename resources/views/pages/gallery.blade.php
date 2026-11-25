@extends('layouts.app')

@section('title', "Gallery - We've Been Hacked")

@section('content')

<section
    class="bg-[#0b1a33] px-6 text-white"
    style="padding-top:160px; padding-bottom:80px;"
>

    <div class="mx-auto max-w-4xl">

        {{-- ================= HEADER ================= --}}
        <h1 class="text-center text-3xl font-black md:text-4xl text-cyan-300">
            GAME GALLERY
        </h1>

        <p class="mt-2 text-center text-sm md:text-base font-medium text-gray-300">
            Take a look inside We've Been Hacked.
        </p>

        {{-- ================= GAME VIEW INTRO ================= --}}
        <div class="mt-12 border-b border-white/10 pb-4">
            <h2 class="text-xl font-bold text-cyan-300">In-Game View</h2>
            <p class="mt-1 text-sm md:text-base font-medium text-gray-300">
                Tampilan asli dari dalam game — suasana, environment, dan antarmuka permainan.
            </p>
        </div>

        {{-- ================= GAME VIEW CARDS ================= --}}
        <div class="mt-6 flex flex-col gap-6">

            {{-- Card 1 : Hacking Scene --}}
            <div class="grid grid-cols-1 md:grid-cols-12 gap-5 items-center overflow-hidden rounded-xl border border-white/10 bg-white/5 p-4 md:p-5 hover:border-cyan-500/30 transition-all duration-300">
                
                {{-- Container Gambar (Ukuran Sedang & Jelas) --}}
                <div class="md:col-span-5 lg:col-span-4 w-full overflow-hidden rounded-lg border border-white/10 bg-black/40">
                    <img
                        src="{{ asset('tampilan.jpeg') }}"
                        alt="In-Game View 1"
                        class="w-full aspect-[16/9] object-cover hover:scale-105 transition-transform duration-300"
                    >
                </div>

                {{-- Container Deskripsi (Teks Lebih Besar & Semibold) --}}
                <div class="md:col-span-7 lg:col-span-8 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg md:text-xl font-bold text-white">Hacking Scene</h3>
                        <p class="mt-2 text-sm md:text-base font-medium leading-relaxed text-gray-200">
                            Tampilan asli dari dalam game saat karakter memasuki mode <em class="text-cyan-300 font-semibold">hacking</em> — memperlihatkan antarmuka terminal, jalur data, dan elemen visual bergaya cyberpunk dengan nuansa biru gelap. Di sini pemain harus memecahkan kode sambil menghindari deteksi sistem keamanan.
                        </p>
                    </div>
                    <div class="mt-4">
                        <span class="inline-block rounded-full bg-cyan-500/10 border border-cyan-500/20 px-3 py-1 text-xs font-bold tracking-widest text-cyan-300">
                            GAMEPLAY
                        </span>
                    </div>
                </div>

            </div>

            {{-- Card 2 : System Breach Scene --}}
            <div class="grid grid-cols-1 md:grid-cols-12 gap-5 items-center overflow-hidden rounded-xl border border-white/10 bg-white/5 p-4 md:p-5 hover:border-cyan-500/30 transition-all duration-300">
                
                {{-- Container Gambar (Ukuran Sedang & Jelas) --}}
                <div class="md:col-span-5 lg:col-span-4 w-full overflow-hidden rounded-lg border border-white/10 bg-black/40">
                    <img 
                        src="{{ asset('tampilan2.jpeg') }}"
                        alt="In-Game View 2"
                        class="w-full aspect-[16/9] object-cover hover:scale-105 transition-transform duration-300"
                    >
                </div>

                {{-- Container Deskripsi (Teks Lebih Besar & Semibold) --}}
                <div class="md:col-span-7 lg:col-span-8 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg md:text-xl font-bold text-white">System Breach Scene</h3>
                        <p class="mt-2 text-sm md:text-base font-medium leading-relaxed text-gray-200">
                            Tampilan antarmuka <strong class="text-cyan-300 font-semibold">Pilih Level Operasi Siber</strong> untuk game simulasi keamanan siber berbasis kerja sama (<em class="text-cyan-300 font-semibold">co-op/asimetris</em>) ini menyajikan tiga tingkatan kesulitan—mulai dari Level 01 Ancaman Dasar (Easy) yang sudah terbuka, hingga Level 02 Rekayasa Sosial &amp; Phishing (Medium) dan Level 03 Serangan Siber Kritis (Hard) yang masih terkunci—di mana setiap kartu level secara detail menampilkan fokus kasus, target 5 kasus, durasi waktu bermain, serta batas 3 <em class="text-red-400 font-semibold">strikes</em>.
                        </p>
                    </div>
                    <div class="mt-4">
                        <span class="inline-block rounded-full bg-cyan-500/10 border border-cyan-500/20 px-3 py-1 text-xs font-bold tracking-widest text-cyan-300">
                            ENVIRONMENT
                        </span>
                    </div>
                </div>

            </div>

        </div>

        {{-- ================= ABOUT THE GAME ================= --}}
        <div class="mt-12 rounded-xl border border-white/10 bg-white/5 p-6">
            <h3 class="text-lg font-bold text-cyan-300">Tentang We've Been Hacked</h3>
            <p class="mt-2 text-sm md:text-base font-medium leading-relaxed text-gray-200">
                <strong class="text-cyan-300 font-semibold">We've Been Hacked</strong> adalah game bertema cyber
                security di mana pemain berperan sebagai Engineer dari divisi XXVII. Setiap level
                menantang pemain untuk memecahkan sistem keamanan, melacak jejak peretas, dan
                menyusun strategi dengan motto <em class="text-cyan-300 font-semibold">"Think First"</em> — berpikir dulu sebelum
                bertindak. Visualnya didominasi nuansa biru gelap dengan elemen neon khas
                terminal hacker.
            </p>
        </div>

    </div>

</section>

@endsection