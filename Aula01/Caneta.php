<?php
	class Caneta
	{
		private $cor;
		private $marca;
		private $tampada = true;

		public function __construct($cor ,$marca){

		}

		public function getCor(){
			return $this->cor;
		}
		public function setCor($cor){
			$this->cor =  $cor;
		}
		public function getMarca(){
			return $this->marca;
		}
		public function setMarca($marca){
			$this->marca = $marca;
		}

		public function escrever(){
			echo "escrever";
		}
		public function escreverNovo($texto){
			echo $texto;
		}
		public function destamparCaneta(){
			$this->tampada = false;
		}
		public function tamparCaneta(){
			$this->tampada =  true;
		}

		
	}

	$azul = new Caneta();

	$azul->setCor("Azul");
	$azul->setMarca("BIC");
	$azul->destamparCaneta();

	echo "<pre>"; 
	var_dump($azul);

	echo "<br>";
	$azul->escreverNovo("Azulao");
	echo "<br>";
	$azul->escrever();
