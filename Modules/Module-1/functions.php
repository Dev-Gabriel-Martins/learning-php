<?php
function percorre($km)
{
	static $total;
	$total += $km;
	print "percorreu mais $km de $total <br>";
}
// O static dentro da função não reinicia seu valor, sempre que função e chamada,
// pelo contrário ele guarda o valor em memória, disponivel 

percorre(100);
percorre(100);
percorre(100);
?>

</br>
<?php
// varivel por referencia.
function incrementa(&$variavel , $valor)
{
	$variavel +=$valor; 
}
$teste = 100;
incrementa($teste, 20);
var_dump($teste);
?>

</br>
<?php
// Ou exemplo de aplicação de modificação do valor por referência é sort 
//(é outros helper de ordenação do php):
$list = [10,9,15,1,2,3];
sort($list);
print_r($list);
?>