 <?php

   abstract class conta
   {
      private $tipoDeConta;
      private $agencia;
      private $conta;
      private $saldo;

      private array $movimentacao = [];

      public function __construct($tipoDeConta, $agencia, $conta)
      {
         $this->tipoDeConta = $tipoDeConta;
         $this->agencia = $agencia;
         $this->conta = $conta;
      }

      public function imprimeExtrato()
      {
         echo 'Conta: ' . $this->tipoDeConta . ' Agência: ' . $this->agencia . ' Conta: ' . $this->conta . ' Saldo: ' . $this->calculaSaldo();

         foreach( $this->movimentacao as $itemExtrato  )
         {
            echo '<br>' . $itemExtrato-> imprimeItem() ;
         }
      }

      public function deposito(float $valor)
      {
         $this->saldo = $this->saldo + $valor;
         $this->incluiMovimentacao(new itemExtrato("Depósito", $valor));
      }

      public function saque(float $valor)
      {
         $this->saldo -= $valor;
         $this->incluiMovimentacao(new itemExtrato("Saque", $valor));
      }

      public function saldo()
      {
         return $this->saldo;
      }

      public function incluiMovimentacao(itemExtrato $item)
      {
         $this->movimentacao[] = $item;
      }

      public function contaFormatada()
      {
         return $this->tipoDeConta . " | Agencia: " . $this->agencia . " | Número: " . $this->conta;
      }

      abstract public function calculaSaldo();
   }

   ?>