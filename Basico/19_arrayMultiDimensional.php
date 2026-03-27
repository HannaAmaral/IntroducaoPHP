<?php 
$alunos = [
    [
        "Maria ",
        18 ,
        "Marília" ,
        true,
    ],
    [
        "João" ,
        29 ,
        "Bauru" ,
        false,
    ],
    [
        "Hanna ",
        10 ,
        "Lua ",
        true,
    ]
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
            for ($i = 0; $i < count($alunos); $i++)
                {    
                    if($alunos[$i][3])
                        {
                         echo " Nome: " . $alunos[$i][0],
                              " Idade: " . $alunos[$i][1],
                              " Cidade: " . $alunos[$i][2];
                         echo "<hr>";
                        }
                }
             ?>
        </p>
    </body>

</html>