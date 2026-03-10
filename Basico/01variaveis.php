<?php

$nome = "Hanna"; //STRING
$idade = 17; //INT
$altura = 1.75; //DOUBLE
$ativo = true; //BOOL

?>

<!DOCKTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Declaração de Variáveis</title>
    </head>
    <body>
        <p>
            <?php 
                echo "<h2><br>Nome: $nome
                    <br>Idade: $idade
                    <br>Altura: $altura
                    <br>Ativo: $ativo"
            ?>
        </p>
    </body>

</html>