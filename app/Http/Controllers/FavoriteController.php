<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FavoritesRequest;
use App\Favorite;

class FavoriteController extends Controller
{
    public function add(FavoritesRequest $request){
        Favorite::create($request->validated());
        return back();
    }

    public function remove(FavoritesRequest $request){
        Favorite::where('user_id', '=', $request->user_id)
            ->where('recipe_id', '=', $request->recipe_id)
            ->delete();
        return back();
    }
}
