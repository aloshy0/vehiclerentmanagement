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
<body class="min-h-screen font-sans antialiased relative">

    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('assets/dodge.jpg') }}" 
             alt="Background" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/50"></div> <!-- darker overlay for contrast -->
    </div>

    <!-- Content: left hero text + right auth -->
    <div class="relative z-10 min-h-screen flex items-center justify-center px-6">
        <div class="w-full max-w-6xl mx-auto flex gap-12 items-center">
            <!-- Left hero column -->
            <div class="flex-1 text-white">
                <h1 style="font-size: 50px; font-weight: 800; line-height: 1.1; color:white; text-shadow: 2px 2px 8px rgba(0,0,0,0.7);">
                    <b>Vehicle Rental <br>Management System</b>
                </h1>

                <p class="mt-6 max-w-2xl text-lg text-white/90">
                    Whether you manage a small fleet or a large rental agency, our system can <br>
                    do it all. It handles bookings, tracking, billing, customer management, and more.
                </p>

                <div class="mt-8 flex flex-wrap gap-4">
                    <aside>
                        @if (Route::has('login'))
                            <div class="mt-6 flex gap-4 justify-center flex-wrap">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                       class="bg-white text-gray-900 px-4 py-2 rounded-lg shadow hover:shadow-md">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                       class="bg-white text-gray-900 px-4 py-2 rounded-lg shadow hover:shadow-md">
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                           class="bg-white text-gray-900 px-4 py-2 rounded-lg shadow hover:shadow-md">
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </aside>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
