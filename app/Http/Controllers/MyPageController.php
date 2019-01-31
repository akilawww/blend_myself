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
    return view('mypage.index', [
      'recipes' => $recipes
    ]);
  }
  // お気に入りに登録したレシピを抽出
  public function favorite(){
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
    return view('mypage.favorite', [
      'favoriteRecipes' => $favoriteRecipes
    ]);
  }
  // フォロー
  public function follow(){
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
    return view('mypage.follow', [
      'followUsers' => $followUsers
    ]);
  }
  // フォロワー
  public function follower(){
    $followers = Follow::where('follow_id', '=',  Auth::id())->get();
    $usersQuery = User::query();
    if(!empty($followers->toArray())){
      foreach($followers as $follower){
        $usersQuery->orWhere('id', '=', $follower->follower_id);
      }
      $followerUsers = $usersQuery->get();
    }else{
      $followerUsers = $followers;
    }
    return view('mypage.follower', [
      'followerUsers' => $followerUsers
    ]);
  }
}
