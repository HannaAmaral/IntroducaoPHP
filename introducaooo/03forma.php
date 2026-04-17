<?php

    abstract class Forma{
        //Declaração a atribucao do atributo
        public $tipoForma = "Forma Abstrata";
        

        //declaracao do metodo
        public function Imprimirforma() {
            echo $this->tipoForma . "com Área de " . $this ->calculaArea();
        }

        abstract public function calculaArea();

    }

    class Quadrado extends Forma{

        //declarando o atributo
        public $lado;

        //declarando o construtor
        public function __construct(float $lado){

            $this-> tipoForma = 'Forma é um Quadrado, ';
            $this->lado = $lado;

        }

        //implementando o metodo abstrato da classe base
        public function calculaArea()
        {
            return $this-> lado * $this-> lado;    
        }

    }

    //intanciação da classe concreta
    $obj = new Quadrado(10.0);

    //atribuir o valor do atributo
    
    //$obj-> lado = 10;

    //aceesando o membro de uma classe
    $obj-> Imprimirforma();
?>