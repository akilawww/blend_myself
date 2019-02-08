<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FollowsRequest;
use App\Follow;

class FollowsController extends Controller{
  public function add(FollowsRequest $request){
    Follow::create($request->validated());
    return back();
  }
  public function remove(FollowsRequest $request){
    Follow::where('follow_id', '=', $request->follow_id)
        ->where('follower_id', '=', $request->follower_id)
        ->delete();
    return back();
  }
}
