<?php

    class Forma{
        //Declaração a atribucao do atributo
        public $tipoForma = "Forma Abstrato";
        

        //declaracao do metodo
        public function Imprimirforma() {
            echo $this->tipoForma;
        }
    }


    //intanciação da classe
    $obj = new Forma();

    //aceesando o membro de uma classe
    $obj-> Imprimirforma();
?>