<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
  public function index(Request $request){
    #キーワード受け取り
    $keyword = $request->input('keyword');

    #クエリ生成
    $result = Recipe::query();

    #もしキーワードがあったら
    if(!empty($keyword))
    {
      $query->where('name','like','%'.$keyword.'%')->orWhere('mail','like','%'.$keyword.'%');
    }

    #ページネーション
    $data = $query->orderBy('created_at','desc')->paginate(6);
    return view('recipes.index')->with('data',$data)
    ->with('keyword',$keyword);
  }
}
