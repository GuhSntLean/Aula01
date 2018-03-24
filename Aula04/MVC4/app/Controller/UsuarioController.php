<?php

	namespace Controller;

	use Model\UsuariosModel;
	use Lib\ViewModel\ViewModel;



	class UsuarioController{
		
		private $usuariosModel;
		private $viewModel;

		public function __construct(){
			$this->usuariosModel = new UsuariosModel();
			$this->viewModel = new ViewModel();
		}

		public function index(){
			$usuario = $this->usuariosModel->all();
			$this->viewModel->render('usuario/index',['usuario' => $usuario]);
		}
		public function edit($id){
			echo "edit $id";
		}
		public function update($id){
			echo "update $id";
		}
		public function new(){
			$this->viewModel->render('usuario/new');
		}
		public function create(){
			$this->usuariosModel->insert($_GET);
			header('Location:?r=usuario');
		}
		public function delete($id){
			echo "delete $id";
		}
	}