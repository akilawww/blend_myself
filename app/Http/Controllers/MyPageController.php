<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Recipe;
use App\Favorite;
use App\Follow;
use App\User;

class MyPageController extends Controller{
  // 投稿したレシピ
  public function index(){
    $recipes = Recipe::where('user_id', '=', Auth::id())
      ->orderBy('updated_at', 'desc')->get();
    // お気に入りに登録したレシピを抽出
    $favorites = Favorite::where('user_id', '=', Auth::id())->get();
    $recipeQuery = Recipe::query();
    if(!empty($favorites->toArray())){
      foreach($favorites as $favorite){
        $recipeQuery->orWhere('id', '=', $favorite->recipe_id);
      }
      $favoriteRecipes = $recipeQuery->get();
    }else {
      $favoriteRecipes = $favorites;
    }
    $follows = Follow::where('follower_id', '=',  Auth::id())->get();
    $usersQuery = User::query();
    if(!empty($follows->toArray())){
      foreach($follows as $follow){
        $usersQuery->orWhere('id', '=', $follow->follow_id);
      }
      $followUsers = $usersQuery->get();
    }else {
      $followUsers = $follows;
    }
    return view('mypage.index', [
      'recipes' => $recipes,
      'favoriteRecipes' => $favoriteRecipes,
      'followUsers' => $followUsers,
    ]);
  }
  // お気に入りレシピ
  public function favorite(){

  }
  // フォロー
  public function follow(){

  }
  // フォロワー
  public function follower(){

  }
}
