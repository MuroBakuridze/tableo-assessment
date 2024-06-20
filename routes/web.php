<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test-route', function() {
    return 'Test route is working';
});

Route::get('/', [RestaurantController::class, 'index'])->name('restaurants.index');
Route::get('/restaurants/tables', [RestaurantController::class, 'allTables'])->name('restaurants.allTables');
Route::get('/restaurants/active-tables', [RestaurantController::class, 'allActiveTables'])->name('restaurants.allActiveTables');
Route::get('/restaurants/{id}', [RestaurantController::class, 'show'])->name('restaurants.show');
Route::get('/restaurants/{id}/tables', [RestaurantController::class, 'showTables'])->name('restaurants.tables');
Route::get('/restaurants/{id}/active-tables', [RestaurantController::class, 'showActiveTables'])->name('restaurants.active_tables');

// Routes for adding new restaurants, dining areas, and tables
Route::get('/restaurant/create', [RestaurantController::class, 'createRestaurant'])->name('restaurants.create');
Route::post('/restaurants', [RestaurantController::class, 'storeRestaurant'])->name('restaurants.store');

Route::get('/restaurants/{id}/tables/create', [RestaurantController::class, 'createTable'])->name('tables.create');
Route::post('/restaurants/{id}/tables', [RestaurantController::class, 'storeTable'])->name('tables.store');

Route::get('/dining-areas/create', [RestaurantController::class, 'createDiningArea'])->name('dining_areas.create');
Route::post('/dining-areas', [RestaurantController::class, 'storeDiningArea'])->name('dining_areas.store');