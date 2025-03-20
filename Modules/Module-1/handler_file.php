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
fclone($handler);

