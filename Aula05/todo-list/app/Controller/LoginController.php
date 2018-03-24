<?php
	namespace Controller;

	use Model\UsuariosModel;
	use Lib\ViewModel\ViewModel;

	class LoginController{
		public function __construct(){
			$this->usuariosModel = new UsuariosModel();
			$this->viewModel = new ViewModel();
		}
		public static function isLogado(){
			if(!$_SESSION['logado']){
				header('Location:?login/login');
			}
		}
		public function login(){
			$this->viewModel->render('login/login');
		}
		public function logginIn(){
			
		}
		public function logout(){}
	}