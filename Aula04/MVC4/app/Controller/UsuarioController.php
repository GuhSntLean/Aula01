<?php

	namespace Controller;



	class UsuarioController{
		
		private $usuariosModel;
		private $baseView;

		public function __construct(){
			$this->usuariosModel = new UnsuariosModel();
			$this->viewModel = new ViewModel();
		}

		public function index(){
			$usuarios = $this->usuariosModel->all();
			$this->viewModel->render('usuarios/index',['usuarios' => $usuarios]);
		}
		public function edit($id){
			echo "edit $id";
		}
		public function update($id){
			echo "update $id";
		}
		public function new(){
			echo "new";
		}
		public function create(){
			echo "create";
		}
		public function delete($id){
			echo "delete $id";
		}
	}