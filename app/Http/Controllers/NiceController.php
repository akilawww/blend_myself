<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NiceRequest;
use App\Nice;

class NiceController extends Controller
{
    public function add(NiceRequest $request){
        Nice::create($request->validated());
        return back();
    }

    public function remove(NiceRequest $request){
        Nice::where('user_id', '=', $request->user_id)
            ->where('recipe_id', '=', $request->recipe_id)
            ->delete();
        return back();
    }
}
