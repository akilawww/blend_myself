<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
   public function index(){
       return view('recipes.index');
   }
}
