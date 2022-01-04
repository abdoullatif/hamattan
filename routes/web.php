<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\ThemeController;

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
/*
Route::get('/', function () {
    return view('home');
});*/
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Home route
|
*/
//Dashboard
Route::get('/', [HomeController::class, 'index'])->name('home');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Themes route
|
*/
//Theme
Route::get('/themes', [ThemeController::class, 'index'])->name('themes');
//Add Theme interface
Route::get('/themes/forms', [ThemeController::class, 'showFormsThemes'])->name('themes.forms');
//Add Theme
Route::get('/themes/add', [ThemeController::class, 'storeThemes'])->name('themes.add');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Livres route
|
*/
//Livres
Route::get('/livres', [LivreController::class, 'index'])->name('livres');
//Add Livre interface
Route::get('/livres/forms', [LivreController::class, 'showFormsLivres'])->name('livres.forms');