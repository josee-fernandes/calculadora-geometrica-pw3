<?php

use Illuminate\Support\Facades\Route;

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


/* ===  LOSANGO === */

Route::get('/losango/perimetro/{lado}/', function($lado){
    $retorno = new stdClass();
    $retorno->forma = 'Losango';
    $retorno->calculo = 'Perímetro';
    $retorno->lado = $lado;
    $retorno->resultado = $lado * 4;
    return view('result', ['resultado' => $retorno]);
});

Route::get('/losango/area/{lado}/{altura}', function($lado, $altura){
    $retorno = new stdClass();
    $retorno->forma = 'Losango';
    $retorno->calculo = 'Área';
    $retorno->lado = $lado;
    $retorno->altura = $altura;
    $retorno->resultado = $lado * $altura;
    return view('result', ['resultado' => $retorno]);
});