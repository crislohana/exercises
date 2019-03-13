<?php


//Investimento = R$ 1000
//Rendimento 5/100 Ano
//Duração: 10 anos

// a = p(1+r)n sendo
//p = 1000
//r = 0,05
//n = 10
//a = 0

$aporte = 1000;
$taxa = 0.05;
$total = 0;

for ($ano = 1; $ano <= 10; $ano++){
    $total = $aporte * pow((1 + $taxa), $ano);
    echo 'Total =' .$total . "\n";
}
