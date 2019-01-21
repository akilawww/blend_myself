<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuidesController extends Controller
{
	public function guideline(){
		return view('guides.guideline');
	}

	public function privacypolicy(){
		return view('guides.privacypolicy');
	}
}
