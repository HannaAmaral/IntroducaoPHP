<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
    <body>
        <form method="post">
            Nome: <input type="text" name="nome"><br><br>
            Idade: <input type="number" name="idade"><br><br>

            <input type="submit" value="Enviar">

            <!-- Botão Limpar -->
             <button type="button" onclick="window.location.href=window.location.pathname;">
                Limpar
             </button>
       </form>
       <?php 
            if (isset($_POST["nome"])){
                
                $nome = $_POST["nome"];
                $idade = $_POST["idade"];

                echo "<h2>Dados Recebidos</h2>";
                echo "Nome: " . $nome . "<br>";
                echo "Idade: " . $idade . "<br>";
            }
       ?>
    </body>
</html>