<?php 
    abstract class pessoa{
        private string $tipoInscricao;
        private string $numeroInscricao;

        public function __construct(string $tipoInscricao, string $numeroInscricao)
        {
            $this-> tipoInscricao = $tipoInscricao;
            $this-> numeroInscricao = $numeroInscricao;
        }

        public function Imprime(){
            echo '$tipoInscricao' . '- ' . $this->numeroInscricao . 'Renda: ' . $this->calculaRenda();
        }
        abstract public function calculaRenda();
    }
?>