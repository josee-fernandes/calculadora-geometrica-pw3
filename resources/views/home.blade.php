<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Rotas</title>
</head>
<body>
   <section class="shape">
      <h1 class="title">Losango</h1>
      <ul class="route-list">
         <li class="route-list__item">
            <strong>Cálculo do perímetro</strong><br>
            /losango/perimetro/{lado}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da área</strong><br>
            /losango/area/{lado}/{altura}
         </li>
      </ul>
   </section>
   <section class="shape">
      <h1 class="title">Paralelogramo</h1>
      <ul class="route-list">
         <li class="route-list__item">
            <strong>Cálculo do perímetro</strong><br>
            /paralelogramo/perimetro/{ladoA}/{ladoB}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da área</strong><br>
            /paralelogramo/area/{lado}/{altura}
         </li>
      </ul>
   </section>
   <section class="shape">
      <h1 class="title">Quadrado</h1>
      <ul class="route-list">
         <li class="route-list__item">
            <strong>Cálculo do perímetro</strong><br>
            /quadrado/perimetro/{lado}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da área</strong><br>
            /quadrado/area/{lado}
         </li>
      </ul>
   </section>
   <section class="shape">
      <h1 class="title">Retângulo</h1>
      <ul class="route-list">
         <li class="route-list__item">
            <strong>Cálculo do perímetro</strong><br>
            /retangulo/perimetro/{ladoA}/{ladoB}
         </li>
         <li class="route-list__item">
            <strong>Cálculo do perímetro</strong><br>
            /retangulo/area/{ladoA}/{ladoB}
         </li>
      </ul>
   </section>
   <section class="shape">
      <h1 class="title">Círculo</h1>
      <ul class="route-list">
         <li class="route-list__item">
            <strong>Cálculo do perímetro</strong><br>
            /circulo/perimetro/{opcao}/{valor}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da área</strong><br>
            /circulo/area/{opcao}/{valor}<br>
            opcao - calcular usando raio ou diâmetro; valores válidos: raio; diametro.
         </li>
         <li class="route-list__item">
            <strong>Cálculo do diâmetro</strong><br>
            /circulo/diametro/{raio}
         </li>
         <li class="route-list__item">
            <strong>Cálculo do raio</strong><br>
            /circulo/raio/{diametro}
         </li>
      </ul>
   </section>
   <section class="shape">
      <h1 class="title">Elipse</h1>
      <ul class="route-list">
         <li class="route-list__item">
            <strong>Cálculo do perímetro</strong><br>
            /elipse/perimetro/{primeiroValor}/{segundoValor}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da área</strong><br>
            /elipse/area/{metadeEixoH}/{metadeEixoV}
         </li>
      </ul>
   </section>
   <section class="shape">
      <h1 class="title">Triângulo</h1>
      <ul class="route-list">
         <li class="route-list__item">
            <strong>Cálculo do perímetro</strong><br>
            /triangulo/perimetro/{ladoA}/{ladoB}/{ladoC}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da área (Equilátero)</strong><br>
            /triangulo/equilatero/area/{lado}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da área (Isósceles)</strong><br>
            /triangulo/isosceles/area/{base}/{altura}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da altura (Isósceles)</strong><br>
            /triangulo/isosceles/altura/{lado}/{base}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da altura (Isósceles)</strong><br>
            /triangulo/isosceles/altura/{lado}/{base}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da área (Retângulo)</strong><br>
            /triangulo/retangulo/area/{base}/{altura}
         </li>
      </ul>
   </section>
   <section class="shape">
      <h1 class="title">Trapézio</h1>
      <ul class="route-list">
         <li class="route-list__item">
            <strong>Cálculo do perímetro</strong><br>
            /trapezio/perimetro/{baseMaior}/{baseMenor}/{ladoA}/{ladoB}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da área</strong><br>
            /trapezio/area/{baseMaior}/{baseMenor}/{altura}
         </li>
      </ul>
   </section>
   <section class="shape">
      <h1 class="title">Cilindro</h1>
      <ul class="route-list">
         <li class="route-list__item">
            <strong>Cálculo do volume</strong><br>
            /cilindro/volume/{raio}/{altura}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da área da base</strong><br>
            /cilindro/area-base/{raio}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da área da lateral</strong><br>
            /cilindro/area-lateral/{raio}/{altura}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da área da superfície</strong><br>
            /cilindro/area-superficie/{opcao}/{primeiroValor}/{segundoValor}<br>
            opcao - calcular usando as áreas ou raio e altura; valores válidos: areas; raio-altura.
         </li>
         <li class="route-list__item">
            <strong>Cálculo do diâmetro</strong><br>
            /cilindro/diametro/{raio}
         </li>
      </ul>
   </section>
   <section class="shape">
      <h1 class="title">Esfera</h1>
      <ul class="route-list">
         <li class="route-list__item">
            <strong>Cálculo do volume</strong><br>
            /esfera/volume/{raio}
         </li>
         <li class="route-list__item">
            <strong>Cálculo da área</strong><br>
            /esfera/area/{raio}
         </li>
         <li class="route-list__item">
            <strong>Cálculo do diâmetro</strong><br>
            /esfera/diametro/{raio}
         </li>
         <li class="route-list__item">
            <strong>Cálculo do raio</strong><br>
            /esfera/raio/{diametro}
         </li>
      </ul>
   </section>
</body>
</html>