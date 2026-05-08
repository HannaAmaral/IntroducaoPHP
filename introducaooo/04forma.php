<?php

    abstract class Forma{
        //Declaração a atribucao do atributo
        public $tipoForma = "Forma Abstrata";
        

        //declaracao do metodo
        public function Imprimirforma() {
            echo $this->tipoForma . "com Área de " . $this ->calculaArea() . "<br>";
        }

        abstract public function calculaArea();

    }
//---------------------------------------------------------------------------//
    class Quadrado extends Forma{
        //declarando o atributo
        public $lado;

        //declarando o construtor
        public function __construct(float $lado){
            $this-> tipoForma = 'Forma é um Quadrado, ';
            $this->lado = $lado;
        }

        //implementando o metodo abstrato da classe base
        public function calculaArea(){
            return $this-> lado * $this-> lado;    
        }
    }
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//
    class Retangulo extends Forma{
        private float $base;
        private float $altura;

        public function __construct(float $base, float $altura)
        {
            $this->tipoForma = 'Forma é um Retangulo, ';
            $this->base = $base;
            $this->altura = $altura;
        }
        public function calculaArea()
        {
            return $this-> base * $this-> altura;
        }
    }

    class Triangulo extends Forma{
        private float $comprimentoBase;
        private float $altura;

        public function __construct(float $comprimentoBase, float $altura)
        {
            $this->tipoForma       = 'Forma é um Triangulo, ';
            $this->comprimentoBase = $comprimentoBase;
            $this->altura          = $altura;
        }
        public function calculaArea()
        {
            return ($this-> comprimentoBase * $this->altura) / 2;
        }
    }
    
    class Circulo extends Forma{
        private float $raio;

        public function __construct(float $raio){
            $this->tipoForma = 'Forma é um Circulo, ';
            $this->raio      = $raio;
        }
        public function calculaArea()
        {
            return ($this->raio ** 2) * M_PI;
        }
    }
//---------------------------------------------------------------------------//
    //intanciação da classe concreta
    $objQuadrado = new Quadrado(10.0);
    $objQuadrado-> Imprimirforma();
    
    $objRetangulo = new Retangulo(20.0, 10.0);
    $objRetangulo-> Imprimirforma();

    $objTriangulo = new Triangulo(10.0, 5.0);
    $objTriangulo-> Imprimirforma();

    $objCirculo = new Circulo(5.0, 3.14);
    $objCirculo-> Imprimirforma();
?>