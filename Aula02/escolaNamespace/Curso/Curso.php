<?php
namespace Escola;
class Curso{
		private $nome;
		private $cargaHrs;
		public function __construct(string $nome, int $cargaHrs){
			$this->nome = $nome;
			$this->cargaHrs = $cargaHrs;
		}
		public function getNome(){
			return $this->nome;			
		}
		public function setNome(string $nome){
			$this->nome = $nome;			
		}

		public function getCargaHrs(){
			return $this->cargaHrs;			
		}
		public function setCargaHrs(string $cargaHrs){
			$this->cargaHrs = $cargaHrs;			
		}
}