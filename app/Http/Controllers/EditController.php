<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RecipesRequest;
use App\Http\Requests\RecipeProceduresRequest;
use App\Http\Requests\MaterrialsRequest;
use App\Recipe;
use App\RecipeProcedure;
use App\Materrial;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function index($id){
        $recipe = Recipe::findOrFail($id);
        // レシピに紐づくレシピ手順の取得
        $recipe_procedures = RecipeProcedure::where('recipe_id', '=', $id)
            ->orderBy('process_num', 'asc')->get();
        // レシピに紐づく材料の取得
        $materrials = Materrial::where('recipe_id', '=', $id)
            ->orderBy('id', 'asc')->get();
        return view('edit.index', [
            'recipe' => $recipe,
            'recipe_procedures' => $recipe_procedures,
            'materrials' => $materrials,
        ]);
    }

    public function updateRecipe(Request $request, $id){
        $recipe = Recipe::findOrFail($id);
        $recipe->title = $request->title;
        $recipe->body = $request->body;
        $recipe->user_id = $request->user_id;
        // ストレージから元の画像を削除
        Storage::delete(reMakeImagePath($recipe->image));
        // ファイルを保存した後、シンボリックリンクを貼ったstorage/をpathに差し込む
        $recipe->image = makeImagePath($request->file('image')->store('public/images'));
        $recipe->save();
        return back();
    }

    public function deleteMaterrial($id){
        Materrial::findOrFail($id)->delete();
        return back();
    }

    public function deleteProcedure($id){
        $procedure = RecipeProcedure::findOrFail($id);
        $recipeId = $procedure->recipe_id;
        $processNum = $procedure->process_num;
        $procedure->delete();
        // レシピ手順ナンバーを削除した分の変更
        $procedures = RecipeProcedure::where('recipe_id', '=', $recipeId)
            ->where('process_num', '>', $processNum)->get();
        foreach ($procedures as $procedure) {
            $procedure->process_num = $procedure->process_num-1;
            $procedure->save();
        }
        return back();
    }
}
