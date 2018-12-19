<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
   public function index(){
       $recipes = \App\Recipe
       return view('recipes.index');
   }
}
