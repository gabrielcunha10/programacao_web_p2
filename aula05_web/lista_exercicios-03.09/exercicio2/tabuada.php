<?php
    function calculartabuada($numero){
        $arquivo = fopen("tabuada.txt","a");
        fwrite($arquivo,"Tabuada do $numero:\n");
        if ($numero > 0 && $numero <= 10) {
            for ($i= 1;$i <= 10;$i++){
                $total = $numero * $i;
                fwrite($arquivo,"$numero * $i = $total\n");
                echo "<br>$numero * $i = $total";
            }
            fwrite($arquivo,"\n");
            fclose($arquivo);
        }      
         else {
            echo "Digite um número entre 1 e 10.";
        }
    }
    $numero = $_REQUEST['numero'];
    echo "<b>Tabuada do $numero:";
    calculartabuada($numero);
    echo '<h2><a href="form.html">Voltar ao ínicio</a></h2>';
    


    