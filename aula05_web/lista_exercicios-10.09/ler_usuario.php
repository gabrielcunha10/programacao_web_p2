<?php
    $arquivo = fopen("usuarios.json","r");
    while(!feof($arquivo)) {
        $linha = fgets($arquivo);

        echo $linha . "<br>";
    }  
    fclose($arquivo);