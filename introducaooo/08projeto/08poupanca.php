
 <?php

 class Poupanca extends Conta
 {
    private float $reajuste;

    public function __construct(string $agencia, string $conta, string $saldoInicial, float $reajuste)
    {
    	parent ::__construct('poupança',$agencia, $conta);	
		$this-> deposito($saldoInicial);
		$this-> reajuste = $reajuste;		
    } 

    public function calculaSaldo()	 
	{
		return $this-> saldo() + ($this-> saldo() * $this-> reajuste / 100.0); 
	}
    
 } 

 ?>