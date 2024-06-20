<?php

namespace App\Models;

use App\Models\Table;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DiningArea extends Model
{
    use HasFactory;

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'dining_area_restaurant');
    }

    public function tables()
    {
        return $this->hasMany(Table::class);
    }
}
