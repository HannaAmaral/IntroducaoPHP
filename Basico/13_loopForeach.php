<?php 
            echo "Lista de pessoas mais perigosas do mundo!!!<br>";
            $nomes = ["Hanna", "Bannana", "Montana"];
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
                foreach($nomes as $nome)
                    {
                        echo "$nome<br>";
                    }
             ?>
        </p>
    </body>

</html>