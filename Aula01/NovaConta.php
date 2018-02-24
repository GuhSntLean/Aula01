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
	
	public function __construct(String $nomeTitular, String $tipoConta){
		$this->abrirConta($nomeTitular,$tipoConta);
	}

	public function abrirConta($nomeTitular, $tipoConta){
		if($tipoConta == "CC"){
			$this->saldo = 100;
			$this->status = true;
			$this->nomeTitular = $nomeTitular; 
			$this->setNumConta();
			$this->tipoConta = "CC";
		}elseif($tipoConta == "CP"){
			$this->saldo = 150;
			$this->status  = true;
			$this->nomeTitular = $nomeTitular;
			$this->setNumConta();
			$this->tipoConta = "CP";
		}else{
			echo "<br>Tipo da conta invalida conta nao criada";
			exit();
		}
	}


	public function fecharConta(){
		if($this->saldo == 0){
			$this->status = false;
			echo "<br>Conta fechada com sucesso ";
		}else{
			if($this->saldo < 0){
				echo "<br>pague sua divida para fechar a conta";
			}else{
				echo "<br>saque toda o dinheiro da conta";
			}
		}
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
	public function setNumConta(){
		$this->numConta = rand(1000,9999);
	}
	public function setStatus($numConta){
		$this->numConta = $numConta;
	}
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}


	public function depositar(int $valor){
		if($this->status == 1){
			$this->saldo += $valor;
			echo "<br>Depositado com sucesso";
		}else{
			echo "<br>Verifique sua conta";
		}
	}
	public function sacar(int $valor){
		if($valor > $this->saldo || $this->status != 1){
			echo "<br>Nao e possivel sacar";
		}else{
			$this->saldo -= $valor;
			echo "<br> sacado com sucesso";
		}
	}
	public function mostrarDados(){
		echo "<br><br>Numero da conta: ".$this->numConta."<br>Nome do titular: ".$this->nomeTitular."<br>Saldo da conta: ". $this->saldo."<br>";
		echo $this->status==1 ? "Status : Ativo":"Status : Inativo"; 
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

	$conta =  new Conta("Gustavo","CC");
	$conta->mostrarDados();
	$conta->depositar(100);
	$conta->sacar(50);
	$conta->fecharConta();
	$conta->sacar(150);
	$conta->fecharConta();
	$conta->mostrarDados();