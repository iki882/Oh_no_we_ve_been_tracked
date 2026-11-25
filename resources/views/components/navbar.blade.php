<nav class="fixed left-0 right-0 top-0 z-50 border-b border-white/10 bg-[#0b1a33]/95 backdrop-blur-md">

    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">

        {{-- LOGO GAMBAR --}}
        <a href="{{ url('/') }}" class="flex items-center gap-2">
            <img src="{{ asset('Logo.png') }}" 
                alt="We've Been Hacked Logo" 
                class="h-10 w-auto">
            
            <span class="text-xl font-black uppercase tracking-wider text-white">
                We've Been
                <span class="text-[#d4a832]">Hacked!</span>
            </span>
        </a>

        {{-- MENU --}}
        <div class="flex items-center gap-8">

            <a href="{{ url('/') }}"
            class="text-sm font-semibold uppercase tracking-wider transition hover:text-[#e8c84a]">
                Home
            </a>

            <a href="{{ url('/about') }}"
            class="text-sm font-semibold uppercase tracking-wider transition hover:text-[#e8c84a]">
                About Game
            </a>

            <a href="{{ url('/how-to-play') }}"
            class="text-sm font-semibold uppercase tracking-wider transition hover:text-[#e8c84a]">
                How To Play
            </a>

            <a href="{{ url('/gallery') }}"
            class="text-sm font-semibold uppercase tracking-wider transition hover:text-[#e8c84a]">
                Gallery
            </a>

            {{-- HANDLER MANUAL (MENGARAH KE RUTE LARAVEL TANPA SPASI) --}}
            <a href="{{ url('/handler-manual') }}" 
               class="text-gray-300 hover:text-cyan-400 px-3 py-2 text-sm font-semibold transition-colors duration-200">
               Handler Manual
            </a>

            <a href="{{ url('/leaderboard') }}" 
               class="text-gray-300 hover:text-cyan-400 px-3 py-2 text-sm font-medium transition-colors duration-200">
               Leaderboard
            </a>

        </div>

    </div>

</nav>