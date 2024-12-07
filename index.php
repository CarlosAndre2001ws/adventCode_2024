<?php
//juntar menor elemento da lista 1 com o menor elemento da lista dois
//ver a diferença entre os elementos juntos
//somar o valor das diferenças

$lista1 = [3, 4, 2, 1, 3, 3];
$lista2 = [4, 3, 5, 3, 9, 3];
$menorValor = [];
sort($lista1);
sort($lista2);
$aux = 0;
foreach ($lista1 as $key => $valor) {
    $resultado = $lista1[$key] - $lista2[$key];
    $aux += abs($resultado);
}
echo $aux;