<?php
 
    require_once("08conta.php");
    require_once("08poupanca.php");
    require_once("08especial.php");
    require_once("08itemExtrato.php");

    //inicia a sessão
    session_start();

    
    // if( !isset($contas))
    // $contas = [];

    //verifica se ja existe o array na sessão
    if(!isset($_SESSION["contas"]))
    {
        $_SESSION["contas"] = [];
    }


    // Verifica se veio via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $tipoConta = $_POST["tipoConta"];
        $agencia = $_POST["agencia"];
        $conta = $_POST["conta"];
        $saldoInicial = (float) $_POST["saldoInicial"];       

        // Instancia conforme o tipo
        if ($tipoConta == "poupanca") 
        {
            $reajuste = (float) $_POST["reajuste"];

            // $contaObj = new poupanca($agencia, $conta, $saldoInicial, $reajuste);
            $_SESSION["contas"][] = new poupanca($agencia, $conta, $saldoInicial, $reajuste);
        } 
        elseif($tipoConta == "especial") 
        {

            $limiteEspecial = (float) $_POST["limiteEspecial"];

            // $contaObj = new especial($agencia, $conta, $saldoInicial, $limiteEspecial);
            $_SESSION["contas"][] = new especial($agencia, $conta, $saldoInicial, $limiteEspecial);
        }
        else 
        {
            echo "Tipo de conta inválido!";
            exit;
        }

        setcookie("ultima_conta", count($_SESSION["contas"])-1, time() + 3600);

        // $contas[] = $contaObj;
        // $_SESSION[$contas][] = $contaObj

        // echo "<h3>Extrato da Conta</h3>";  
        // foreach($_SESSION["contas"] as $v_conta)
        // {
        //     $v_conta->imprimeExtrato();
        //     echo "<br>";
        // }

        echo'<br>
            <h2>Conta Cadastrada com Sucesso!!!</h2>
            <br>    
            <a href="08menu.html">
                <button>Voltar ao Menu</button>
            </a>';
    }
?>