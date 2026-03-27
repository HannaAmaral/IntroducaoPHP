<?php
    $horaEntrada = new DateTime("06:00");
    $horaSaida = new DateTime("22:30");
 
    $horaTrabalhada = $horaSaida->diff($horaEntrada) ;
?>
 
<!DOCKTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>2</title>
    </head>
    <body>
        <?php 
            echo $horaTrabalhada->h.':'.$horaTrabalhada->i; 
        ?>
    </body>
</html>