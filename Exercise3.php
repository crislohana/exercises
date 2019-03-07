<?php
//APURAÇÃO DE RESULTADOS (Refinamento)

//Efetuar contagem de Alunos em prova
    //Ler Nota de cada Participantes
    //Contagem de Notas <=10

//Contar número de Alunos aprovados (aprovação = 1)
    //Apresentar lista de Aluno com status = 1

//Contar número de Alunos reprovados (reprovação = 2)
    //Apresentar lista de Alunos com resultado = 2

//Contabilizar Aprovações
    //Contabilizar total de Alunos com status = 1
    //Caso total de Alunos com status = 1 for >=8 apresentar mensagem "Bonus ao Instrutor"


//Variáveis:
$resultadoDoAluno = 0;
$alunoAprov = 0;
$alunoRepr = 0;
$totalAlunos = 10;
$mediaBonus = 8;
$contador = 0;


//Execução:

echo "Bem vindo! Informe as notas dos Candidatos \n";

while ($contador <10)
{
    echo "Digite o resultado do candidato, informando 1 para APROVADO ou 2 para REPROVADO: \n";
    $resultadoDoAluno = rtrim (fgets (STDIN));

    if($resultadoDoAluno == 1)
    {
        $alunoAprov++;
    }
    else{
        $alunoRepr++;
    }
    $contador++;
}
    echo "O Total de Alunos aprovados é: \n" . $alunoAprov . "\n";
    echo "O Total de Alunos reprovados é: \n" .$alunoRepr . "\n";

if ($alunoAprov >=8) {
    echo "Bonus ao Instrutor!\n";
}

