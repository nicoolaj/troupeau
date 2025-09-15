<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return response()->json($animals);
    }

    public function store(Request $request)
    {
        $animal = Animal::create($request->all());
        return response()->json($animal, 201);
    }

    public function show(Animal $animal)
    {
        return response()->json($animal);
    }

    public function update(Request $request, Animal $animal)
    {
        $animal->update($request->all());
        return response()->json($animal);
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();
        return response()->json(null, 204);
    }
}