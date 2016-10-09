<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('home', function() {
	return redirect('eventos');
});

Auth::routes();

Route::resource("eventos","EventoController");
Route::resource("alunos","AlunoController");
Route::resource("cursos","CursoController");

Route::get('participar/{id}', 'EventoController@participar');
