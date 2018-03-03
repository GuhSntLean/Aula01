<?php 

class Aluno{
		private $nome;
		private $email;
		public function __construct(string $nome, string $email){
			$this->nome = $nome;
			$this->email = $email;
		}
		public function getNome(){
			return $this->nome;			
		}
		public function setNome(string $nome){
			$this->nome = $nome;			
		}

		public function getEmail(){
			return $this->email;			
		}
		public function setEmail(string $email){
			$this->email = $email;			
		}
}