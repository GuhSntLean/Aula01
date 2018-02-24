<?php 
//Classe Conta
//Atributos
//numConta
//Saldo
//Titular
//Metodos
//sacar
//depositar
//VarSaldo
//vertitular
//verNumconta
//gerarNumConta
//Contrutor = Nome do titular, saldo, caso nao passe o saldo o saldo = 0; Gerar o numero da conta;
class Conta
{
	private $numConta;
	private $nomeTitular;
	private $saldo = 0;
	private $tipo ;
	private $status = false;
	public function __construct(String $nomeTitular,int $saldo = 0){
		$this->numConta = rand(1000,15000);
		$this->nomeTitular = $nomeTitular;
		$this->saldo = $saldo;
	}


	public function getSaldo(){
		return $this->saldo;
	}
	public function getTitular(){
		return $this->nomeTitular;
	}

	public function getNumConta(){
		return $this->numConta;
	}
	public function getStatus(){
		return $this->status;
	}
	public function getTipo(){
		return $this->tipo;
	}

	public function setSaldo($saldo){
		$this->saldo =  $saldo;
	}
	public function setTitular($titular){
		$this->titular = $titular;
	}
	public function setNumConta()


	public function depositar(int $valor){
		$this->saldo += $valor;
	}
	public function sacar(int $valor){
		if($valor > $this->saldo){
			echo "<br>Nao e possivel sacar";
		}else{
			$this->saldo -= $valor;
		}
	}
	public function mostrarDados(){
		echo "<br><br>Numero da conta: ".$this->numConta."<br>Nome do titular: ".$this->nomeTitular."<br>Saldo da conta: ". $this->saldo; 
	}

	public function mostrarSaldo(){
		echo "<br>Seu saldo : ". $this->saldo."<br>" ;
	}

	public function mostrarTitular(){
		echo "<br>Titular :".$this->nomeTitular."<br>" ;
	}

	public function mostrarNumConta(){
		echo "<br>Numero da conta :".$this->numConta."<br>";
	}

}

	$conta =  new Conta("Gustavo",1500);
	$conta->mostrarDados();
	$conta->depositar(100);
	$conta->sacar(50);
	$conta->mostrarDados();
	$conta->mostrarTitular();



