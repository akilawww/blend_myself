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
Auth::routes();
Route::get('/home', 'RecipesController@index');
Route::get('/result','RecipesController@search');
Route::get('/result/tag','RecipesController@searchTag');

// ヘッダーのリンクのルーティング
Route::get('/guideline', 'GuidesController@guideline');
Route::get('/privacypolicy', 'GuidesController@privacypolicy');
Route::get('/serviceterms', 'GuidesController@serviceterms');
Route::get('/glossary', 'GuidesController@glossary');
Route::get('/contact', 'GuidesController@contact');

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
Route::post('/recipe_form/create/posts', 'RecipeFormController@create')
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
Route::put('/edit/updateProcedure/{id}',  'EditController@updateProcedure')
    ->middleware('auth.basic');

// お気に入り機能ルーティング
Route::post('/favorite/add', 'FavoriteController@add')
    ->middleware('auth.basic');
Route::delete('/favorite/remove', 'FavoriteController@remove')
    ->middleware('auth.basic');

// いいね機能ルーティング
Route::post('/nice/add', 'NiceController@add')
    ->middleware('auth.basic');
Route::delete('/nice/remove', 'NiceController@remove')
    ->middleware('auth.basic');

// フォロー機能ルーティング
Route::post('/follow/add', 'FollowsController@add')
    ->middleware('auth.basic');
Route::delete('/follow/remove', 'FollowsController@remove')
    ->middleware('auth.basic');

// ユーザーページのルーティング
Route::get('/userpage/{id}', 'UserPageController@index');
