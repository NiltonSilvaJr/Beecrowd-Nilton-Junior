<?php
$tempo = fgets(STDIN);
$velocidade = fgets(STDIN);

$total = ($tempo * $velocidade)/12;

echo number_format($total,3,".","")."\n";
