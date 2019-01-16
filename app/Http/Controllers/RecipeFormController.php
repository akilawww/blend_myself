<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RecipesRequest;
use App\Recipe;

class RecipeFormController extends Controller
{
    public function index(){
        return view('recipeform.index');
    }

    public function materrialProcedure(){
        return view('recipeform.materrialProcedure');
    }

    public function store(RecipesRequest $request){
        $recipe = new Recipe($request->validated());

        // ファイルを保存した後、シンボリックリンクを貼ったstorage/をpathに差し込む
        $recipe->image = makeImagePath($request->file('image')->store('public/images'));
        $recipe->save();
        
        return redirect('/recipe_form/materrial_procedure')->with('recipe', $recipe);
    }

}
