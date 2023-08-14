<?php
$dias = fgets(STDIN);
$anos = [0,0,0];

while($dias > 0){
	switch($dias){
		case $dias < 30:
		$anos[2] = $dias;
		$dias = 0;
		break;
		case $dias < 365:
		$anos[1] = (int) ($dias / 30);
		$dias %= 30;
		break;
		default:
		$anos[0] = (int) ($dias/365);
		$dias %= 365;
	}
}

echo $anos[0] . " ano(s)\n" . $anos[1] . " mes(es)\n" . $anos[2]. " dia(s)\n";
