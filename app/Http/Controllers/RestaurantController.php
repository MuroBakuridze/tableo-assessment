<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

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
}
