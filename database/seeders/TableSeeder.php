<?php

namespace Database\Seeders;

use App\Models\DiningArea;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TableSeeder extends Seeder
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

        $greenRestaurant = Restaurant::where('name', 'Green Restaurant')->first();
        $blueRestaurant = Restaurant::where('name', 'Blue Restaurant')->first();

        $greenRestaurant->tables()->createMany([
            ['name' => 'Table 1', 'minimum_capacity' => 2, 'maximum_capacity' => 4, 'active' => true, 'dining_area_id' => $indoor->id],
            ['name' => 'Table 2', 'minimum_capacity' => 2, 'maximum_capacity' => 4, 'active' => true, 'dining_area_id' => $indoor->id],
            ['name' => 'Table 3', 'minimum_capacity' => 2, 'maximum_capacity' => 4, 'active' => true, 'dining_area_id' => $indoor->id],
            ['name' => 'Table 4', 'minimum_capacity' => 2, 'maximum_capacity' => 4, 'active' => true, 'dining_area_id' => $indoor->id],
            ['name' => 'Table 5', 'minimum_capacity' => 3, 'maximum_capacity' => 5, 'active' => false, 'dining_area_id' => $indoor->id],
            ['name' => 'Table 6', 'minimum_capacity' => 3, 'maximum_capacity' => 5, 'active' => false, 'dining_area_id' => $indoor->id],
            ['name' => 'Table 7', 'minimum_capacity' => 3, 'maximum_capacity' => 5, 'active' => true, 'dining_area_id' => $outdoor->id],
            ['name' => 'Table 8', 'minimum_capacity' => 3, 'maximum_capacity' => 5, 'active' => true, 'dining_area_id' => $outdoor->id],
            ['name' => 'Table 9', 'minimum_capacity' => 3, 'maximum_capacity' => 5, 'active' => true, 'dining_area_id' => $outdoor->id],
            ['name' => 'Table 10', 'minimum_capacity' => 3, 'maximum_capacity' => 5, 'active' => true, 'dining_area_id' => $outdoor->id],
            ['name' => 'Table 11', 'minimum_capacity' => 3, 'maximum_capacity' => 5, 'active' => true, 'dining_area_id' => $outdoor->id],
        ]);

        $blueRestaurant->tables()->createMany([
            ['name' => 'Table 1', 'minimum_capacity' => 1, 'maximum_capacity' => 2, 'active' => true, 'dining_area_id' => $indoor->id],
            ['name' => 'Table 2', 'minimum_capacity' => 1, 'maximum_capacity' => 2, 'active' => true, 'dining_area_id' => $indoor->id],
            ['name' => 'Table 3', 'minimum_capacity' => 3, 'maximum_capacity' => 5, 'active' => true, 'dining_area_id' => $outdoorTerrace->id],
            ['name' => 'Table 4', 'minimum_capacity' => 3, 'maximum_capacity' => 5, 'active' => true, 'dining_area_id' => $outdoorTerrace->id],
        ]);
    }
}
