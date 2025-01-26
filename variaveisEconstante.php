<?php

$userName = "Alisson Alves";
$userAge = 27;
$userWage = 2100;

define ("Taxa_Imposto", 0.15);

$valorImposto = $userWage *Taxa_Imposto;
$salarioLiquido = $userWage - $valorImposto;

echo "Nome : $userName\n";
echo "Idade: $userAge\n";
echo "Salario Bruto: R$ $userWage\n";
echo "Imposto (0.15%): $valorImposto\n";
echo "Salario Liquido: R$ $salarioLiquido\n";


?>
