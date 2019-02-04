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
// トップ
Route::get('/top', function(){ return view('top/index');});

// レシピ一覧画面のルーティング
Route::get('/', 'RecipesController@index');
Route::get('/recipes/{id}', 'RecipesController@show');
//Route::get('/home', 'RecipesController@index');
Route::get('/result','RecipesController@search');
Route::get('/result/tag','RecipesController@searchTag');

// 認証機能
Auth::routes(['verify' => true]);
Route::get('/home', 'RecipesController@index')->middleware('verified')->name('home');

// ヘッダーのリンクのルーティング
Route::get('/guideline', 'GuidesController@guideline');
Route::get('/privacypolicy', 'GuidesController@privacypolicy');
Route::get('/serviceterms', 'GuidesController@serviceterms');
Route::get('/glossary', 'GuidesController@glossary');
Route::get('/contact', 'GuidesController@contact');

// レシピ投稿画面のルーティング
Route::get('/recipe_form', 'RecipeFormController@index')
    ->middleware('verified');
Route::get('/recipe_form/materrial_procedure/{id}', 'RecipeFormController@materrialProcedure')
    ->middleware('verified');
Route::post('/recipe_form/posts', 'RecipeFormController@store')
    ->middleware('verified');
Route::post('/recipe_form/materrial/posts', 'RecipeFormController@materrialStore')
    ->middleware('verified');
Route::post('/recipe_form/procedure/posts', 'RecipeFormController@procedureStore')
    ->middleware('verified');
Route::post('/recipe_form/create/posts', 'RecipeFormController@create')
    ->middleware('verified');

// マイページのルーティング
Route::get('/mypage', 'MyPageController@index')
    ->middleware('verified');
Route::get('/mypage/favorite', 'MyPageController@favorite')
    ->middleware('verified');
Route::get('/mypage/follow', 'MyPageController@follow')
    ->middleware('verified');
Route::get('/mypage/follower', 'MyPageController@follower')
    ->middleware('verified');

// 登録情報のルーティング
Route::get('/userEdit', 'UserEditController@index')
    ->middleware('verified');
Route::put('/userEdit/name_update', 'UserEditController@updateName')
    ->middleware('verified');
Route::put('/userEdit/icon_update', 'UserEditController@updateIcon')
    ->middleware('verified');
Route::delete('/userEdit/icon_delete', 'UserEditController@deleteIcon')
    ->middleware('verified');
Route::put('/userEdit/comment_update', 'UserEditController@updateComment')
    ->middleware('verified');

// 編集ページのルーティング
Route::get('/edit/{id}', 'EditController@index')
    ->middleware('verified');
Route::put('/edit/updateRecipe/{id}',  'EditController@updateRecipe')
    ->middleware('verified');
Route::delete('/edit/deleteMaterrial/{id}',  'EditController@deleteMaterrial')
    ->middleware('verified');
Route::delete('/edit/deleteProcedure/{id}',  'EditController@deleteProcedure')
    ->middleware('verified');
Route::put('/edit/updateProcedure/{id}',  'EditController@updateProcedure')
    ->middleware('verified');

// お気に入り機能ルーティング
Route::post('/favorite/add', 'FavoriteController@add')
    ->middleware('verified');
Route::delete('/favorite/remove', 'FavoriteController@remove')
    ->middleware('verified');

// いいね機能ルーティング
Route::post('/nice/add', 'NiceController@add')
    ->middleware('verified');
Route::delete('/nice/remove', 'NiceController@remove')
    ->middleware('verified');

// フォロー機能ルーティング
Route::post('/follow/add', 'FollowsController@add')
    ->middleware('verified');
Route::delete('/follow/remove', 'FollowsController@remove')
    ->middleware('verified');

// ユーザーページのルーティング
Route::get('/userpage/{id}', 'UserPageController@index');
