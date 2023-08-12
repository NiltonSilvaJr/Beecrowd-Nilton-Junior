<?php
$distancia = fgets(STDIN);
$consumo = fgets(STDIN);

$media = $distancia/$consumo;

echo number_format($media,3,".","")." km/l\n";
