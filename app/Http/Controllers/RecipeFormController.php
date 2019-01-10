<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeFormController extends Controller
{
    public function index(){
        $recipes = Recipe::orderBy('updated_at', 'desc')->paginate(5);

        // recipes/indexにrecipesで変数を送る
        return view('recipeform.index');
    }

    public function store(Request $request){
        $recipe = new Recipe();
        $recipe->title = $request->title;
        $recipe->body = $request->body;
        $recipe->image = $request->image;
        $recipe->user_id = $request->user_id;
        $recipe->save();
        return redirect('/');
    }

}
