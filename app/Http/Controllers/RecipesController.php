<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Recipe;
use App\RecipeProcedure;
use App\Materrial;
use App\Tag_verification;
use App\Favorite;
use App\Nice;
use App\Tag;
use App\User;
use App\Follow;

class RecipesController extends Controller{
  public function index(){
    $recipes = Recipe::orderBy('updated_at', 'desc');
    $recipesCount = count($recipes->get());
    $recipes = $recipes->paginate(5);
    // recipes/indexにrecipesで変数を送る
    return view('recipes.index')
        ->with(['recipes' => $recipes,
                'recipesCount' => $recipesCount]);
  }
  public function show($id){
    $recipe = Recipe::findOrFail($id);
    $recipeUser = User::findOrFail($recipe->user_id);
    // レシピに紐づくレシピ手順の取得
    $recipe_procedures = RecipeProcedure::where('recipe_id', '=', $id)
        ->orderBy('process_num', 'asc')->get();
    // レシピに紐づく材料の取得
    $materrials = Materrial::where('recipe_id', '=', $id)
        ->orderBy('id', 'asc')->get();
    // ログインユーザーのお気に入り状態を取得
    $favorite = Favorite::where('recipe_id', '=', $id)
        ->where('user_id', '=', Auth::id())->get();
    // いいね取得
    $nice = Nice::where('recipe_id', '=', $id)
        ->where('user_id', '=', Auth::id())->get();
    $niceCount = Nice::where('recipe_id', '=', $id)->get();
    // フォロー状態取得
    $follow = Follow::where('follow_id', '=', $recipeUser->id)
        ->where('follower_id', '=', Auth::id())->get();
    // タグ取得
    $tagVers = Tag_verification::where('recipe_id', '=', $id)->get();
    $tagQuery = Tag::query();
    if(!empty($tagVers->toArray())){
      foreach( $tagVers as $tagVer){
        $tagQuery->orWhere('id', '=', $tagVer->tag_id);
      }
      $tags = $tagQuery->get();
      }else{
        $tags = $tagVers;
      }
      return view('recipes.show')
          ->with(['recipe' => $recipe,
                  'recipe_procedures' => $recipe_procedures,
                  'materrials' => $materrials,
                  'favorite' => $favorite,
                  'nice' => $nice,
                  'niceCount' => $niceCount,
                  'tags' => $tags,
                  'recipeUser' => $recipeUser,
                  'follow' => $follow
                ]);
  }
  // ワード検索
  public function search(Request $request){
    $search = $request->get('search');
    $query = Recipe::query();
    // 検索するテキストが入力されている場合のみ
    if(!empty($search)){
      $query->where('title','like','%'.$search.'%');
    }
    $recipesCount = count($query->get());
    $data = $query->paginate(5);
    return view('recipes.index')
        ->with(['recipes' => $data,
                'recipesCount' => $recipesCount]
              );
  }
  // タグ検索
  public function searchTag(Request $request){
    $tagQuery = Tag_verification::query();
    $recipeQuery = Recipe::query();
    // Todo: 検索Hit0件の時何も表示しない
    if(!empty($request->get('tags'))){
      $tagCount = 0;
      // 選択したタグで、タグ照合テーブルを抽出
      foreach($request->tags as $tag){
        $tagQuery->orWhere('tag_id', '=', $tag);
        $tagCount++;
      }
      $tagVerifications = $tagQuery->get()->toArray();
      // タグの全件Hitしたrecipe_idを抽出
      $hitRecipeIds = tagVerCount($tagVerifications, $tagCount);
      // Hitしなかった時、0件をセット
      if(!$hitRecipeIds){
        $recipeQuery->orWhere('id', '=', -1);
      }else{
        foreach($hitRecipeIds as $hitRecipeId){
          $recipeQuery->orWhere('id', '=', $hitRecipeId);
        }
      }
    }
    $recipesCount = count($recipeQuery->get());
    $data = $recipeQuery->paginate(5);
    return view('recipes.index')
        ->with(['recipes' => $data,
                'recipesCount' => $recipesCount
              ]);
  }
}
