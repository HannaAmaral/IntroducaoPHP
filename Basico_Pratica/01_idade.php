<?php 
    $nome = "Hanna";
    $curso = "Programação";
    $dataNasc = new DateTime("2008-06-20");
    $hoje = new DateTime();

$idade = $hoje->diff($dataNasc);
?>

<!DOCKTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>1</title>
    </head>
    <body>
        <?php 
            echo "Nome: $nome<br>";
            echo "Idade: $idade->y anos, $idade->m meses, $idade->d dias.<br>";
            echo "Curso: $curso<br>";
        ?>
    </body>
</html>