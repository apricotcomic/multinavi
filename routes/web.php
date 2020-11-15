<?php

use App\Http\Controllers\FloorController;
use App\Http\Controllers\LandmarkController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('menu', [MenuController::class, 'menu'])->name('menu');

Route::resource('landmark', LandmarkController::class);

Route::get('floor/index/{landmark_coordinate_id}', [FloorController::class, 'index'])->name('floor.index');
Route::get('floor/create/{landmark_coordinate_id}', [FloorController::class, 'create'])->name('floor.create');
Route::post('floor', [FloorController::class, 'store'])->name('floor.store');
Route::get('floor/show/{floor_coordinate_id}', [FloorController::class, 'show'])->name('floor.show');
Route::get('floor/{floor_coordinate_id}/edit', [FloorController::class, 'edit'])->name('floor.edit');
Route::put('floor/{floor_coordinate_id}', [FloorController::class, 'update'])->name('floor.update');
Route::delete('floor/{floor_coordinate_id}', [FloorController::class, 'destroy'])->name('floor.destroy');

Route::get('shop/index/{landmark_coordinate_id}/{floor_coordinate_id}', [ShopController::class, 'index'])->name('shop.index');
Route::get('shop/create/{landmark_coordinate_id}', [ShopController::class, 'create'])->name('shop.create');
Route::post('shop', [ShopController::class, 'store'])->name('shop.store');
Route::get('shop/{shop_coordinate_id}', [ShopController::class, 'show'])->name('shop.show');
Route::get('shop/{shop_coordinate_id}/edit', [ShopController::class, 'edit'])->name('shop.edit');
Route::put('shop/{shop_coordinate_id}', [ShopController::class, 'update'])->name('shop.update');
Route::delete('shop/{shop_coordinate_id}', [ShopController::class, 'destroy'])->name('shop.destroy');


