<?php

use Illuminate\Support\Facades\Route;
use App\Models\Station ;
use App\Models\Restaraunt ;
use App\Http\Controllers\StationController;
use App\Http\Controllers\RestarauntController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/stations', [StationController::class , 'index' ]);

Route::get('/restaurants/{station:id}', function ($stationId) {

    $station = Station::find($stationId);
    $restaurants = Restaraunt::where('station_id', $stationId)->get();

    return view('restaurants_stations', compact('station', 'restaurants'));
});


Route::get('/restaurant/{restaraunt:id}', function() {
    return view('restaurant');
});

Route::get('/restaurants', [RestarauntController::class , 'index']);

Route::post('/add-station' , [StationController::class , 'store']);

Route::post('/add-restaurant' , [RestarauntController::class , 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';