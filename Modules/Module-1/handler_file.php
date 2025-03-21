<?php
// parametro w para write
$handler = fopen('/tmp/testes/teste.txt','w');
fwrite( $handler ,'1' . PHP_EOL);
fwrite( $handler ,'2'. PHP_EOL);
fwrite( $handler ,'3'. PHP_EOL);

// PHP_EOL quebra de linha


$handler = fopen('/tmp/testes/teste.txt','r');
while(!feof($handler))
{
print fgets($handler, 4096);
print '<br>';
}

// Usando o file put e get constents
file_put_contents('/tmp/testes/teste2.txt', "a \n b \n c");

print file_get_contents('/tmp/testes/teste2.txt');

//File, converte arquivo em array onde cada linha é um índice
$file = file('/tmp/testes/teste.txt');
foreach ($file as $row)
{
    print '<br>' . $row;
}


fclose($handler);
