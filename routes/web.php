<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\LegumeController;
use App\Models\Fruit;
use App\Models\Legume;
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
    $fruits = Fruit::all();
    $legumes= Legume::all();
    return view('welcome', compact('fruits', 'legumes'));
});

Route::get('/fruits', [FruitController::class, 'index'])->name('fruit');
Route::get('/showfruits/{id}', [FruitController::class, 'show']);

Route::get('/legumes', [LegumeController::class, 'index'])->name('legume');
Route::get('/showlegumes/{id}', [LegumeController::class, 'show']);

Route::get('/administration', [AdminController::class, 'index']);