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
Route::get('/', function(){
  return view('top/index');
})->name('top');

// レシピ一覧画面のルーティング
Route::get('/recipes', 'RecipesController@index')
  ->name('recipes.index');
Route::get('/recipes/{id}', 'RecipesController@show')
  ->name('recipes.show');

//Route::get('/home', 'RecipesController@index');
// 検索機能
Route::get('/result','RecipesController@search')
  ->name('result.search');
Route::get('/result/tag','RecipesController@searchTag')
  ->name('result.tag');

// 認証機能
Auth::routes(['verify' => true]);
Route::get('/home', 'RecipesController@index')
  ->middleware('verified')
  ->name('home');

// ヘッダーのリンクのルーティング
Route::get('/guideline', 'GuidesController@guideline')
  ->name('guideline');
Route::get('/privacypolicy', 'GuidesController@privacypolicy')
  ->name('privacypolicy');
Route::get('/serviceterms', 'GuidesController@serviceterms')
  ->name('serviceterms');
Route::get('/glossary', 'GuidesController@glossary')
  ->name('glossary');
Route::get('/contact', 'GuidesController@contact')
  ->name('contact');

// レシピ投稿画面のルーティング
Route::get('/recipe_form', 'RecipeFormController@index')
    ->middleware('verified')
    ->name('recipe_form.index');
Route::get('/recipe_form/materrial_procedure/{id}', 'RecipeFormController@materrialProcedure')
    ->middleware('verified');
Route::post('/recipe_form/posts', 'RecipeFormController@store')
    ->middleware('verified')
    ->name('recipe_form.store');
Route::post('/recipe_form/materrial/posts', 'RecipeFormController@materrialStore')
    ->middleware('verified')
    ->name('recipe_form.materrialStore');
Route::post('/recipe_form/procedure/posts', 'RecipeFormController@procedureStore')
    ->middleware('verified')
    ->name('recipe_form.procedureStore');
Route::post('/recipe_form/create/posts', 'RecipeFormController@create')
    ->middleware('verified')
    ->name('recipe_form.create');

// マイページのルーティング
Route::get('/mypage', 'MyPageController@index')
    ->middleware('verified')
    ->name('mypage.index');
Route::get('/mypage/favorite', 'MyPageController@favorite')
    ->middleware('verified')
    ->name('mypage.favorite');
Route::get('/mypage/follow', 'MyPageController@follow')
    ->middleware('verified')
    ->name('mypage.follow');
Route::get('/mypage/follower', 'MyPageController@follower')
    ->middleware('verified')
    ->name('mypage.follower');

// 登録情報のルーティング
Route::get('/userEdit', 'UserEditController@index')
    ->middleware('verified')
    ->name('userEdit.index');
Route::put('/userEdit/name_update', 'UserEditController@updateName')
    ->middleware('verified')
    ->name('userEdit.name_update');
Route::put('/userEdit/icon_update', 'UserEditController@updateIcon')
    ->middleware('verified')
    ->name('userEdit.icon_update');
Route::delete('/userEdit/icon_delete', 'UserEditController@deleteIcon')
    ->middleware('verified')
    ->name('userEdit.icon_delete');
Route::put('/userEdit/comment_update', 'UserEditController@updateComment')
    ->middleware('verified')
    ->name('userEdit.comment_update');

// 編集ページのルーティング
Route::get('/edit/{id}', 'EditController@index')
    ->middleware('verified')
    ->name('edit.index');
Route::put('/edit/updateRecipe/{id}',  'EditController@updateRecipe')
    ->middleware('verified')
    ->name('edit.updateRecipe');
Route::delete('/edit/deleteMaterrial/{id}',  'EditController@deleteMaterrial')
    ->middleware('verified')
    ->name('edit.deleteMaterrial');
Route::delete('/edit/deleteProcedure/{id}',  'EditController@deleteProcedure')
    ->middleware('verified')
    ->name('edit.deleteProcedure');
Route::put('/edit/updateProcedure/{id}',  'EditController@updateProcedure')
    ->middleware('verified')
    ->name('edit.updateProcedure');

// お気に入り機能ルーティング
Route::post('/favorite/add', 'FavoriteController@add')
    ->middleware('verified')
    ->name('favorite.add');
Route::delete('/favorite/remove', 'FavoriteController@remove')
    ->middleware('verified')
    ->name('favorite.remove');

// いいね機能ルーティング
Route::post('/nice/add', 'NiceController@add')
    ->middleware('verified')
    ->name('nice.add');
Route::delete('/nice/remove', 'NiceController@remove')
    ->middleware('verified')
    ->name('nice.remove');

// フォロー機能ルーティング
Route::post('/follow/add', 'FollowsController@add')
    ->middleware('verified')
    ->name('follow.add');
Route::delete('/follow/remove', 'FollowsController@remove')
    ->middleware('verified')
    ->name('follow.remove');

// ユーザーページのルーティング
Route::get('/userpage/{id}', 'UserPageController@index')
  ->name('userpage.index');
