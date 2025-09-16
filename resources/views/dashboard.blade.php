<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            SEGMENTS
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                

                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('cars.index', ['segment' => 'sedan']) }}"
                           class="text-blue-600 hover:underline">
                            Sedans
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cars.index', ['segment' => 'suv']) }}"
                           class="text-blue-600 hover:underline">
                            SUVs
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cars.index', ['segment' => 'hatchback']) }}"
                           class="text-blue-600 hover:underline">
                            Hatchbacks
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cars.index', ['segment' => 'luxury']) }}"
                           class="text-blue-600 hover:underline">
                            Luxury Cars
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</x-app-layout>
