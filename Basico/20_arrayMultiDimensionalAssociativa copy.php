<?php 
$alunos = [
    [
        'nome' =>"Maria ",
        'idade' => 18 ,
        'cidade' => "Marília" ,
       'ativo' => true,
    ],
    [
        'nome' => "João" ,
        'idade' => 29 ,
        'cidade' => "Bauru" ,
        'ativo' => false,
    ],
    [
        'nome' => "Hanna ",
        'idade' => 10 ,
        'cidade' => "Lua ",
        'ativo' => true,
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
                    if($alunos[$i]['ativo'])
                        {
                         echo " Nome: " . $alunos[$i]['nome'],
                              " Idade: " . $alunos[$i]['idade'],
                              " Cidade: " . $alunos[$i]['cidade'];
                         echo "<hr>";
                        }
                }
             ?>
        </p>
    </body>

</html>