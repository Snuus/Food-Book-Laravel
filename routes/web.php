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



// Home has to be cleaned up *
Route::get('/', function () {
    return view('index');
});


// Everything to do with recipes
Route::get('/all-recipes', 'RecipeController@allRecipes');
Route::get('/category', 'RecipeController@category');
Route::get('/recipes-by-category/{categoryid}', 'RecipeController@show');
Route::get('/single-recipe/{recipeid}', 'RecipeController@singleRecipe');

Auth::routes();


Route::get('/submit-recipe', 'RestrictionController@form');
Route::post('/submit-recipe', 'RestrictionController@post');


