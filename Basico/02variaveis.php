<?php

$nome = "João";
$idade = 18; 
$cidade = "Marília";
$curso = "Desenvolvimento de Sistemas";

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
                    <br>Cidade: $cidade
                    <br>Curso: $curso"
            ?>
        </p>
    </body>

</html>