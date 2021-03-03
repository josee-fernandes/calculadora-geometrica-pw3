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


/* === PARALELOGRAMO === */

Route::get('/paralelogramo/perimetro/{ladoA}/{ladoB}', function($ladoA, $ladoB){
    $retorno = new stdClass();
    $retorno->forma = 'Paralelogramo';
    $retorno->calculo = 'Perímetro';
    $retorno->ladoA = $ladoA;
    $retorno->ladoB = $ladoB;
    $retorno->resultado = ($ladoA + $ladoB) * 2;
    return view('result', ['resultado' => $retorno]);
});

Route::get('/paralelogramo/area/{lado}/{altura}', function($lado, $altura){
    $retorno = new stdClass();
    $retorno->forma = 'Paralelogramo';
    $retorno->calculo = 'Área';
    $retorno->lado = $lado;
    $retorno->altura = $altura;
    $retorno->resultado = $lado * $altura;
    return view('result', ['resultado' => $retorno]);
});


/* === QUADRADO === */

Route::get('/quadrado/perimetro/{lado}', function($lado){
    $retorno = new stdClass();
    $retorno->forma = 'Quadrado';
    $retorno->calculo = 'Perímetro';
    $retorno->lado = $lado;
    $retorno->resultado = $lado * 4;
    return view('result', ['resultado' => $retorno]);
});

Route::get('/quadrado/perimetro/{lado}', function($lado){
    $retorno = new stdClass();
    $retorno->forma = 'Quadrado';
    $retorno->calculo = 'Área';
    $retorno->lado = $lado;
    $retorno->resultado = $lado ** 2;
    return view('result', ['resultado' => $retorno]);
});


/* === RETANGULO === */

Route::get('/retangulo/perimetro/{ladoA}/{ladoB}', function($ladoA, $ladoB){
    $retorno = new stdClass();
    $retorno->forma = 'Retângulo';
    $retorno->calculo = 'Perímetro';
    $retorno->ladoA = $ladoA;
    $retorno->ladoB = $ladoB;
    $retorno->resultado = ($ladoA + $ladoB) * 2;
    return view('result', ['resultado' => $retorno]);
});

Route::get('/retangulo/area/{ladoA}/{ladoB}', function($ladoA, $ladoB){
    $retorno = new stdClass();
    $retorno->forma = 'Retangulo';
    $retorno->calculo = 'Área';
    $retorno->ladoA = $ladoA;
    $retorno->ladoB = $ladoB;
    $retorno->resultado = $ladoA * $ladoB;
    return view('result', ['resultado' => $retorno]);
});