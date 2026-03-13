<?php
    $pizza = 100;
    $hamburguer = 50; //hamburgue ta baratin fi vai comprar
    $comprei_os_two = $pizza + $hamburguer;
    $maiBarato = $pizza - $hamburguer;
    $rapidoFood = $pizza * $hamburguer;
    $euFood = $pizza / $hamburguer
?>

<!DOCKTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Kéro Comê</title>
    </head>
    <body>
        <?php 
            echo "U valô da Torre de Pissa: R$$pizza <br>";
            echo "U valô do que? burguer: R$$hamburguer <br>";
            echo "Venda Casada: R$$comprei_os_two <br>";
            echo "Ex: R$$maiBarato <br>";
            echo "Filho: R$$rapidoFood <br>";
            echo "Divorcio: R$$euFood <br>";
        ?>
    </body>
</html>