<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RequestController;
use App\Http\Middleware\checkLogin;

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
    return view('login');})->name('login');
Route::get('/home',[MainController::class,'index2'])->name('home');
Route::get('/register',[LoginController::class, 'index']);
Route::post('/store',[LoginController::class,'postLogin']);
Route::post('/register', [LoginController::class, 'store'])->name('users.store');
Route::get('/admin/artist',[MainController::class,'index'])->name('admin')->middleware('auth');
Route::get('/artistAdd', [ArtistController::class, 'store']);
Route::middleware([checkLogin::class])->group(function () {
    Route::resource('artists', ArtistController::class);
    Route::resource('requests', RequestController::class);
});
Route::resource('artists', ArtistController::class);
Route::get('/logout', [LoginController::class, 'logout']);
// Route::get('/home', [ArtistController::class, 'index']);
// Route::get('/artistAdd', [ArtistController::class, 'store']);
// Route::get('/adminartist', [ArtistController::class, 'index1'])->name('adminartist');
// Route::post('/adminartist', [LoginController::class, 'postLogin'])->name('login.post'); 
// Route::get('/detail', [ArtistController::class, 'show']);
// Route::resource('artists', ArtistController::class);

