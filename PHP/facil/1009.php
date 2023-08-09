<?php
$funcionario = fgets(STDIN);
$salario = fgets(STDIN);
$vendas =  fgets(STDIN);
$bonus = $vendas * 0.15;
$total = $salario + $bonus;
echo "TOTAL = R$ ".number_format($total, 2, '.','')."\n";
