<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Recipe;
use App\Favorite;

class MyPageController extends Controller{
  // Transition to My Page
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
    return view('mypage.index', [
      'recipes' => $recipes,
      'favoriteRecipes' => $favoriteRecipes,
    ]);
  }
}
