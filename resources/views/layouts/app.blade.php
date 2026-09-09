<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', "We've Been Hacked")
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-[#0b1a33] text-white">

    {{-- NAVBAR --}}
    @include('components.navbar')

    {{-- CONTENT --}}
    <main class="max-w-7x1">

        @yield('content')

    </main>

</body>

</html> 