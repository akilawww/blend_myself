<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RecipesRequest;
use App\Http\Requests\RecipeProceduresRequest;
use App\Recipe;
use App\RecipeProcedure;

class RecipeFormController extends Controller
{
    public function index(){
        return view('recipeform.index');
    }

    public function materrialProcedure($id){
        $recipe_procedures = RecipeProcedure::where('recipe_id', '=', $id)
            ->orderBy('process_num', 'asc')->get();
        return view('recipeform.materrialProcedure', ['recipe_procedures' => $recipe_procedures])
            ->with('recipe_id', $id);
    }

    public function store(RecipesRequest $request){
        $recipe = new Recipe($request->validated());

        // ファイルを保存した後、シンボリックリンクを貼ったstorage/をpathに差し込む
        $recipe->image = makeImagePath($request->file('image')->store('public/images'));
        $recipe->save();
        
        return redirect()->action('RecipeFormController@materrialProcedure', ['id' => $recipe->id]);
    }

    public function procedureStore(RecipeProceduresRequest $request){
        $procedure = new RecipeProcedure($request->validated());

        // ファイルを保存した後、シンボリックリンクを貼ったstorage/をpathに差し込む
        $procedure->image = makeImagePath($request->file('image')->store('public/images')); 
        $procedure->save();

        return back();
    }

}
