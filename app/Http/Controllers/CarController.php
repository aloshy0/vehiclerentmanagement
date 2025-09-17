<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index($segment)
    {
        $cars = Car::where('segment', $segment)->get();
        return view('cars.index', compact('cars', 'segment'));
    }

    public function create($segment)
    {
        return view('cars.create', compact('segment'));
    }

    public function store(Request $request, $segment)
    {
        // Validate all input fields including owner image
        $request->validate([
            'name' => 'required|string|max:100',
            'brand' => 'required|string|max:100',
            'price' => 'required|numeric',
            'owner_name' => 'required|string|max:100',
            'owner_phone' => 'required|string|max:15',
            'owner_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle owner image upload if provided
        $ownerImagePath = null;
        if ($request->hasFile('owner_image')) {
            $ownerImagePath = $request->file('owner_image')->store('owners', 'public');
        }

        // Create the car record
        Car::create([
            'segment' => $segment,
            'name' => $request->name,
            'brand' => $request->brand,
            'price' => $request->price,
            'owner_name' => $request->owner_name,
            'owner_phone' => $request->owner_phone,
            'owner_image' => $ownerImagePath,
            'user_email' => auth()->user()->email, // 👈 attach logged-in user
        ]);

        // Redirect to the list page with a success message
        return redirect()->route('cars.index', $segment)
                         ->with('success', 'Car added successfully!');
    }

    public function destroy(Car $car)
{
    if ($car->user_email !== auth()->user()->email) {
        abort(403, 'Unauthorized action.');
    }

    $car->delete();

    return redirect()->route('cars.index', $car->segment)
                     ->with('success', 'Car deleted successfully.');
}
}
