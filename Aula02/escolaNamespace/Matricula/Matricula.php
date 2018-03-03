<?php
namespace Escola;
class Matricula{
	private $aluno;
	private $turma;
	private $note1;
	private $note2;

	public function __construct(Aluno $aluno, Turma $turma){
		$this->aluno = $aluno;
		$this->turma = $turma; 
	}

	public function getAluno(){
		return $this->aluno ;
	}
	public function setAluno($aluno){
		$this->aluno = $aluno;
	}

	public function getTurma(){
		return $this->turma ;
	}
	public function setTurma($turma){
		$this->turma = $turma;
	}

}