<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/list', [CategoriesController::class, "ListCategories"])->name('list');
Route::get('/show/{id}', [CategoriesController::class, "ShowCategories"]);
Route::get('/delete/{id}', [CategoriesController::class, "DeleteCategories"]);
Route::post('/store', [CategoriesController::class, "StoreCategories"])->name("store");
Route::get('/update/{id}', [CategoriesController::class, "UpdateCategories"]);
Route::post('/edit/{id}', [CategoriesController::class, "EditCategories"])->name('edit');