<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>We've Been Hacked</title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#0b1a33',
                        'muted-yellow': '#d4a832',
                        'soft-yellow': '#e8c84a',
                        'pale-yellow': '#f5e6b0',
                        'light-blue': '#4a8ecf',
                        'sky-blue': '#7bb3e0',
                        'glow-blue': '#3b82f6',
                    }
                }
            }
        }
    </script>
</head>

<body class="min-h-screen bg-navy text-white">

    <!-- ============ NAVBAR ============ -->
    <nav class="sticky top-0 z-50 border-b border-muted-yellow/20 bg-navy/80 backdrop-blur-md">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">

                <!-- Brand / Logo -->
                <div class="flex-shrink-0">
                    <a href="#" class="text-sm font-black uppercase tracking-widest text-muted-yellow drop-shadow-[0_0_12px_rgba(212,168,50,0.2)] md:text-base">
                        WE'VE BEEN <span class="text-white">HACKED!</span>
                    </a>
                </div>

                <!-- Desktop Menu (hidden on mobile) -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-1 lg:space-x-2">
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white/80 transition hover:text-muted-yellow">HOME</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white/80 transition hover:text-muted-yellow">ABOUT</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white/80 transition hover:text-muted-yellow">HOW TO PLAY</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white/80 transition hover:text-muted-yellow">CYBERSECURITY</a>
                        <a href="gallery" class="rounded-md px-3 py-2 text-sm font-medium text-white/80 transition hover:text-muted-yellow">GALLERY</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white/80 transition hover:text-muted-yellow">TEAM</a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center rounded-md p-2 text-white/70 transition hover:bg-white/10 hover:text-muted-yellow focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Icon hamburger -->
                        <svg id="hamburger-icon" class="block h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <!-- Icon close (hidden by default) -->
                        <svg id="close-icon" class="hidden h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-white/80 transition hover:bg-white/5 hover:text-muted-yellow">HOME</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-white/80 transition hover:bg-white/5 hover:text-muted-yellow">ABOUT</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-white/80 transition hover:bg-white/5 hover:text-muted-yellow">HOW TO PLAY</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-white/80 transition hover:bg-white/5 hover:text-muted-yellow">CYBERSECURITY</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-white/80 transition hover:bg-white/5 hover:text-muted-yellow">GALLERY</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-white/80 transition hover:bg-white/5 hover:text-muted-yellow">TEAM</a>
            </div>
        </div>
    </nav>

    <!-- ============ HERO / MAIN CONTENT ============ -->
    <div class="flex min-h-[calc(100vh-4rem)] items-center justify-center px-4">

        <div class="text-center max-w-3xl">

            <!-- Badge -->
            <p class="mb-4 text-xs uppercase tracking-[0.3em] text-sky-blue/80 font-semibold">
                A Cybersecurity Educational Game
            </p>

            <!-- Main Headline -->
            <h1 class="text-5xl font-black uppercase md:text-7xl leading-tight">
                WE'VE BEEN
                <span class="text-muted-yellow drop-shadow-[0_0_18px_rgba(212,168,50,0.25)]">
                    HACKED
                </span>
            </h1>

            <!-- Subtext -->
            <p class="mt-6 text-base text-white/60 font-light tracking-wide">
                The system has been compromised.
            </p>

            <!-- Decorative accent line -->
            <div class="mt-8 flex items-center justify-center gap-4">
                <span class="h-px w-12 bg-muted-yellow/30"></span>
                <span class="text-muted-yellow/40 text-xs tracking-[0.3em]">⚠</span>
                <span class="h-px w-12 bg-muted-yellow/30"></span>
            </div>

            <!-- CTA / extra info -->
            <p class="mt-6 text-sm text-white/40 font-light tracking-wider">
                <span class="text-muted-yellow/60">●</span> &nbsp;Incident logged &nbsp;
                <span class="text-muted-yellow/60">●</span> &nbsp;Response initiated
            </p>

        </div>

    </div>

    <!-- ============ JAVASCRIPT FOR MOBILE TOGGLE ============ -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const button = document.getElementById('mobile-menu-button');
            const menu = document.getElementById('mobile-menu');
            const hamburger = document.getElementById('hamburger-icon');
            const close = document.getElementById('close-icon');

            button.addEventListener('click', function() {
                const isOpen = menu.classList.contains('hidden');

                // Toggle menu
                menu.classList.toggle('hidden');

                // Toggle icons
                hamburger.classList.toggle('hidden');
                close.classList.toggle('hidden');

                // Update aria-expanded
                button.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            });
        });
    </script>

</body>

</html>