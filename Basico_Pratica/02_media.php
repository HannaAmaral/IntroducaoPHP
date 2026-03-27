<?php 
    $nota1 = 10;
    $nota2 = 7;
    $nota3 = 1;

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if($media >= 7)
      $Situacao = "Aprovado";
    elseif ($media >= 5)
       $Situacao = "Em Recuperação";
    elseif ($media < 5)
        $Situacao = "Reprovado";
    
    
?>
<!DOCKTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>2</title>
    </head>
    <body>
        <?php 
            echo "Hanna está $Situacao";
        ?>
    </body>
</html>