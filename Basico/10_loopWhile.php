<!DOCKTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Loop While</title>
    </head>
    <body>
        <p>
            <?php
               $i = 1;

                While($i <= 20)
                  {
                    if ($i % 2 == 0)
                    echo "$i<br>";
                    $i++;
                  }
             ?>
        </p>
    </body>

</html>