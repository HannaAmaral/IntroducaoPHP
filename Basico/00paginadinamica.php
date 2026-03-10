<!DOCKTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP</title>
    </head>
    <body>
        <p>
             Olá, Hoje é dia <?php
             $teste = 404;
             echo date('d/m/Y');
             echo '<br>Ontem já foi (^◕.◕^)';
             //aspas '' SIMPLES apenas para texto
             // a barra \ ignora o proximo caracther no CODIGO!!!
             echo '<p>A caixa d\'água está vazia.<p> Error:' . $teste, '<br> ↑ é concatenação doido'; //concatenação

             $litros = '1000L';
             echo "<p>A caixa d\'água é de $litros. (～o￣3￣)～";
             ?>
        </p>
    </body>

</html>