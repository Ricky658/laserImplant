<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio/index');
});



Route::get('/medicos', function () {
    return view('medicos.index');
});
Route::get('/medicos/1/perfil', function () {
    return view('medicos.perfil1');
});
Route::get('/medicos/2/perfil', function () {
    return view('medicos.perfil2');
});
Route::get('/medicos/3/perfil', function () {
    return view('medicos.perfil3');
});




Route::get('/odontologia', function () {
    return view('/inicio/odontologia');
});
Route::get('/odontologia/especialidades', function () {
    return view('/inicio/odontologia_especialidades');
});
Route::get('/cirugia', function () {
    return view('/inicio/cirugia');
});
Route::get('/implantes', function () {
    return view('/inicio/implantes');
});



Route::get('/indicaciones', function () {
    return view('indicaciones');
});
Route::get('/testimonios', function () {
    return view('testimonios');
});
Route::get('/cambios', function () {
    return view('cambios');
});
Route::get('/clinica', function () {
    return view('clinica');
});