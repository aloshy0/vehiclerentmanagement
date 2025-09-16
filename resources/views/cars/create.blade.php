<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-white leading-tight">
            Add a {{ ucfirst($segment) }} Vehicle
        </h2>
    </x-slot>

    <div class="py-10 bg-black min-h-screen">
        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">
            <!-- Note: enctype is required for file uploads -->
            <form action="{{ route('cars.store', $segment) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Vehicle Name -->
                <div class="mb-4">
                    <label class="block font-semibold">Vehicle Name</label>
                    <input type="text" name="name" class="w-full border rounded p-2" required>
                </div>

                <!-- Brand -->
                <div class="mb-4">
                    <label class="block font-semibold">Brand</label>
                    <input type="text" name="brand" class="w-full border rounded p-2" required>
                </div>

                <!-- Price -->
                <div class="mb-4">
                    <label class="block font-semibold">Price per Day (₹)</label>
                    <input type="number" name="price" class="w-full border rounded p-2" required>
                </div>

                <!-- Owner Name -->
                <div class="mb-4">
                    <label class="block font-semibold">Owner Name</label>
                    <input type="text" name="owner_name" class="w-full border rounded p-2" required>
                </div>

                <!-- Owner Phone -->
                <div class="mb-4">
                    <label class="block font-semibold">Owner Phone</label>
                    <input type="text" name="owner_phone" class="w-full border rounded p-2" required>
                </div>

                <!-- Owner Image -->
                <div class="mb-4">
                    <label class="block font-semibold">Owner Image</label>
                    <input type="file" name="owner_image" class="w-full">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                    Add Vehicle
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
