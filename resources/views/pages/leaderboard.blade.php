@extends('layouts.app')

@section('title', "Leaderboard - We've Been Hacked")

@section('content')

<section
    class="bg-[#0b1a33] px-6 text-white min-h-screen"
    style="padding-top:140px; padding-bottom:80px;"
>
    <div class="mx-auto max-w-4xl">

        {{-- HEADER --}}
        <h1 class="text-center text-3xl font-black md:text-4xl text-cyan-300 tracking-wide">
            OPERATION LEADERBOARD
        </h1>
        <p class="mt-2 text-center text-sm md:text-base font-medium text-gray-300">
            Daftar agen terbaik yang berhasil menyelesaikan misi We've Been Hacked.
        </p>

        {{-- NOTIFIKASI --}}
        @if(session('success'))
            <div class="mt-6 rounded-xl bg-green-500/10 border border-green-500/20 p-4 text-green-400 text-sm font-medium text-center">
                {{ session('success') }}
            </div>
        @endif

        {{-- FORM UPLOAD & BUTTON HAPUS --}}
        <div class="mt-8 rounded-xl border border-cyan-500/20 bg-white/5 p-5 shadow-lg">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-4">
                <h4 class="text-sm font-bold text-cyan-300 flex items-center gap-2">
                    <span>📂</span> Kelola File Leaderboard (JSON)
                </h4>

                {{-- TOMBOL HAPUS DATA --}}
                <form action="{{ url('/leaderboard/reset') }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus file leaderboard ini?');">
                    @csrf
                    <button 
                        type="submit" 
                        class="px-3.5 py-1.5 rounded-lg bg-red-500/20 hover:bg-red-500 border border-red-500/40 text-red-300 hover:text-white text-xs font-bold transition-all duration-200 flex items-center gap-1.5 cursor-pointer"
                    >
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                        <span>Hapus / Reset Data</span>
                    </button>
                </form>
            </div>
            
            {{-- FORM UPLOAD --}}
            <form action="{{ url('/leaderboard/import') }}" method="POST" enctype="multipart/form-data" class="flex flex-col sm:flex-row items-center gap-4">
                @csrf
                <input 
                    type="file" 
                    name="json_file" 
                    accept=".json"
                    required
                    class="w-full text-xs text-gray-300 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-cyan-500/20 file:text-cyan-300 hover:file:bg-cyan-500 hover:file:text-black file:transition file:duration-200 cursor-pointer"
                >
                <button 
                    type="submit" 
                    class="w-full sm:w-auto px-6 py-2.5 rounded-lg bg-cyan-500 hover:bg-cyan-400 active:scale-95 text-black text-xs font-bold transition-all duration-200 shadow-md hover:shadow-cyan-500/30 cursor-pointer flex items-center justify-center gap-2 shrink-0"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                    </svg>
                    <span>Upload &amp; Update</span>
                </button>
            </form>
        </div>

        {{-- TABEL LEADERBOARD --}}
        <div class="mt-8 overflow-hidden rounded-xl border border-white/10 bg-white/5 p-6 shadow-xl">
            <h3 class="text-lg font-bold text-cyan-300 mb-4 flex items-center gap-2">
                🏆 <span>Team Easy Ranking</span>
            </h3>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-white/10 text-gray-300 text-xs md:text-sm font-bold">
                            <th class="py-3 px-4">Peringkat</th>
                            <th class="py-3 px-4">Tanggal</th>
                            <th class="py-3 px-4">Operator (P1) &amp; Expert (P2)</th>
                            <th class="py-3 px-4 text-center">Kesalahan (Mistakes)</th>
                            <th class="py-3 px-4 text-center">Waktu</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm md:text-base font-medium">
                        @php
                            $teams = $leaderboardData['boards']['team_easy'] ?? [];
                        @endphp

                        @forelse($teams as $index => $row)
                            <tr class="border-b border-white/5 hover:bg-white/5 transition duration-150">
                                <td class="py-3.5 px-4 font-bold text-cyan-300">#{{ $index + 1 }}</td>
                                <td class="py-3.5 px-4 text-gray-300">{{ $row['date'] ?? '-' }}</td>
                                <td class="py-3.5 px-4 font-semibold text-white">
                                    {{ ucfirst($row['p1'] ?? '') }} &amp; {{ ucfirst($row['p2'] ?? '') }}
                                </td>
                                <td class="py-3.5 px-4 text-center">
                                    <span class="rounded bg-red-500/10 border border-red-500/20 px-2.5 py-1 text-xs text-red-400 font-bold">
                                        {{ $row['mistakes'] ?? 0 }} Strikes
                                    </span>
                                </td>
                                <td class="py-3.5 px-4 text-center text-gray-300">
                                    {{ isset($row['ms']) ? number_format($row['ms'] / 1000, 1) : 0 }} detik
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-8 text-center text-gray-400 font-medium">
                                    Belum ada data skor untuk kategori ini.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

@endsection