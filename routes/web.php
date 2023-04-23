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
    return view('home');
});
Route::get('/admin', function () {
    return view('admin-artist');
});
Route::get('/home', [ArtistController::class, 'index']);

Route::get('/detail', [ArtistController::class, 'show']);

Route::resource('artists', ArtistController::class);