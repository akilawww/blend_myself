<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Recipe;
use App\RecipeProcedure;
use App\Materrial;
use App\Tag_verification;
use App\Favorite;

class RecipesController extends Controller
{
    public function index(){
        $recipes = Recipe::orderBy('updated_at', 'desc')->paginate(5);

        // recipes/indexにrecipesで変数を送る
        return view('recipes.index')->with('recipes', $recipes);
    }

    public function show($id){
        $recipe = Recipe::findOrFail($id);
        // レシピに紐づくレシピ手順の取得
        $recipe_procedures = RecipeProcedure::where('recipe_id', '=', $id)
            ->orderBy('process_num', 'asc')->get();
        // レシピに紐づく材料の取得
        $materrials = Materrial::where('recipe_id', '=', $id)
            ->orderBy('id', 'asc')->get();
        $favorite = Favorite::where('recipe_id', '=', $id)->where('user_id', '=', Auth::id())->get();
        // recipes/showに変数、recipe,recipe_procedures,materrials
        return view('recipes.show')
            ->with('recipe', $recipe)
            ->with('recipe_procedures', $recipe_procedures)
            ->with('materrials', $materrials)
            ->with('favorite', $favorite);
   }

   // headerの検索機能
   public function search(Request $request){
     $search = $request->get('search');
     $query = Recipe::query();
     // 検索するテキストが入力されている場合のみ
     if(!empty($search)) {
       $query->where('title','like','%'.$search.'%');
     }
     $data = $query->paginate(5);
     return view('recipes.index')->with('recipes', $data);
   }

   public function searchTag(Request $request){
    $tagQuery = Tag_verification::query();
    $recipeQuery = Recipe::query();
    // Todo: 検索Hitした時何も表示しない
    if(!empty($request->get('tags'))){
        foreach( $request->tags as $tag ){
            $tagQuery->orWhere('tag_id', '=', $tag);
        }
        $tagVerifications = $tagQuery->get()->toArray();
        foreach( $tagVerifications as $tagVer){
            $recipeQuery->orWhere('id', '=', $tagVer['recipe_id']); 
        }
    }
    $data = $recipeQuery->paginate(5);
    return view('recipes.index')->with('recipes', $data);
   }
}
