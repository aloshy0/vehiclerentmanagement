<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ucfirst($car->name) }} Details
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-bold mb-4">{{ $car->name }}</h3>
            
            <!-- Display the uploaded image -->
            @if($car->image)
                <img src="{{ asset('storage/'.$car->image) }}" alt="{{ $car->name }}" class="w-full h-auto mb-4 rounded">
            @else
                <p>No image uploaded.</p>
            @endif

            <p><strong>Segment:</strong> {{ ucfirst($car->segment) }}</p>
            <p><strong>Description:</strong> {{ $car->description ?? 'N/A' }}</p>
        </div>
    </div>
</x-app-layout>
