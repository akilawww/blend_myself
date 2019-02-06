<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Recipe;

class UserPageController extends Controller{
  public function index($id){
    $user = User::findOrFail($id);
    $recipes = Recipe::where('user_id', '=', $id)->get();
    return view('userpage.index', [
                'recipes' => $recipes,
                'user' => $user,
                ]);
  }
}
