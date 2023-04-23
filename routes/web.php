<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
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

Route::get('/home', [ArtistController::class, 'index']);
Route::get('/adminartist', [ArtistController::class, 'index1']);
Route::get('/detail', [ArtistController::class, 'show']);
Route::resource('artists', ArtistController::class);