<?php
	//require_once 'Aluno/Aluno.php';
	//require_once 'Turma/Turma.php';
	//require_once 'Curso/Curso.php';
	//require_once 'Matricula/Matricula.php';

	echo "<pre>";

	$aluno = new Aluno("Gustavo","gustavo@gustavo.com.br");
	$curso = new Curso("PHP",40);
	$turma = new Turma("PHP","Sabado");
	$matricula = new matricula($aluno,$turma);

  	echo "<br>";

	echo $matricula->getTurma()->getCurso();