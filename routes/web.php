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
// レシピ一覧画面のルーティング
Route::get('/', 'RecipesController@index');
Route::get('/recipes/{id}', 'RecipesController@show');
Route::get('/guideline', 'GuidesController@guideline');
Route::get('/privacypolicy', 'GuidesController@privacypolicy');
Auth::routes();
Route::get('/home', 'RecipesController@index');

// レシピ投稿画面のルーティング
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
