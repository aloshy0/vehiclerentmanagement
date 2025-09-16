<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'GoWheels') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,600&display=swap" rel="stylesheet" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex items-center justify-center min-h-screen font-sans antialiased relative">

    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('assets/dodge.jpg') }}" 
             alt="Background" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div> <!-- subtle overlay -->
    </div>

    <!-- Content -->
    <div class="relative z-10 text-center">
        <!-- Title -->
        <h1 class="text-4xl font-bold mb-8 text-white drop-shadow-lg">
            GoWheels
        </h1>

        <!-- Buttons -->
        @if (Route::has('login'))
            <div class="flex justify-center gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}" 
                       class="px-6 py-2 bg-[#F7CAC9] text-white rounded-full shadow hover:bg-[#f5b0ad] transition">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" 
                       class="px-6 py-2 bg-[#F7CAC9] text-white rounded-full shadow hover:bg-[#f5b0ad] transition">
                        Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" 
                           class="px-6 py-2 bg-[#F7CAC9] text-white rounded-full shadow hover:bg-[#f5b0ad] transition">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

</body>
</html>
