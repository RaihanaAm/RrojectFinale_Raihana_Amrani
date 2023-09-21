<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\master;
use App\Http\Controllers\masterColntroller;
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
Route::get('/login',[LoginController::class,"Login"])->name("Logine");
Route::get('/register',[LoginController::class,"register"])->name("registere");
Route::get('/dashboard',[dashboardController::class,"dashboard"])->middleware(['auth',"admin"])->name("dashboard.front");
Route::get('/webmaster',[masterColntroller::class,"webmaster"])->middleware(['auth',"master"])->name("webmaster");

//^^backend
Route::get('/contactBackend',[ContactController::class,"contactBack"])->name("contactBack")->middleware(['auth',"admin"]);
Route::get('/touch',[ContactController::class,"touchback"])->name("touchback")->middleware(['auth',"admin"]);
Route::put('/contactBackend/{contact}',[ContactController::class,"store"])->name("store.contact");
Route::post('/contact/touch',[ContactController::class,"touch"])->name("touch.contact");
Route::post('/newsletter',[ContactController::class,"newsletter"])->name("newsletter.contact");


// ^^dashboard
Route::get('/dash', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ^^ Authentification
Route::middleware('auth')->group(function () {
    // && front
    Route::get('/cart',[CartController::class,"Cart"])->name("Cart");

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
