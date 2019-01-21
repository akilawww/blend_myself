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
Route::get('/guideline', 'GuidesController@guideline');
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
// マイページのルーティング
Route::get('/mypage', 'MyPageController@index')
    ->middleware('auth.basic');
// 編集ページのルーティング
Route::get('/edit/{id}', 'EditController@index')
    ->middleware('auth.basic');
    
Route::put('/edit/updateRecipe/{id}',  'EditController@updateRecipe')
    ->middleware('auth.basic');
Route::delete('/edit/deleteMaterrial/{id}',  'EditController@deleteMaterrial')
    ->middleware('auth.basic');
Route::delete('/edit/deleteProcedure/{id}',  'EditController@deleteProcedure')
    ->middleware('auth.basic');
Route::put('/edit/putProcedure/{id}',  'EditController@putProcedure')
    ->middleware('auth.basic');