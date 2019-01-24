<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FollowsRequest;
use App\Follow;

class FollowsController extends Controller
{
    public function add(FollowsRequest $request){
        Follow::create($request->validated());
        return back();
    }

    public function remove(FollowsRequest $request){
        Follow::where('user_id', '=', $request->user_id)
            ->where('recipe_id', '=', $request->recipe_id)
            ->delete();
        return back();
    }
}
