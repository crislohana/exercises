<?php

//Avaliação (Objetivo Geral)
//Calcular Notas de Alunos com turma de quantidade indefinida


//1º)Receber Notas de Alunos (ENTRADA)
    //-> Inserir valor da Nota do Aluno
    //-> Verifica se encerra lançamento de notas
    //-> Definir Contador = 0

//2º)Contabilizar Notas de Alunos (PROCESSAMENTO)
    //-> Enquanto Sentinela não informado:
            //-> Recebe Notas do Aluno

            //-> Se valor da Nota for diferente ao valor da Sentinela
                //-> Gravar Nota do Aluno inserida
                //-> Adicionar nova nota
                //-> Somar Valor de nova Nota inserida (soma +1 nota ao valor recebido)

//3º)Apresentar Média de Notas (SAÍDA/RESULTADO)
    //-> Se total de notas > 0
        //-> Exibir Nota por quantidade inserida dividido pelo total
    //-> Não havendo valores, exibe:
        //->"Não há valor a ser apresentado"


//Variáveis:

$notaAluno = 0;
$contador = 0;
$sentinela = -1;
$totalAluno = 0;
$mediaAluno = 0;



//Execução:

echo "Bem vindo!\nInforme as notas das avaliações.\n";


echo "Digite a nota do aluno ou insira -1 para finalizar o processo!\n";
$notaAluno = rtrim (fgets (STDIN));

while ($notaAluno != -1)
{
    $totalAluno = $totalAluno + (int)$notaAluno;
    $contador++;
    echo "Digite a nota do aluno ou insira -1 para finalizar o processo!\n";
    $notaAluno = rtrim (fgets (STDIN));
}

if ($contador > 0){
    $mediaAluno = $totalAluno/$contador;
    echo "A média do Aluno é:" . $mediaAluno . "\n";

} else {
    echo "Não há valor a ser apresentado!\n";
}






