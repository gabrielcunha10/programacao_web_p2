<?php
    $arquivo = fopen("frases.txt","r");
    while(!feof($arquivo)) {
        $linha = fgets($arquivo);

        echo $linha . "<br>";
    }  
    fclose($arquivo);