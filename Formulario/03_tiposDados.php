<?php
if (isset($_POST["Texto"])) {
    // Capturando os dados básicos
    $nome       = $_POST["Texto"];
    $email      = $_POST["Email"];
    $senha      = $_POST["Senha"];
    $telefone   = $_POST["Telefone"];
    $cpf        = $_POST["Numero"];
    $nascimento = $_POST["Data"];
    $horarioN   = $_POST["Tempo"];
    $dataAtual  = $_POST["DataAtual"];
    $range      = $_POST["Barra"];
    

if (isset($_POST["sexo"])) {
    $valor_sexo = $_POST["sexo"];

    $opcoes = [
        "m" => "Masculino",
        "f" => "Feminino",
        "o" => "Outro",
        "n" => "Prefiro Não Dizer"
    ];
    $genero = isset($opcoes[$valor_sexo]) ? $opcoes[$valor_sexo] : $valor_sexo;
} else {
    $genero = "Não informado";
}

    $pcd_sim    = isset($_POST["opcao1"]) ? "Sim" : "";
    $pcd_talvez = isset($_POST["opcao2"]) ? "Talvez Sim" : "";

    echo "<h2>Dados Recebidos</h2>";
    echo "<b>Nome Completo:</b> $nome <br>";
    echo "<b>Email:</b> $email <br>";
    echo "<b>Senha:</b> $senha <br>";
    echo "<b>Telefone:</b> $telefone <br>";
    echo "<b>CPF:</b> $cpf <br>";
    echo "<b>Quanto quer:</b> $range% <br>";
    
    echo "<hr>";
    echo "<h3>Informações Temporais e Pessoais</h3>";
    echo "<b>Data de Nascimento:</b> $nascimento <br>";
    echo "<b>Horário de Nascimento:</b> $horarioN <br>";
    echo "<b>Data de Hoje:</b> $dataAtual <br>";
    echo "<b>Gênero:</b> $genero <br>";
    
    echo "<b>Possui Deficiência?</b> ";
    echo ($pcd_sim || $pcd_talvez) ? "$pcd_sim $pcd_talvez" : "Não marcado";
    echo "<br>";

    echo '<br><a href="03_tiposDados.html">Voltar</a>';
} else {
    echo 'Acesso Negado';
}
?>
