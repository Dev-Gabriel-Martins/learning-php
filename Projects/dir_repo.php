<?php
/**
 * Cria automaticamente todos as pastas do repositório
 */
    mkdir("./Modules");
    mkdir("./Projects");
    mkdir("./Assets");
    for($i = 1; $i <= 8; $i++){
       mkdir("./Modules/Module $i ");
    }
?>