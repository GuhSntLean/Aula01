<?php 

namespace Model;

use DAO\UsuarioDAO;

class UsuariosModel
{
	private $usuariosDAO;

	public function __construct(){
		$this->usuariosDAO = new UsuarioDAO();
	}

	public function all(){
		return $this->usuariosDAO->all();
	}
	public function insert(array $dados){
		$this->usuariosDAO->insert($dados);
	}
}