<?php

namespace App\Http\Controllers;

class ControllerPertama extends Controller{

	public function first(){
		return view('page1');
	}
	public function second(){
		return view('page2');
	}
	public function third(){
		return view('page3');
	}
}

?>