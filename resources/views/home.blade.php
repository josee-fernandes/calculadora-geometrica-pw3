<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet" href="{{ secure_asset('css/home.css') }}">

   <title>Calculadora Geométrica | Home</title>
</head>
<body>
   <div class="container">
      <header>
         <h1 class="title">Rotas da Calculadora Geométrica</h1>
      </header>
      <main class="shapes">
         <section class="shape container container">
            <h1 class="title">Losango</h1>
            <ul class="route-list">
               <li class="route-list__item">
                  <h2>Cálculo do perímetro</h2>
                  <p>/losango/perimetro/{lado}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da área</h2>
                  <p>/losango/area/{lado}/{altura}</p>
               </li>
            </ul>
         </section>
         <section class="shape container">
            <h1 class="title">Paralelogramo</h1>
            <ul class="route-list">
               <li class="route-list__item">
                  <h2>Cálculo do perímetro</h2>
                  <p>/paralelogramo/perimetro/{ladoA}/{ladoB}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da área</h2>
                  <p>/paralelogramo/area/{lado}/{altura}</p>
               </li>
            </ul>
         </section>
         <section class="shape container">
            <h1 class="title">Quadrado</h1>
            <ul class="route-list">
               <li class="route-list__item">
                  <h2>Cálculo do perímetro</h2>
                  <p>/quadrado/perimetro/{lado}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da área</h2>
                  <p>/quadrado/area/{lado}</p>
               </li>
            </ul>
         </section>
         <section class="shape container">
            <h1 class="title">Retângulo</h1>
            <ul class="route-list">
               <li class="route-list__item">
                  <h2>Cálculo do perímetro</h2>
                  <p>/retangulo/perimetro/{ladoA}/{ladoB}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo do perímetro</h2>
                  <p>/retangulo/area/{ladoA}/{ladoB}</p>
               </li>
            </ul>
         </section>
         <section class="shape container">
            <h1 class="title">Círculo</h1>
            <ul class="route-list">
               <li class="route-list__item">
                  <h2>Cálculo do perímetro</h2>
                  <p>/circulo/perimetro/{opcao}/{valor}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da área</h2>
                  <p>rculo/area/{opcao}/{val</p>
                  <p>opcao - calcular usando raio ou diâmetro; valores válidos: raio; diametro.</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo do diâmetro</h2>
                  <p>/circulo/diametro/{raio}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo do raio</h2>
                  <p>/circulo/raio/{diametro}</p>
               </li>
            </ul>
         </section>
         <section class="shape container">
            <h1 class="title">Elipse</h1>
            <ul class="route-list">
               <li class="route-list__item">
                  <h2>Cálculo do perímetro</h2>
                  <p>/elipse/perimetro/{primeiroValor}/{segundoValor}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da área</h2>
                  <p>/elipse/area/{metadeEixoH}/{metadeEixoV}</p>
               </li>
            </ul>
         </section>
         <section class="shape container">
            <h1 class="title">Triângulo</h1>
            <ul class="route-list">
               <li class="route-list__item">
                  <h2>Cálculo do perímetro</h2>
                  <p>/triangulo/perimetro/{ladoA}/{ladoB}/{ladoC}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da área (Equilátero)</h2>
                  <p>/triangulo/equilatero/area/{lado}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da área (Isósceles)</h2>
                  <p>/triangulo/isosceles/area/{base}/{altura}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da altura (Isósceles)</h2>
                  <p>/triangulo/isosceles/altura/{lado}/{base}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da altura (Isósceles)</h2>
                  <p>/triangulo/isosceles/altura/{lado}/{base}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da área (Retângulo)</h2>
                  <p>/triangulo/retangulo/area/{base}/{altura}</p>
               </li>
            </ul>
         </section>
         <section class="shape container">
            <h1 class="title">Trapézio</h1>
            <ul class="route-list">
               <li class="route-list__item">
                  <h2>Cálculo do perímetro</h2>
                  <p>/trapezio/perimetro/{baseMaior}/{baseMenor}/{ladoA}/{ladoB}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da área</h2>
                  <p>/trapezio/area/{baseMaior}/{baseMenor}/{altura}</p>
               </li>
            </ul>
         </section>
         <section class="shape container">
            <h1 class="title">Cilindro</h1>
            <ul class="route-list">
               <li class="route-list__item">
                  <h2>Cálculo do volume</h2>
                  <p>/cilindro/volume/{raio}/{altura}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da área da base</h2>
                  <p>/cilindro/area-base/{raio}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da área da lateral</h2>
                  <p>/cilindro/area-lateral/{raio}/{altura}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da área da superfície</h2>
                  <p>/cilindro/area-superficie/{opcao}/{primeiroValor}/{segundoVal</p>
                  <p>opcao - calcular usando as áreas ou raio e altura; valores válidos: areas; raio-altura.</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo do diâmetro</h2>
                  <p>/cilindro/diametro/{raio}</p>
               </li>
            </ul>
         </section>
         <section class="shape container">
            <h1 class="title">Esfera</h1>
            <ul class="route-list">
               <li class="route-list__item">
                  <h2>Cálculo do volume</h2>
                  <p>/esfera/volume/{raio}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo da área</h2>
                  <p>/esfera/area/{raio}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo do diâmetro</h2>
                  <p>/esfera/diametro/{raio}</p>
               </li>
               <li class="route-list__item">
                  <h2>Cálculo do raio</h2>
                  <p>/esfera/raio/{diametro}</p>
               </li>
            </ul>
         </section>
      </main>
      <footer>
         <p>José Fernandes - 2021</p>
         <div>
            <a href="https://github.com/josee-fernandes" target="__blank">GitHub</a> | <a href="https://www.linkedin.com/in/josee-fernandes/s" target="__blank">LinkedIn</a>
         </div>
      </footer>
   </div>
</body>
</html>