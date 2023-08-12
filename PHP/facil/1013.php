<?php
$entrada = explode(" ",fgets(STDIN));
$valor1 = number_format($entrada[0]);
$valor2 = number_format($entrada[1]);
$valor3 = number_format($entrada[2]);

$maiorAB = (($valor1+$valor2)+(abs($valor1-$valor2)))/2;
$maiorBC = (($valor2+$valor3)+(abs($valor2-$valor3)))/2;

if($maiorAB == $valor1 & $valor1 > $valor3){
	echo "$valor1 eh o maior\n";
}else if($maiorBC == $valor2 & $valor2 > $valor3){
	echo "$valor2 eh o maior\n";
}else{
	echo "$valor3 eh o maior\n";
}

