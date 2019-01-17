<?php

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

Route::get('/', 'RecipesController@index'); 
Route::get('/recipes/{id}', 'RecipesController@show'); 
Auth::routes();
Route::get('/home', 'RecipesController@index'); 
// レシピフォームのルーティング
Route::get('/recipe_form', 'RecipeFormController@index')
    ->middleware('auth.basic'); 
Route::get('/recipe_form/materrial_procedure/{id}', 'RecipeFormController@materrialProcedure')
    ->middleware('auth.basic'); 
    Route::post('/recipe_form/posts', 'RecipeFormController@store')
    ->middleware('auth.basic');
Route::post('/recipe_form/materrial/posts', 'RecipeFormController@materrialStore')
    ->middleware('auth.basic');
    Route::post('/recipe_form/procedure/posts', 'RecipeFormController@procedureStore')
    ->middleware('auth.basic');