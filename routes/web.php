<?php

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

Route::get('/', function () {
    return view('index');
});


Route::get('/category', function () {


    return view('category', [
        'categories' =>  App\Models\Category::all()
    ]);
});

Route::get('/recipes-by-category/{categoryid}', 'RecipeController@show');
Route::get('/single-recipe/{recipeid}', 'RecipeController@singleRecipe');

Auth::routes();


Route::get('/', 'HomeController@show')->name('home');
