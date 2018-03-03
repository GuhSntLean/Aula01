<?php
	interface ContaInterface{
		public function sacar();
		public function depositar();
		public function verSaldo();
	}

	class ContaCorrent implements ContaInterface{
		public function sacar(){}
		public function depositar(){};
		public function verSaldo(){};
	}