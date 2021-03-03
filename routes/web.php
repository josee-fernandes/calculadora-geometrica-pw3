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


/* === CILINDRO === */

Route::get('/cilindro/volume/{raio}/{altura}', function($raio, $altura){
    $retorno = new stdClass();
    $retorno->forma = 'Cilindro';
    $retorno->calculo = 'Volume';
    $retorno->raio = $raio;
    $retorno->altura = $altura;
    $retorno->resultado = pi() * ($raio ** 2) * $altura;
    return view('result', ['resultado' => $retorno]);
});

Route::get('/cilindro/area-base/{raio}', function($raio){
    $retorno = new stdClass();
    $retorno->forma = 'Cilindro';
    $retorno->calculo = 'Área da base';
    $retorno->raio = $raio;
    $retorno->resultado = pi() * ($raio ** 2);
    return view('result', ['resultado' => $retorno]);
});

Route::get('/cilindro/area-lateral/{raio}/{altura}', function($raio, $altura){
    $retorno = new stdClass();
    $retorno->forma = 'Cilindro';
    $retorno->calculo = 'Área lateral';
    $retorno->raio = $raio;
    $retorno->altura = $altura;
    $retorno->resultado = 2 * pi() * $raio * $altura;
    return view('result', ['resultado' => $retorno]);
});

Route::get('/cilindro/area-superficie/{opcao}/{primeiroValor}/{segundoValor}', function($opcao, $primeiroValor, $segundoValor){
    $retorno = new stdClass();
    $retorno->forma = 'Cilindro';
    $retorno->calculo = 'Área da superfície';
    $retorno->opcao = $opcao;
    $retorno->primeiro_valor = $primeiroValor;
    $retorno->segundo_valor = $segundoValor;
    $retorno->resultado = null;
    if($opcao == 'areas')
        $retorno->resultado = 2 * ($primeiroValor + $segundoValor);
    else if($opcao == 'raio-altura')
        $retorno->resultado = 2 * pi() * $primeiroValor * ($primeiroValor + $segundoValor);
    else
        $retorno->opcao = 'Opcao de cálculo inválida';
    return view('result', ['resultado' => $retorno]);
});

Route::get('/cilindro/diametro/{raio}', function($raio){
    $retorno = new stdClass();
    $retorno->forma = 'Cilindro';
    $retorno->calculo = 'Diâmetro';
    $retorno->raio = $raio;
    $retorno->resultado = 2 * $raio;
    return view('result', ['resultado' => $retorno]);
});


/* === CIRCULO === */

Route::get('/circulo/perimetro/{opcao}/{valor}', function($opcao, $valor){
    $retorno = new stdClass();
    $retorno->forma = 'Círculo';
    $retorno->calculo = 'Perímetro';
    $retorno->opcao = $opcao;
    $retorno->valor = $valor;
    $retorno->resultado = null;
    if($opcao == 'raio')
        $retorno->resultado = 2 * pi() * $valor;
    else if($opcao == 'diametro')
        $retorno->resultado = pi() * $valor;
    else
        $retorno->opcao = 'Opcao de cálculo inválida';
    return view('result', ['resultado' => $retorno]);
});

Route::get('/circulo/area/{opcao}/{valor}', function($opcao, $valor){
    $retorno = new stdClass();
    $retorno->forma = 'Cícrulo';
    $retorno->calculo = 'Área';
    $retorno->opcao = $opcao;
    $retorno->valor = $valor;
    $retorno->resultado = null;
    if($opcao == 'raio')
        $retorno->resultado = pi() * ($valor ** 2);
    else if($opcao == 'diametro')
        $retorno->resultado = (pi() * ($valor ** 2)) / 4;
    else
        $retorno->opcao = 'Opcao de cálculo inválida';
    return view('result', ['resultado' => $retorno]);
});

Route::get('/circulo/diametro/{raio}', function($raio){
    $retorno = new stdClass();
    $retorno->forma = 'Cícrulo';
    $retorno->calculo = 'Diâmetro';
    $retorno->raio = $raio;
    $retorno->resultado = 2 * $raio;
    return view('result', ['resultado' => $retorno]);
});

Route::get('/circulo/raio/{diametro}', function($diametro){
    $retorno = new stdClass();
    $retorno->forma = 'Cícrulo';
    $retorno->calculo = 'Raio';
    $retorno->diametro = $diametro;
    $retorno->resultado = $diametro / 2;
    return view('result', ['resultado' => $retorno]);
});