<?php
$valores = [
    'CEP' => 17502-000,
     'Rua' => 'Rua 24 de Dezembro',
     'Bairro' => 'Centro',
     'Cidade' => 'Marilía',
     'UF' => 'SP',
];
?>
<!DOCKTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>5</title>
    </head>
    <body>
        <?php 
         foreach ($valores as $item => $info){
                 echo "$item : $info <br>";
            }
        ?>
    </body>
</html>