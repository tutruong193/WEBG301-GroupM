<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CustomerController;
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
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/home', [ArtistController::class, 'index']);
Route::get('/artistAdd', [ArtistController::class, 'store']);
Route::get('/adminartist', [ArtistController::class, 'index1']);
Route::get('/detail', [ArtistController::class, 'show']);
Route::resource('artists', ArtistController::class);
Route::resource('customers', CustomerController::class);
Route::get('/register',[CustomerController::class, 'index']);
Route::post('/register', [CustomerController::class, 'store'])->name('customers.store');