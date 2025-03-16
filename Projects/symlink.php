<?php

/**
 * Projeto Incompleto, tive problemas com permissões
 * não cosnegui, solucionar. 
 * 
*/
$projectDir = getcwd();
$projectName = basename($projectDir);
$apacheDir = "/var/www/html/$projectName";

if (is_link($apacheDir)) {
    echo "O link simbólico para '$projectName' já existe.\n";
    exit(0);
}


if (!is_dir($projectDir)) {
    echo "Erro: O diretório do projeto '$projectDir' não existe.\n";
    exit(1);
}

try{
    exec("sudo ln -s $projectDir $apacheDir");
    exec("sudo systemctl restart apache2");
} catch(Exception $e) {
    echo "Erro ao criar o link simbólico.", $e->getMessage(), "\n";
    exit(1); 
}

echo "Acesse o projeto em: http://localhost/$projectName\n";