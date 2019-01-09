<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipesController extends Controller
{
   public function index(){
       $recipes = Recipe::orderBy('updated_at', 'desc')->paginate(5);
       return view('recipes.index')->with('recipes', $recipes);
   }

   public function show($id){
       $recipe = Recipe::findOrFail($id);
       //dd($recipe->toArray());
       return view('recipes.show')->with('recipe', $recipe);
   }
}
