<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfilController;


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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('categories',CategoriesController::class);
Route::resource('articles',ArticlesController::class);
Route::get('tabledarticle', [ArticlesController::class,'tabledarticle']);
Route::get('articleByCategorie/{id}', [UserController::class, 'articleByCategorie'])->name('articleByCategorie');
Route::get('details/{id}', [UserController::class, 'details'])->name('details');

//   route profil de l'utilisateur
Route::get('/profiles',[ProfilController::class,'profile'])->name('profiles');
// route mod
Route::get('/modifications',[ProfilController::class,'modifications'])->name('modifications');


require __DIR__.'/auth.php';
