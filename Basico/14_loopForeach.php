<?php 
            echo "Lista das CIDADES onde estão as pessoas mais perigosas do mundo!!!<br>";
            $cidades = ["Marília", "Bauru", "Garça", "Roliuhdy", "Casa do         Chápeu"];
?>

<!DOCKTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>loop for</title>
    </head>
    <body>
        <p>
            <?php
                foreach($cidades as $cidade)
                    {
                        echo "$cidade<br>";
                    }
             ?>
        </p>
    </body>

</html>