<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RecipesRequest;
use App\Http\Requests\RecipeProceduresRequest;
use App\Http\Requests\MaterrialsRequest;
use App\Recipe;
use App\RecipeProcedure;
use App\Materrial;
use App\Tag;
use App\Tag_verification;

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
        $tags = Tag::orderBy('id', 'asc')->get();

        return view('recipeform.materrialProcedure', [
            'recipe_procedures' => $recipe_procedures,
            'materrials' => $materrials,
            'tags' => $tags,
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

    // 完了ボタンを押し、タグの登録を行う
    public function create(Request $request){
        if(!empty($request->get('tags'))){
            // タグが登録されていたら削除
            Tag_verification::where('recipe_id', '=', $request->recipe_id)->delete();
            // タグ登録
            foreach ($request->tags as $tag){
                $tagVer = new Tag_verification;
                $tagVer->tag_id = $tag;
                $tagVer->recipe_id = $request->recipe_id;
                $tagVer->save();
            }
        }
        return redirect()->action('RecipesController@show', ['id' => $request->recipe_id]);
    }
}