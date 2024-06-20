<?php

namespace App\Models;

use App\Models\Table;
use App\Models\DiningArea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function tables()
    {
        return $this->hasMany(Table::class);
    }

    public function diningAreas()
    {
        return $this->belongsToMany(DiningArea::class, 'dining_area_restaurant');
    }
}
