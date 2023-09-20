<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//^^ FrontEnd 
Route::get('/',[HomeController::class,"Home"])->name("welcome");
Route::get('/categorie',[CategorieController::class,"categorie"])->name("categorie");
Route::get('/contact',[ContactController::class,"Contact"])->name("Contact");
Route::get('/cart',[CartController::class,"Cart"])->name("Cart");
Route::get('/login',[LoginController::class,"Login"])->name("Logine");
Route::get('/register',[LoginController::class,"register"])->name("registere");






// ^^dashboard
Route::get('/dash', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ^^ Authentification
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
