<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('mad/{makan}/{minum}/{ngemil}',function ($a,$b,$c){
	return 'Makan ' .$a. '<br>'.
		   'Minum ' .$b. '<br>'.
		   'Ngemil '.$c.	'<br>';
	});


// route optional parameter
route::get('user/{nama?}',function($a="Ahmad Abdul"){
	return $a;
});