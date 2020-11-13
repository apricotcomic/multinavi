<?php

use App\Http\Controllers\FloorController;
use App\Http\Controllers\LandmarkController;
use App\Http\Controllers\LandmarkFloorController;
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

Route::get('landmarkfloor/{landmark_id}', [LandmarkFloorController::class, 'landmarkfloor'])->name('landmarkfloor');

Route::resource('floor', FloorController::class);


