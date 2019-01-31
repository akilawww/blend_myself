<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserEditController extends Controller
{
    // レシピ作成フォーム
    public function index(){
        $user = User::findOrFail(Auth::id());
        return view('userEdit.index', [
            'user' => $user,
        ]);
    }
}
