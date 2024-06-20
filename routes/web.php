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

Route::get('/', [RestaurantController::class, 'index'])->name('restaurants.index');
Route::get('/restaurants/tables', [RestaurantController::class, 'allTables'])->name('restaurants.allTables');
Route::get('/restaurants/active-tables', [RestaurantController::class, 'allActiveTables'])->name('restaurants.allActiveTables');
Route::get('/restaurants/{id}', [RestaurantController::class, 'show'])->name('restaurants.show');
Route::get('/restaurants/{id}/tables', [RestaurantController::class, 'showTables'])->name('restaurants.tables');
Route::get('/restaurants/{id}/active-tables', [RestaurantController::class, 'showActiveTables'])->name('restaurants.active_tables');