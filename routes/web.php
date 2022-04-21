<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('/', 'HomeController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

// ROUTE DE LA PAGE PRINCIPALE 
use App\Http\Controllers\HomeController;
Route::get('/home', [HomeController::class, 'index'])->name('home');

// ROUTE DES CATEGORIES
//Les différentes routes du Menu Dynamique 
use App\Http\Controllers\CategoriesController;
Route::get('/category', [CategoriesController::class, 'show'])
    ->name('categories.show');

// DETAILS D'UN POST 
Route::get('/posts/{post}.html', [PostsController::class, 'show'])
    -> where(['post' => '[1-9][0-9]*', 'slug' => '[a-z0-9][a-z0-9\-]*'])
    -> name('posts.show');


// AJAX - MORE RESSOURCES 
Route::get('/ajax/posts', [\App\Http\Controllers\PostsController::class, 'more'])
->name('ajax.posts.more');


//Route d'une page ? 
Route::get('/pages', [App\Http\Controllers\PagesController::class, 'show'])
    ->name('pages.show');

