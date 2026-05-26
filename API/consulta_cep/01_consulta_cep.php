<?php
    if(isset($_POST["cep"])){
 
        $cep = $_POST["cep"];
 
        $cep = preg_replace("/[^0-9]/", "", $cep);
 
        if(strlen($cep) != 8){
 
            echo "CEP inválido!";
            exit;
        }
 
        $url = "https://viacep.com.br/ws/$cep/json/";
 
        $dados = file_get_contents($url);
 
        $endereco = json_decode($dados, true);
 
        if(isset($endereco["erro"])){
 
            echo "CEP não encontrado!";
        } else {
 
            echo "CEP: " . $endereco["cep"] . "<br>";
            echo "Rua: " . $endereco["logradouro"] . "<br>";
            echo "Bairro: " . $endereco["bairro"] . "<br>";
            echo "Cidade: " . $endereco["localidade"] . "<br>";
            echo "Estado: " . $endereco["uf"] . "<br>";
        }
 
    } else {
 
        echo "CEP não informado!";
    }
?>