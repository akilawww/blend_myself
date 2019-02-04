<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserEditController extends Controller
{
    // 登録情報ページ
    public function index(){
        $user = User::findOrFail(Auth::id());
        return view('userEdit.index', [
            'user' => $user,
        ]);
    }

    public function updateName(Request $request){
        $user = User::findOrFail(Auth::id());
        $user->name = $request->name;
        $user->save();
        return back();
    }

    public function updateIcon(Request $request){
        $user = User::findOrFail(Auth::id());
        $user->icon = makeImagePath($request->file('icon')->store('public/icons'));
        $user->save();
        return back();
    }

    public function deleteIcon(Request $request){
        User::findOrFail(Auth::id())->icon->delete();
        return back(); 
    }

    public function updateComment(Request $request){
        $user = User::findOrFail(Auth::id());
        $user->comment = $request->comment;
        $user->save();
        return back();
    }
}
