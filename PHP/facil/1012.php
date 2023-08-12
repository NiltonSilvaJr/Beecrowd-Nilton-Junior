<?php
$entrada = explode(" ",fgets(STDIN));
$valor1 = $entrada[0];
$valor2 = $entrada[1];
$valor3 = $entrada[2];

$triangulo = ($valor1 * $valor3)/2;
$circulo = ($valor3 * $valor3) * 3.14159;
$quadrado = $valor2**2;
$retangulo = $valor1 * $valor2;
$trapezio = (($valor1 + $valor2)*$valor3)/2;
echo "TRIANGULO: ".number_format($triangulo,3,".","")."\n";
echo "CIRCULO: ".number_format($circulo,3,".","")."\n";
echo "TRAPEZIO: ".number_format($trapezio,3,".","")."\n"; 
echo "QUADRADO: ".number_format($quadrado,3,".","")."\n";
echo "RETANGULO: ".number_format($retangulo,3,".","")."\n";
