<?php

$aluno = 1;
$somaAluno = 0;
$notaMax = 100;
$total = 0;

echo "Digite a nota de 10 alunos.\n";

while ( $aluno <= 10 ) {
    echo "Digite a nota do aluno " . $aluno . ": ";
    $NotaAtual = rtrim ( fgets ( STDIN ) );
    $total = $NotaAtual;
    $aluno = $aluno + 1;
}
$media = $total / 10;

echo "A média é:" . $media . "/n";