<?php
$entrada1 = explode(" ",fgets(STDIN));
$entrada2 = explode(" ",fgets(STDIN));
$x1 = $entrada1[0];
$x2 = $entrada2[0];
$y1 = $entrada1[1];
$y2 = $entrada2[1];
$distancia = sqrt(pow($x2-$x1,2)+ pow($y2-$y1,2));
echo number_format($distancia,4,".","")."\n";
