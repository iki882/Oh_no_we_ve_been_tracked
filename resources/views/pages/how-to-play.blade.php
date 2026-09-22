@extends('layouts.app')

@section('title', "How to Play - We've Been Hacked")

@section('content')

<section class="min-h-screen bg-[#0b1a33] px-6 py-24 text-white">

    <div class="max-w-5xl mx-auto">

        {{-- HEADER --}}
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-6xl font-black uppercase text-[#e8c84a]">
                How to Play
            </h1>
            <p class="mt-4 text-gray-400 text-lg max-w-2xl mx-auto">
                Baik Anda baru pertama kali bermain maupun ingin meningkatkan kemampuan, 
                kami menyediakan panduan lengkap untuk Anda. Dari kontrol dasar hingga 
                strategi lanjutan, semua yang Anda butuhkan untuk mengamankan sistem 
                ada di sini.
            </p>
        </div>

        {{-- SECTION 1: TUJUAN PERMAINAN --}}
        <div class="mb-16">
            <h2 class="text-2xl md:text-3xl font-black uppercase text-[#e8c84a] mb-4">
                Tujuan Permainan
            </h2>
            <p class="text-gray-300 leading-relaxed">
                Misi Anda sederhana: <span class="font-bold text-white">lindungi server</span> 
                dari berbagai ancaman yang masuk. Anda akan dihadapkan pada serangkaian koneksi, 
                masing-masing dengan <span class="text-[#e8c84a]">alamat IP</span> dan 
                <span class="text-[#e8c84a]">tingkat ancaman</span> tersendiri. Analisis setiap 
                koneksi dengan cermat dan tentukan apakah akan 
                <span class="text-[#e8c84a]">DIPERCAYA (TRUST)</span> atau 
                <span class="text-[#e8c84a]">DIBLOKIR (BLOCK)</span>. Satu keputusan yang salah 
                bisa mengakibatkan seluruh sistem diretas.
            </p>
        </div>

        {{-- SECTION 2: ANTARMUKA & KONTROL --}}
        <div class="mb-16">
            <h2 class="text-2xl md:text-3xl font-black uppercase text-[#e8c84a] mb-4">
                Antarmuka & Kontrol
            </h2>
            <p class="text-gray-300 leading-relaxed mb-6">
                Kenali elemen-elemen utama pada antarmuka permainan. Memahami arti setiap 
                indikator sangat penting agar Anda dapat mengambil keputusan yang tepat 
                di bawah tekanan.
            </p>

            <div class="overflow-hidden rounded-xl ring-1 ring-white/10">
                <table class="w-full text-left text-sm">
                    <thead class="bg-[#e8c84a]/10 text-[#e8c84a]">
                        <tr>
                            <th class="px-6 py-4 font-bold uppercase tracking-wider">Elemen</th>
                            <th class="px-6 py-4 font-bold uppercase tracking-wider">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-6 py-4 font-semibold text-white">ID Server</td>
                            <td class="px-6 py-4 text-gray-400">Identitas unik server yang Anda lindungi (contoh: SRV-874).</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-6 py-4 font-semibold text-white">Waktu Tersisa</td>
                            <td class="px-6 py-4 text-gray-400">Penghitung waktu mundur. Jika mencapai nol, sistem dinyatakan diretas.</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-6 py-4 font-semibold text-white">Pelanggaran Keamanan</td>
                            <td class="px-6 py-4 text-gray-400">Menunjukkan berapa banyak pelanggaran yang terjadi (O O O = 3 kali diizinkan).</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-6 py-4 font-semibold text-white">Modul</td>
                            <td class="px-6 py-4 text-gray-400">Progres modul saat ini (contoh: 02 / 02).</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-6 py-4 font-semibold text-white">Tabel Koneksi</td>
                            <td class="px-6 py-4 text-gray-400">Daftar koneksi yang masuk dengan ID, alamat IP, dan tingkat ancaman (Merah, Biru, Hijau).</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- SECTION 3: LEVEL PERMAINAN (2 KARTU DI TENGAH) --}}
        <div class="mb-16">
            <h2 class="text-2xl md:text-3xl font-black uppercase text-[#e8c84a] mb-4">
                Level Permainan
            </h2>
            <p class="text-gray-300 leading-relaxed mb-6">
                Pilih tingkat kesulitan yang sesuai dengan kemampuanmu. Mulai dari level 
                pemula hingga level lanjutan yang menantang.
            </p>

            {{-- FLEX DI TENGAH, LEBAR KARTU DIPERKECIL MENJADI 280px --}}
            <div class="flex flex-col md:flex-row md:justify-center gap-4">

                {{-- KARTU: LEVEL EASY (KUNING) --}}
                <div class="bg-yellow-500/10 border border-yellow-500/30 rounded-xl p-5 text-center md:w-[280px]">
                    <span class="inline-block px-3 py-1 mb-4 text-[10px] font-bold uppercase tracking-[0.2em] bg-yellow-600 text-white rounded-full ring-1 ring-yellow-400/50">
                        Level 1 · Easy
                    </span>
                    <div class="w-12 h-12 bg-yellow-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white font-bold">★</span>
                    </div>
                    <div class="h-28 flex items-center justify-center mb-4">
                        <img src="{{ asset('level_Easy.png') }}" 
                             alt="Level Easy" 
                             class="max-h-full w-auto rounded-lg object-contain">
                    </div>
                    <h3 class="font-bold text-yellow-400 uppercase tracking-wider">Easy</h3>
                    <p class="text-gray-400 text-sm mt-2">
                        Level pemula. Cocok untuk mempelajari dasar-dasar cybersecurity.
                    </p>
                </div>

                {{-- KARTU: LEVEL HARD (UNGU) --}}
                <div class="bg-purple-500/10 border border-purple-500/30 rounded-xl p-5 text-center md:w-[280px]">
                    <span class="inline-block px-3 py-1 mb-4 text-[10px] font-bold uppercase tracking-[0.2em] bg-purple-600 text-white rounded-full ring-1 ring-purple-400/50">
                        Level 2 · Hard
                    </span>
                    <div class="w-12 h-12 bg-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white font-bold">⚡</span>
                    </div>
                    <div class="h-28 flex items-center justify-center mb-4">
                        <img src="{{ asset('hard.png') }}" 
                             alt="Level Hard" 
                             class="max-h-full w-auto rounded-lg object-contain">
                    </div>
                    <h3 class="font-bold text-purple-400 uppercase tracking-wider">Hard</h3>
                    <p class="text-gray-400 text-sm mt-2">
                        Level lanjutan. Tantangan lebih sulit dengan waktu yang lebih singkat.
                    </p>
                </div>

            </div>
        </div>

        {{-- SECTION 4: TINGKAT ANCAMAN (3 KARTU) --}}
        <div class="mb-16">
            <h2 class="text-2xl md:text-3xl font-black uppercase text-[#e8c84a] mb-4">
                Tingkat Ancaman
            </h2>
            <p class="text-gray-300 leading-relaxed mb-6">
                Setiap koneksi diberi kode warna berdasarkan tingkat ancamannya. Memahami 
                warna-warna ini adalah kunci untuk mengambil keputusan dengan cepat.
            </p>

            {{-- GRID 3 KARTU --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                {{-- KARTU 1: MERAH --}}
                <div class="bg-red-500/10 border border-red-500/30 rounded-xl p-6 text-center">
                    <span class="inline-block px-3 py-1 mb-4 text-[10px] font-bold uppercase tracking-[0.2em] bg-red-600 text-white rounded-full ring-1 ring-red-400/50">
                        Ancaman Tinggi
                    </span>
                    <div class="w-12 h-12 bg-red-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white font-bold">!</span>
                    </div>
                    <div class="h-28 flex items-center justify-center mb-4">
                        <img src="{{ asset('1game1.png') }}" 
                             alt="Kartu Merah" 
                             class="max-h-full w-auto rounded-lg object-contain">
                    </div>
                    <h3 class="font-bold text-red-400 uppercase tracking-wider">Merah</h3>
                    <p class="text-gray-400 text-sm mt-2">Ancaman tinggi. Kemungkinan besar berbahaya. Segera blokir.</p>
                </div>

                {{-- KARTU 2: BIRU --}}
                <div class="bg-blue-500/10 border border-blue-500/30 rounded-xl p-6 text-center">
                    <span class="inline-block px-3 py-1 mb-4 text-[10px] font-bold uppercase tracking-[0.2em] bg-blue-600 text-white rounded-full ring-1 ring-blue-400/50">
                        Ancaman Sedang
                    </span>
                    <div class="w-12 h-12 bg-blue-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white font-bold">?</span>
                    </div>
                    <div class="h-28 flex items-center justify-center mb-4">
                        <img src="{{ asset('indigame.png') }}" 
                             alt="Kartu Biru" 
                             class="max-h-full w-auto rounded-lg object-contain">
                    </div>
                    <h3 class="font-bold text-blue-400 uppercase tracking-wider">Biru</h3>
                    <p class="text-gray-400 text-sm mt-2">Ancaman tidak diketahui. Periksa dengan hati-hati sebelum memutuskan.</p>
                </div>

                {{-- KARTU 3: HIJAU --}}
                <div class="bg-green-500/10 border border-green-500/30 rounded-xl p-6 text-center">
                    <span class="inline-block px-3 py-1 mb-4 text-[10px] font-bold uppercase tracking-[0.2em] bg-green-600 text-white rounded-full ring-1 ring-green-400/50">
                        Ancaman Rendah
                    </span>
                    <div class="w-12 h-12 bg-green-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-white font-bold">✓</span>
                    </div>
                    <div class="h-28 flex items-center justify-center mb-4">
                        <img src="{{ asset('true.png') }}" 
                             alt="Kartu Hijau" 
                             class="max-h-full w-auto rounded-lg object-contain">
                    </div>
                    <h3 class="font-bold text-green-400 uppercase tracking-wider">Hijau</h3>
                    <p class="text-gray-400 text-sm mt-2">Ancaman rendah. Kemungkinan aman. Boleh dipercaya.</p>
                </div>

            </div>
        </div>

        {{-- SECTION 5: PANDUAN LANGKAH DEMI LANGKAH --}}
        <div class="mb-16">
            <h2 class="text-2xl md:text-3xl font-black uppercase text-[#e8c84a] mb-4">
                Panduan Langkah demi Langkah
            </h2>
            <p class="text-gray-300 leading-relaxed mb-6">
                Ikuti langkah-langkah berikut untuk menyelesaikan setiap modul dengan sukses.
            </p>

            <div class="space-y-4">
                <div class="flex gap-4 items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-[#e8c84a] rounded-lg flex items-center justify-center font-bold text-[#0b1a33]">1</div>
                    <div>
                        <h3 class="font-bold text-white">Analisis Koneksi</h3>
                        <p class="text-gray-400 text-sm mt-1">Perhatikan alamat IP dan tingkat ancaman (Merah, Biru, atau Hijau).</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-[#e8c84a] rounded-lg flex items-center justify-center font-bold text-[#0b1a33]">2</div>
                    <div>
                        <h3 class="font-bold text-white">Ambil Keputusan</h3>
                        <p class="text-gray-400 text-sm mt-1">Pilih <span class="text-[#e8c84a] font-semibold">TRUST</span> untuk mengizinkan koneksi atau <span class="text-[#e8c84a] font-semibold">BLOCK</span> untuk menolaknya.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-[#e8c84a] rounded-lg flex items-center justify-center font-bold text-[#0b1a33]">3</div>
                    <div>
                        <h3 class="font-bold text-white">Tandai Berbahaya atau Aman</h3>
                        <p class="text-gray-400 text-sm mt-1">Opsional, tandai koneksi tersebut untuk referensi di masa mendatang.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-[#e8c84a] rounded-lg flex items-center justify-center font-bold text-[#0b1a33]">4</div>
                    <div>
                        <h3 class="font-bold text-white">Konfirmasi Tindakan Anda</h3>
                        <p class="text-gray-400 text-sm mt-1">Klik <span class="text-[#e8c84a] font-semibold">Konfirmasi</span> untuk melanjutkan. Hati-hati — tidak ada tombol undo!</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- SECTION 6: TIPS & TRIK --}}
        <div class="mb-16">
            <h2 class="text-2xl md:text-3xl font-black uppercase text-[#e8c84a] mb-4">
                Tips & Trik
            </h2>
            <ul class="space-y-3 text-gray-300">
                <li class="flex gap-3 items-start">
                    <span class="text-[#e8c84a] font-bold">•</span>
                    <span>Selalu periksa <span class="text-white font-semibold">alamat IP</span> untuk pola mencurigakan (contoh: angka tidak wajar seperti 12.168.4.991).</span>
                </li>
                <li class="flex gap-3 items-start">
                    <span class="text-[#e8c84a] font-bold">•</span>
                    <span>Perhatikan <span class="text-white font-semibold">waktu tersisa</span>. Jangan terburu-buru — tapi jangan buang waktu juga.</span>
                </li>
                <li class="flex gap-3 items-start">
                    <span class="text-[#e8c84a] font-bold">•</span>
                    <span>Koneksi merah hampir selalu berbahaya. Mempercayainya adalah risiko besar.</span>
                </li>
                <li class="flex gap-3 items-start">
                    <span class="text-[#e8c84a] font-bold">•</span>
                    <span>Gunakan fitur <span class="text-white font-semibold">"Tandai Berbahaya"</span> untuk melacak ancaman.</span>
                </li>
                <li class="flex gap-3 items-start">
                    <span class="text-[#e8c84a] font-bold">•</span>
                    <span>Koneksi hijau biasanya aman, tapi jangan lengah — selalu verifikasi terlebih dahulu.</span>
                </li>
            </ul>
        </div>

        {{-- CTA PENUTUP --}}
        <div class="text-center mt-16">
            <a href="{{ url('/') }}" 
               class="inline-block px-10 py-4 bg-[#e8c84a] text-[#0b1a33] font-bold text-lg rounded-lg hover:bg-[#d4a832] transition transform hover:scale-105">
                Mainkan Sekarang
            </a>
            <p class="mt-4 text-gray-500 text-sm">Apakah Anda yakin bisa mengamankan sistem ini?</p>
        </div>

    </div>

</section>

@endsection