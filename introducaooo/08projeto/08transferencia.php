<?php
require_once("08conta.php");
require_once("08poupanca.php");
require_once("08especial.php");
require_once("08itemExtrato.php");

session_start();

if(!isset($_SESSION["contas"])){
    echo "Nenhuma Conta Cadastrada";
    exit;
}

if (
    !isset($_POST["origem"]) ||
    !isset($_POST["destino"]) ||
    !isset($_POST["valor"])
) {

    echo "Dados inválidos!";
    exit;
}

$origem = $_POST["origem"];
$destino = $_POST["destino"];
$valor = (float) $_POST["valor"];

if($origem == $destino ){

    echo "A conta origem e destino não podem ser iguais!";
    exit;
}

$contaOrigem = $_SESSION["contas"][$origem];
$contaDestino = $_SESSION["contas"][$destino];

if ($valor <= 0) {

    echo "Valor inválido!";
    exit;
}

if ($valor > $contaOrigem->calculaSaldo()) {

    echo "Saldo insuficiente!";
    exit;
}

// Realiza operações
$contaOrigem->saque($valor);

$contaDestino->deposito($valor);

// Atualiza sessão
$_SESSION["contas"][$origem] = $contaOrigem;

$_SESSION["contas"][$destino] = $contaDestino;

// Salva última conta usada
setcookie(

    "ultima_conta",
    $destino,
    time() + 3600,
    "/"
);

echo "<h2>Transferência realizada com sucesso!</h2>";

?>

<br><br>

<a href="08menu.html">
    <button>Voltar ao Menu</button>
</a>
