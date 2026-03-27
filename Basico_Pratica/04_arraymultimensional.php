<?php

$arrayUf = [
    ["SP", "São Paulo"],
    ["RJ", "Rio de Janeiro"],
    ["MG", "Minas Gerais"]
];

?>

<!DOCKTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>4</title>
    </head>
    <body>
        <?php 
            for ($i = 0; $i < count($arrayUf); $i++) {
    echo $arrayUf[$i][0] . " - " . $arrayUf[$i][1] . "<br>";}
        ?>
    </body>
</html>