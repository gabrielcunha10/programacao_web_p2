<?php
    $arquivo = fopen("frases.txt","w");

    $frase1 = $_REQUEST['frase1'];
    $frase2 = $_REQUEST['frase2'];
    $frase3 = $_REQUEST['frase3'];

    fwrite ($arquivo, "$frase1\n$frase2\n$frase3");
    fclose($arquivo);

    echo "Arquivo salvo com sucesso!<br>";
    echo '<a href="frases_leitura.php">Ver conteúdo do arquivo</a>';