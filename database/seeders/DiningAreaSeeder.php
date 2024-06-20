<?php

namespace Database\Seeders;

use App\Models\DiningArea;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DiningAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DiningArea::create(['name' => 'Indoor']);
        DiningArea::create(['name' => 'Outdoor']);
        DiningArea::create(['name' => 'Outdoor Terrace']);
    }
}
