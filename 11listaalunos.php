<?php

    $conexao = mysqli_connect("localhost","root","","escola_nome");

    if ($conexao -> connect_error)
    {
        die("Erro na Conexão.");
    }

    $sql = "SELECT id, nome, idade, uf, cidade FROM escola_hanna";
    $resultado = $conexao -> query($sql);

    while($linha = $resultado -> fetch_assoc())
        {
            echo '<p>ID: ' . $linha['id'] . '  Nome: ';
            echo $linha['nome']. '  Idade: ';
            echo $linha['idade']. '  UF: ';
            echo $linha['uf']. '  Cidade: ';
            echo $linha['cidade']. '<br>';
        }
?>