<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\RecipeProcedure;
use App\Materrial;

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
        //dd($materrials->toArray());
        // recipes/showに変数、recipe,recipe_procedures,materrials
        return view('recipes.show')
            ->with('recipe', $recipe)
            ->with('recipe_procedures', $recipe_procedures)
            ->with('materrials', $materrials);
   }
}
