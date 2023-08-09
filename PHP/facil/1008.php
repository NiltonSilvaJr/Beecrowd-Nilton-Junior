<?php
$funcionario = fgets(STDIN);
$hora = fgets(STDIN);
$valorHora =  fgets(STDIN);
$Salario = $hora * $valorHora;
echo "NUMBER = $funcionario";
echo "SALARY = U$ ".number_format($Salario, 2, '.','')."\n";
