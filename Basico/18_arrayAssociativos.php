<?php 
$produto = [

    "nome" => "Cappucino",
    "preço" => 15.01,
    "estoque" => 1,
]
?>

<!DOCKTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Array</title>
    </head>
    <body>
        <p>
            <?php
            $precoformatado = number_format($produto["preço"], 2, ',' , '.');
                if($produto["estoque"] > 0)
                    echo "Nome: $produto[nome]<br>
                          preço: R$$precoformatado<br>
                          estoque: $produto[estoque]<br> <br>
                          obs: é da Hanna"
             ?>
        </p>
    </body>

</html>