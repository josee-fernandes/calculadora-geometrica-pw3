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


/* === ELIPSE === */

Route::get('/elipse/area/{metadeEixoH}/{metadeEixoV}', function($metadeEixoH, $metadeExioV){
    $retorno = new stdClass();
    $retorno->forma = 'Elipse';
    $retorno->calculo = 'Area';
    $retorno->metade_eixo_horizontal = $metadeEixoH;
    $retorno->metade_eixo_vertical = $metadeExioV;
    $retorno->resultado = pi() * $metadeEixoH * $metadeExioV;
    return view('result', ['resultado' => $retorno]);
});


/* === ESFERA === */

Route::get('/esfera/volume/{raio}', function($raio){
    $retorno = new stdClass();
    $retorno->forma = 'Esfera';
    $retorno->calculo = 'Volume';
    $retorno->raio = $raio;
    $retorno->resultado = (4/3) * pi() * ($raio ** 3);
    return view('result', ['resultado' => $retorno]);
});

Route::get('/esfera/area/{raio}', function($raio){
    $retorno = new stdClass();
    $retorno->forma = 'Esfera';
    $retorno->calculo = 'Área';
    $retorno->raio = $raio;
    $retorno->resultado = 4 * pi() * ($raio ** 2);
    return view('result', ['resultado' => $retorno]);
});

Route::get('/esfera/diametro/{raio}', function($raio){
    $retorno = new stdClass();
    $retorno->forma = 'Esfera';
    $retorno->calculo = 'Diâmetro';
    $retorno->raio = $raio;
    $retorno->resultado = 2 * $raio;
    return view('result', ['resultado' => $retorno]);
});

Route::get('/esfera/raio/{diametro}', function($diametro){
    $retorno = new stdClass();
    $retorno->forma = 'Esfera';
    $retorno->calculo = 'Raio';
    $retorno->diametro = $diametro;
    $retorno->resultado = $diametro / 2;
    return view('result', ['resultado' => $retorno]);
});


/* === TRAPEZIO === */

Route::get('/trapezio/perimetro/{baseMaior}/{baseMenor}/{ladoA}/{ladoB}', function($baseMaior, $baseMenor, $ladoA, $ladoB){
    $retorno = new stdClass();
    $retorno->forma = 'Trapézio';
    $retorno->calculo = 'Perímetro';
    $retorno->base_maior = $baseMaior;
    $retorno->base_menor = $baseMenor;
    $retorno->lado_a = $ladoA;
    $retorno->lado_b = $ladoB;
    $retorno->resultado = $baseMaior + $baseMenor + $ladoA + $ladoB;
    return view('result', ['resultado' => $retorno]);
});

Route::get('/trapezio/area/{baseMaior}/{baseMenor}/{altura}', function($baseMaior, $baseMenor, $altura){
    $retorno = new stdClass();
    $retorno->forma = 'Trapézio';
    $retorno->calculo = 'Área';
    $retorno->base_maior = $baseMaior;
    $retorno->base_menor = $baseMenor;
    $retorno->altura = $altura;
    $retorno->resultado = ($baseMaior + $baseMenor / 2) * $altura;
    return view('result', ['resultado' => $retorno]);
});


/* === TRIANGULO === */

Route::get('/triangulo/perimetro/{ladoA}/{ladoB}/{ladoC}', function($ladoA, $ladoB, $ladoC){
    $retorno = new stdClass();
    $retorno->forma = 'Triângulo';
    $retorno->calculo = 'Perímetro';
    $retorno->lado_A = $ladoA;
    $retorno->lado_B = $ladoB;
    $retorno->lado_C = $ladoC;
    $retorno->resultado = $ladoA + $ladoB + $ladoC;
    return view('result', ['resultado' => $retorno]);
});

Route::get('/triangulo/equilatero/area/{lado}', function($lado){
    $retorno = new stdClass();
    $retorno->forma = 'Triângulo equilátero';
    $retorno->calculo = 'Área';
    $retorno->lado = $lado;
    $retorno->resultado = (sqrt(3) / 4) * ($lado ** 2);
    return view('result', ['resultado' => $retorno]);
});

Route::get('/triangulo/isosceles/area/{base}/{altura}', function($base, $altura){
    $retorno = new stdClass();
    $retorno->forma = 'Triângulo isósceles';
    $retorno->calculo = 'Área';
    $retorno->base = $base;
    $retorno->altura = $altura;
    $retorno->resultado = ($base * $altura) / 2;
    return view('result', ['resultado' => $retorno]);
});

Route::get('/triangulo/isosceles/altura/{lado}/{base}', function($lado, $base){
    $retorno = new stdClass();
    $retorno->forma = 'Triângulo isósceles';
    $retorno->calculo = 'Altura';
    $retorno->lado = $lado;
    $retorno->base = $base;
    $retorno->resultado = sqrt(($lado ** 2) - ($base ** 2));
    return view('result', ['resultado' => $retorno]);
});

Route::get('/triangulo/retangulo/area/{base}/{altura}', function($base, $altura){
    $retorno = new stdClass();
    $retorno->forma = 'Triângulo retângulo';
    $retorno->calculo = 'Área';
    $retorno->base = $base;
    $retorno->altura = $altura;
    $retorno->resultado = ($base * $altura) / 2;
    return view('result', ['resultado' => $retorno]);
});