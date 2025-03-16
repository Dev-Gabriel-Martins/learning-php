<?php
declare(strict_types=1);

function calcula_juros_simples( int|float $valor, int|float $periodo, int|float $taxa)
{
	return $valor + $valor * $periodo * ($taxa /100);
}

print calcula_juros_simples(100.5, 5, 10);

//Exemplo de Argumentos Nomeados | Conhecido como Named
print calcula_juros_simples(valor: 100, periodo:5, taxa:10);

//Unpacking
$args = [ 100, 5, 10];
print calcula_juros_simples(...$args);

//Ou Unpacking + Named
$args = [ 'valor' => 100, 'taxa' => 5, 'periodo'=> 10];
print calcula_juros_simples(...$args);