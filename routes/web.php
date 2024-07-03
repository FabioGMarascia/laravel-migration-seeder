<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;

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

// Route::get('/', function () {
//     $dati = config("data");
//     return view('home', $dati);
// })->name("home");


Route::get('/', [PageController::class, "home"])->name("home");
Route::get('/home', [PageController::class, "home"])->name("home");
Route::get('/trainsInfo', [PageController::class, "trainsInfo"])->name("trainsInfo");
