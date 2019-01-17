<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RecipesRequest;
use App\Http\Requests\RecipeProceduresRequest;
use App\Http\Requests\MaterrialsRequest;
use App\Recipe;
use App\RecipeProcedure;
use App\Materrial;

class RecipeFormController extends Controller
{
    // レシピ作成フォーム
    public function index(){
        return view('recipeform.index');
    }

    // 材料と手順作成フォーム
    public function materrialProcedure($id){
        $recipe_procedures = RecipeProcedure::where('recipe_id', '=', $id)
            ->orderBy('process_num', 'asc')->get();
        $materrials = Materrial::where('recipe_id', '=', $id)->get();

        return view('recipeform.materrialProcedure', [
            'recipe_procedures' => $recipe_procedures,
            'materrials' => $materrials,
        ])->with('recipe_id', $id);
    }

    // レシピ作成フォームからPOST
    public function store(RecipesRequest $request){
        $recipe = new Recipe($request->validated());

        // ファイルを保存した後、シンボリックリンクを貼ったstorage/をpathに差し込む
        $recipe->image = makeImagePath($request->file('image')->store('public/images'));
        $recipe->save();
        
        return redirect()->action('RecipeFormController@materrialProcedure', ['id' => $recipe->id]);
    }

    // 材料作成フォームからPOST
    public function materrialStore(MaterrialsRequest $request){
        Materrial::create($request->validated());
        return back();
    }

    // 手順作成フォームからPOST
    public function procedureStore(RecipeProceduresRequest $request){
        $procedure = new RecipeProcedure($request->validated());

        // ファイルを保存した後、シンボリックリンクを貼ったstorage/をpathに差し込む
        $procedure->image = makeImagePath($request->file('image')->store('public/images')); 
        $procedure->save();

        return back();
    }

}
