<!-- Controllers related to My Page -->
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Recipe;

class MyPageController extends Controller{
  // Transition to My Page
  public function index(){
    $recipes = Recipe::where('user_id', '=', Auth::id())
        ->orderBy('updated_at', 'desc')->paginate(5);
    // recipes/indexにrecipesで変数を送る
    return view('mypage.index')->with('recipes', $recipes);
  }
}
