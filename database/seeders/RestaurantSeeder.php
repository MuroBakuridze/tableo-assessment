<?php

namespace Database\Seeders;

use App\Models\DiningArea;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $indoor = DiningArea::where('name', 'Indoor')->first();
        $outdoor = DiningArea::where('name', 'Outdoor')->first();
        $outdoorTerrace = DiningArea::where('name', 'Outdoor Terrace')->first();

        $greenRestaurant = Restaurant::create(['name' => 'Green Restaurant']);
        $blueRestaurant = Restaurant::create(['name' => 'Blue Restaurant']);

        $greenRestaurant->diningAreas()->attach([$indoor->id, $outdoor->id]);
        $blueRestaurant->diningAreas()->attach([$indoor->id, $outdoorTerrace->id]);
    }
}
