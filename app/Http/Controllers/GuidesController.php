<!-- Controller for footer link -->
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuidesController extends Controller{
	// Transition to guideline
	public function guideline(){
		return view('guides.guideline');
	}
	// Transition to privacy policy
	public function privacypolicy(){
		return view('guides.privacypolicy');
	}
	// DTransition to serviceterms
	public function serviceterms(){
		return view('guides.serviceterms');
	}
}
