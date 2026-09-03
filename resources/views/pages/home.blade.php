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

    <div class="flex min-h-screen items-center justify-center px-4">

        <div class="text-center max-w-3xl">

            <!-- Badge -->
            <p class="mb-4 text-xs uppercase tracking-[0.3em] text-sky-blue/80 font-semibold text-white drop-shadow-[0_0_12px_rgba(122,179,224,0.2)]">
                A Cybersecurity Educational Game
            </p>

            <!-- Main Headline -->
            <h1 class="text-5xl font-black uppercase md:text-7xl leading-tight">
                WE'VE BEEN
                <span class="text-muted-yellow drop-shadow-[0_0_18px_rgba(212,168,50,0.25)]">
                    HACKED!
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

</body>

</html>