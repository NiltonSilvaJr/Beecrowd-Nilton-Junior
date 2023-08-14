<?php
$tempo = fgets(STDIN);
$hora = [0,0,0];

while($tempo > 0){
	switch($tempo){
		case $tempo < 60:
		$hora[2] = $tempo;
		$tempo = 0;
		break;
		case $tempo < 3600:
		$hora[1] = (int) ($tempo / 60);
		$tempo %= 60;
		break;
		default:
		$hora[0] = (int) ($tempo / 3600);
		$tempo %= 3600;
	}
}

echo $hora[0] . ":" . $hora[1] . ":" . $hora[2] . "\n";
