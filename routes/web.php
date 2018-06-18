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
use App\notes;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/arreglos', function () {
	$date=date('Y-m-d');
	$notes=[
		[
			'title'=>'Rutas laravel',
			'body'=>'Las rutasd se definen en el archivo',
			'import'=>true
		],
		[
			'title'=>'Blade',
			'body'=>'Blade es el motor de plantillas',
			'import'=>false,
		]
	];

    return view('contactos',['notes'=>$notes,'date'=>$date]);
});

Route::get('/bases','NotesController@index');

Route::get('/notes/{id}','NotesController@show');

Route::get('/json', function () {
	$notes=DB::table('notes')->get();
    return $notes;
});