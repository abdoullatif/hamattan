<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\CategorieController;

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
Route::get('/', [HomeController::class, 'index'])->name('login');
//Dashboard
Route::get('/home', [HomeController::class, 'showDashboad'])->name('home');
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
Route::post('/themes/add', [ThemeController::class, 'storeThemes'])->name('themes.add');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Categorie route
|
*/
//Categories
//Add Categories
Route::get('/categories', [CategorieController::class, 'index'])->name('categories');
//Add Categories
Route::get('/categories/forms', [CategorieController::class, 'showFormsCategories'])->name('categories.forms');
//Add Categories
Route::post('/categories/add', [CategorieController::class, 'storeCategories'])->name('categories.add');
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
//Add Livre
Route::post('/livres/add', [LivreController::class, 'storeLivres'])->name('livres.add');
//Add Livre contenue
Route::get('/livres/edit/{livre_id}', [LivreController::class, 'editLivres'])->name('livres.edit');
//Add Livre contenue
Route::get('/livres/update', [LivreController::class, 'updateLivres'])->name('livres.update');