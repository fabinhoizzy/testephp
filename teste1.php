<?php 
/*1 - Função SeculoAno($ano)
Desenvolva uma função que receba como parametro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no 
ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

Exemplos para teste:

Ano 1905 = século 20
Ano 1700 = século 17 
*/

function seculoAno($ano) {
  if($ano <= 0 ) {
    echo 'Não existe século 0';
  } else if($ano <= 100) {
    echo 'Século 1\n';
  } else if($ano % 100 == 0) {
    echo 'Século ' . $ano / 100;
  } else {
    echo 'Século ', floor($ano / 100) + 1;
  }

}

$ano = 1700;
echo seculoAno($ano);
