<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuidesController extends Controller{
	// ガイドライン
	public function guideline(){
		return view('guides.guideline');
	}
	// プライバシーポリシー
	public function privacypolicy(){
		return view('guides.privacypolicy');
	}
	// 利用規約
	public function serviceterms(){
		return view('guides.serviceterms');
	}
	// 用語集
	public function glossary(){
		return view('guides.glossary');
	}
	// お問い合わせ
	public function contact(){
		return view('guides.contact');
	}

}
