<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPertama;
use App\Http\Controllers\ControllerKedua;

//Route Untuk Controller

Route::get("/view1controll1", [ControllerPertama::class, "first"]);
Route::get("/view2controll1", [ControllerPertama::class, "second"]);
Route::get("/view3controll1", [ControllerPertama::class, "third"]);
Route::get("/view1controll2", [ControllerKedua::class, "pertama"]);
Route::get("/view2controll2", [ControllerKedua::class, "kedua"]);
Route::get("/view3controll2", [ControllerKedua::class, "ketiga"]);

//URL Untuk 5 Closure
Route::get("/biru", function() {
	return "<h1 style='color:blue;'> Closure</h1>";
});

Route::get("/hijau", function() {
	return "<h1 style='color:green;'> Closure</h1>";
});

Route::get("/merah", function() {
	return "<h1 style='color:red;'> Closure</h1>";
});

Route::get("/coklat", function() {
	return "<h1 style='color:brown;'> Closure</h1>";
});

Route::get("/pink", function() {
	return "<h1 style='color:pink;'> Closure</h1>";
});