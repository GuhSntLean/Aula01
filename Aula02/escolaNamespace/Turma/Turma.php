<?php 
namespace Escola;
class Turma{
	private $curso;
	private $periodo;
	
	public function __construct(string $curso, string $periodo){
		$this->curso = $curso;
		$this->turma = $periodo;
	}

	public function getCurso(){
		return $this->curso ;
	}
	public function setCurso($curso){
		$this->curso = $curso;
	}

	public function getPeriodo(){
		return $this->periodo ;
	}
	public function setPeriodo($periodo){
		$this->periodo = $periodo;
	}
}