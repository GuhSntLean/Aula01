<?php
	class Conta{
		protected $numConta;
		protected $nomeTitular;
		protected $saldo;
		protected function setTotal($nomeTitular, $saldo ,$numConta){
			$this->numConta = $numConta;
			$this->nomeTitular = $nomeTitular;
			$this->saldo = $saldo;
		}
	}

	class ContaCorrente extends Conta{ 
		private $chqEspecial;

		public function __construct(String $nomeTitular, int $saldo,bool $chqEspecial){
			$numConta = "CC".rand(1000,9999);
			$this->setChqEspecial($chqEspecial);
			$this->setTotal($nomeTitular,$saldo,$numConta);			
		}

		public function getChqEspecial(){
			 return $this->chqEspecial;
		}

		public function setChqEspecial($chqEspecial){
			$this->chqEspecial = $chqEspecial;
		}

		public function sacar($valor){
			if($valor < $this->saldo){
				$this->saldo -= (($valor * 0.10) + $valor);
				echo "<br>Seu saque foi de ".$valor." e seu novo saldo e de ". $this->saldo ."";
			}else{
				echo "<br>Saldo insuficente para relizar o sac.";
			}
		}

		public function depositar($valor){
			$this->saldo = $this->saldo + ($valor -(0.10 * $valor));
			echo "<br>Seu valor de deposito foi de ".$valor." e seu novo saldo e de ".$this->saldo;
		}
	}

	class ContaPoupanpa extends Conta{
		public function __construct(String $nomeTitular, int $saldo){
			$numConta = "CP".rand(1000,9999);
			$this->setTotal($nomeTitular,$saldo,$numConta);			
		}

		public function sacar($valor){
			if($valor < $this->saldo){
				$this->saldo -= $valor;
				echo "<br>Seu saque foi de ".$valor." e seu novo saldo e de ". $this->saldo ."";
			}else{
				echo "<br>Saldo insuficente para relizar o sac.";
			}
		}

		public function depositar($valor){
			$this->saldo += $valor;
			echo "<br>Seu valor de deposito foi de ".$valor." e seu novo saldo e de ".$this->saldo;
		}
	}

	$contaCC = new ContaCorrente("Gustavo",100,true);
	$contaCP = new ContaPoupanpa("Beatriz",200);
	
	$contaCC->sacar(10);
	$contaCC->depositar(10);
