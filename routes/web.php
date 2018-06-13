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

Route::get('/contactos', function () {
	$date=date('Y-m-d');
	$notes=[
		[
			'title'=>'Rutas laravel',
			'body'=>'Las rutasd se definen en el archivo',
			'important'=>true
		],
		[
			'title'=>'Blade',
			'body'=>'Blade es el motor de plantillas',
			'important'=>false,
		]
	];
    return view('contactos',['notes'=>$notes,'date'=>$date]);
});

Route::get('/bases', function () {
	$notes=DB::table('notes')->get();
	return $notes;
    return view('contactos',['notes'=>$notes]);
});