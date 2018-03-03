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

class Maticula{
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

$gustavo =new Aluno("Gustavo","guleandro@gmail.com");
$turma = new Turma("501","sabado");
$matriculaTeste =new Maticula($gustavo,$turma);
echo $matriculaTeste->getTurma()->getCurso();