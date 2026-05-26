<?php
require_once("08conta.php");
require_once("08poupanca.php");
require_once("08especial.php");
require_once("08itemExtrato.php");

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transferencia</title>
</head>
<body>
    
    <h2>Realizar transferencia</h2>

 <?php 
    if (!isset($_SESSION["contas"]) || 
        count($_SESSION["contas"]) <2)
        {
            echo "É Necessario Possuir ao Menos 2 Contas Cadastradas!!";
        }  
    else{
            ?>

            <form action="08transferencia.php" method="post">
            <label>Conta Origens</label>
            <br><br>

            <select name="origem" required>

            <?php 
                 foreach ($_SESSION["contas"] as $indice => $conta) 
                {
                    echo '
                    <option value="' . $indice . '">
                        ' . $conta->contaFormatada() . '
                    </option>';
                }
       
            ?>
</select>

<br><br>

<label>Conta Destino:</label>
<br><br>

<select name="destino" required>

    <?php 
    foreach ($_SESSION["contas"] as $indice => $conta) {

            echo '
            <option value="' . $indice . '">
                ' . $conta->contaFormatada() . '
            </option>';
        }
    ?>
</select>

<br><br>

<label>Valor:</label>
<br><br>

    <input
            type="number"
            name="valor"
            required>

        <br><br>

        <button type="submit">
            Transferir
        </button>

    </form>

    <?php

    }

    ?>

    <br><br>

    <a href="08menu.html">
        <button>Voltar ao Menu</button>
    </a>

</body>
</html>