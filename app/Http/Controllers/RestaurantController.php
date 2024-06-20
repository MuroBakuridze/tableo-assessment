<?php

namespace App\Http\Controllers;

use App\Models\DiningArea;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    protected $restaurants;

    public function __construct()
    {
        $this->restaurants = Restaurant::all();
    }

    public function index()
    {
        $restaurants = Restaurant::with('diningAreas')->get();
        return view('restaurants.index', ['restaurants' => $this->restaurants, 'restaurantsData' => $restaurants]);
    }

    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurants.show', ['restaurant' => $restaurant, 'restaurants' => $this->restaurants]);
    }

    public function showTables($id)
    {
        $restaurant = Restaurant::with('tables')->findOrFail($id);
        return view('restaurants.tables', ['restaurant' => $restaurant, 'restaurants' => $this->restaurants]);
    }

    public function showActiveTables($id)
    {
        $restaurant = Restaurant::with(['tables' => function ($query) {
            $query->where('active', true);
        }, 'diningAreas'])->findOrFail($id);

        return view('restaurants.active_tables', ['restaurant' => $restaurant, 'restaurants' => $this->restaurants]);
    }

    public function allTables()
    {
        $tables = Restaurant::with('tables')->get()->pluck('tables')->flatten();
        return view('restaurants.all_tables', ['tables' => $tables, 'restaurants' => $this->restaurants]);
    }

    public function allActiveTables()
    {
        $restaurants = Restaurant::with(['tables' => function ($query) {
            $query->where('active', true);
        }, 'diningAreas'])->get();
    
        $diningAreas = [];
        foreach ($restaurants as $restaurant) {
            foreach ($restaurant->diningAreas as $diningArea) {
                foreach ($diningArea->tables->where('restaurant_id', $restaurant->id)->where('active', true) as $table) {
                    $diningAreas[$diningArea->name][] = $table;
                }
            }
        }
    
        return view('restaurants.all_active_tables', ['diningAreas' => $diningAreas, 'restaurants' => $this->restaurants]);
    }

    public function createRestaurant()
    {
        return view('restaurants.create');
    }

    public function storeRestaurant(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Restaurant::create($request->all());

        return redirect()->route('restaurants.index')->with('success', 'Restaurant created successfully.');
    }

    public function createTable($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $diningAreas = DiningArea::all();
        return view('tables.create', compact('restaurant', 'diningAreas'));
    }

    public function storeTable(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'minimum_capacity' => 'required|integer|min:1',
            'maximum_capacity' => 'required|integer|min:1',
            'active' => 'required|boolean',
            'dining_area_id' => 'required|exists:dining_areas,id',
        ]);

        $restaurant = Restaurant::findOrFail($id);
        $restaurant->tables()->create($request->all());

        return redirect()->route('restaurants.show', $id)->with('success', 'Table created successfully.');
    }

    public function createDiningArea()
    {
        return view('dining_areas.create');
    }

    public function storeDiningArea(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        DiningArea::create($request->all());

        return redirect()->route('restaurants.index')->with('success', 'Dining Area created successfully.');
    }
}
