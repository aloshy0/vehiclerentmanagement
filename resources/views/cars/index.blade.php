<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Cars — {{ ucfirst($segment) }}</h2>
    </x-slot>

    <div class="py-8 max-w-4xl mx-auto px-4">

  {{-- Add Vehicle Button --}}
<a href="{{ route('cars.create', $segment) }}" 
   class="inline-block bg-blue-500 text-gray-900 font-semibold px-6 py-3 rounded-lg shadow-lg hover:shadow-xl transition-all duration-150">
   Add a Vehicle
</a>

        @if($cars->isEmpty())
            <p class="text-gray-600">No vehicles in {{ $segment }} yet.</p>
        @else
            <div class="grid gap-6">

                @foreach($cars as $car)
                    <div class="p-4 bg-white rounded shadow flex items-center gap-4">

                        {{-- Vehicle Image --}}
                        @if(isset($car->image))
                            <img src="{{ asset('storage/' . $car->image) }}" 
                                 alt="{{ $car->name }}" class="w-24 h-24 object-cover rounded">
                        @endif

                        {{-- Car Details --}}
                        <div class="flex-1">
                            <div class="font-semibold text-lg">{{ $car->name }}</div>
                            <div class="text-gray-600">Brand: {{ $car->brand }}</div>
                            <div class="text-gray-600">Price: ₹{{ $car->price }}</div>
                            <div class="text-gray-600">Owner: {{ $car->owner_name }}</div>
                            <div class="text-gray-600">Phone: {{ $car->owner_phone }}</div>
                        </div>

                        {{-- Owner Image --}}
                        @if(isset($car->owner_image))
                            <img src="{{ asset('storage/' . $car->owner_image) }}" 
                                 alt="{{ $car->owner_name }}" class="w-16 h-16 object-cover rounded-full">
                        @endif

                        {{-- Delete Button (only for owner) --}}
                        @if($car->user_email === auth()->user()->email)
                            <form action="{{ route('cars.destroy', $car) }}" method="POST" 
                                  onsubmit="return confirm('Are you sure you want to delete this car?');"
                                  class="ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                    Delete
                                </button>
                            </form>
                        @endif

                    </div>
                @endforeach

            </div>
        @endif
    </div>
</x-app-layout>
