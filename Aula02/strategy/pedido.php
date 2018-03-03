<?php
	interface FreteStrategy{
		public function calcular();
	}

	class FreteNormal implements FreteStrategy{
		public function calcular(){
			return 2 ;
		}
	}

	class FreteExpresso implements FreteStrategy{
		public function calcular(){
			return 5 ; 
		}
	}

	class FreteSuper implements FreteStrategy{
		public function calcular(){
			return 10 ; 
		}
	}

	class Pedido {
		private $freteStrategy;
		private $preco = 0;
		private $totalpedido;
		public function __construct(int $preco , FreteStrategy $tipoFrete){
			$this->freteStrategy = $tipoFrete;
			$this->preco = $preco;
		}
		public function calcularTotalPedido(){
			//arrumar texto
			//echo $this->freteStrategy += $this->freteStrategy->calcular();
		}
	}
	
	$pedido = new Pedido(50, new FreteNormal());
	echo $pedido->calcularTotalPedido();