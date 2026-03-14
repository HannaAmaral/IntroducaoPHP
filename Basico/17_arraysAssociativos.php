<?php 
$alunos = [

    "nome" => "Maria",
    "idade" => 18,
    "cidade" => "Marília",
    "Ativo" => true,
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
                if($alunos['Ativo'])
                    echo "Nome: $alunos[nome]<br> Idade: $alunos[idade]<br> Cidade: $alunos[cidade]<br> "
             ?>
        </p>
    </body>

</html>