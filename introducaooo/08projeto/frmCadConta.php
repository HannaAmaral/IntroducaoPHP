
 <?php
 
    require_once("08conta.php");
    require_once("08poupanca.php");
    require_once("08especial.php");
    require_once("08itemExtrato.php");

    session_start();

    if(!isset($_SESSION["contas"])){
        $_SESSION["contas"] = [];
    }

    // Verifica se veio via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $tipoConta = $_POST["tipoConta"];
        $agencia = $_POST["agencia"];
        $conta = $_POST["conta"];
        $saldoInicial = (float) $_POST["saldoInicial"];       

        // Instancia conforme o tipo
        if ($tipoConta == "poupanca") {

            $reajuste = (float) $_POST["reajuste"];

            $_SESSION["contas"][] = new poupanca($agencia, $conta, $saldoInicial, $reajuste);
        } elseif ($tipoConta == "especial") {

            $limiteEspecial = (float) $_POST["limiteEspecial"];

            $_SESSION["contas"][] = new especial($agencia, $conta, $saldoInicial, $limiteEspecial);
        } else {
            echo "Tipo de conta inválido!";
            exit;
        }


       echo '<br>
            <h2>Conta Cadastrada com Sucesso!!!</h2>
            <br>
            <a href="08menu.html">
                <button>Voltar ao menu</button>
            </a>';

    }
?>

 