<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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
| Auth route
|
*/
//Login
Route::get('/', [LoginController::class, 'index'])->name('login');
//auth
Route::post('/auth', [LoginController::class, 'customLogin'])->name('login.auth');
//sigout
Route::get('/signout', [LoginController::class, 'signOut'])->name('signout');
//Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
//Register
Route::get('/users', [UserController::class, 'showallUser'])->name('users');
//Register add
Route::post('/register/add', [RegisterController::class, 'customRegistration'])->name('register.add');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Home route
|
*/
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
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Profile route
|
*/
//Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
//Profile add
Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');