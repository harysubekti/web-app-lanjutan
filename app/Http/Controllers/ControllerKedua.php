<?php

namespace App\Http\Controllers;

class ControllerKedua extends Controller{

	public function pertama(){
		return view('lembar1');
	}
	public function kedua(){
		return view('lembar2');
	}
	public function ketiga(){
		return view('lembar3');
	}
}

?>