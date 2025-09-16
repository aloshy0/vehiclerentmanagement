{{-- resources/views/cars/segment.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold mb-4">Sedan Cars</h1>
    
    <p class="text-gray-700 mb-6">
        Welcome to the Sedan section. Here you'll find comfortable and efficient cars perfect for city driving and long trips.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Example car cards -->
        <div class="p-4 bg-white rounded-lg shadow">
            <h2 class="text-xl font-semibold">Honda City</h2>
            <p class="text-gray-600">A reliable sedan with great mileage.</p>
        </div>

        <div class="p-4 bg-white rounded-lg shadow">
            <h2 class="text-xl font-semibold">Toyota Corolla</h2>
            <p class="text-gray-600">Comfortable and efficient for family trips.</p>
        </div>

        <div class="p-4 bg-white rounded-lg shadow">
            <h2 class="text-xl font-semibold">Hyundai Verna</h2>
            <p class="text-gray-600">Stylish sedan with modern features.</p>
        </div>
    </div>
</div>
@endsection
