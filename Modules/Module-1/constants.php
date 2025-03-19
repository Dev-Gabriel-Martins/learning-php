<?php
define('LANGUAGE',"PT-BR");

// 
$constants = [
$c_dir = (__DIR__),
$c_file  = (__FILE__),  
$c_line = (__LINE__),  
];

foreach($constants as $c){
    var_dump($c);
    print "</br>";
}