<?php
$valor = fgets(STDIN);

$notas = [100,50,20,10,5,2,1];

for($n=0; $n < count($notas);$n++){
	$count = $valor/$notas[$n];
	echo (int) $count." nota(s) de R$ " .$notas[$n].",00\n";
	
	$valor %= $notas[$n];
}
