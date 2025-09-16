<x-guest-layout>
    <!-- Background Image -->
    <div class="fixed inset-0">
        <img src="{{ asset('assets/dodge.jpg') }}" 
             alt="Background" 
             class="w-full h-full object-cover">
        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <!-- Login Form Container -->
    <div class="relative z-10 flex items-center justify-center h-screen overflow-hidden">
        <div class="w-full max-w-md bg-black rounded-xl shadow-2xl p-8 text-white">
            
            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <img src="{{ asset('assets/Gowheels.png') }}" alt="Logo" class="h-16">
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-white" />
                    <x-text-input id="email" class="block mt-1 w-full bg-gray-800 text-white placeholder-gray-400 border border-gray-600 rounded-md focus:ring-2 focus:ring-indigo-400"
                                  type="email" 
                                  name="email" 
                                  :value="old('email')" 
                                  placeholder="Enter your email"
                                  required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-white" />
                    <x-text-input id="password" class="block mt-1 w-full bg-gray-800 text-white placeholder-gray-400 border border-gray-600 rounded-md focus:ring-2 focus:ring-indigo-400"
                                  type="password"
                                  name="password"
                                  placeholder="Enter your password"
                                  required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center text-white">
                        <input id="remember_me" type="checkbox" 
                               class="rounded border-gray-600 bg-gray-800 text-indigo-400 focus:ring-indigo-400" 
                               name="remember">
                        <span class="ms-2 text-sm">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Submit -->
                <div class="flex items-center justify-between mt-6">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-400 hover:text-white" 
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button type="submit" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-500 rounded-md shadow-md text-white font-semibold">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
