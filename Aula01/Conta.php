<?php
	//Crir uma classe chamda conta
	//Ela deve ter dois atributos
	//numConta
	//saldo
	//mostrar na tela a seguite mensagem
	//Saldo atual da conta x e x
	//Criar dois metodos sacar(valor) e depositar(Valor)
	//estou sacando x
	//estou depositando y
	//Alterar os metodos para que eles alterem o valor do atributo
	//Exibir o saldo atualizado
	

	class Conta
	{
		public $numConta;
		private $saldo = 0;

		public function sacar(int $valor){
			if($valor > $this->saldo){
				echo "<br>Nao e possivel sacar<br>";
			}else{
				 $this->saldo -= $valor;
			}
		}

		public function depositar(int $valor){
			$this->saldo += $valor;
		}

		public function getSaldo(){
			return $this->saldo;
		}

		public function setSaldo($valor){
			$this->saldo = $valor;
		}
	}

	$conta1 = new Conta();

	$conta1->numConta = "123-4";
	$conta1->depositar(1000);

	$valorConta = $conta1->getSaldo();
	echo "<br>Seu saldo atua e de ".$valorConta.".";

    $conta1->sacar(20);
    $conta1->depositar(1000);

    $valorConta = $conta1->getSaldo();
	echo "<br>Seu saldo atua e de ".$valorConta.".";