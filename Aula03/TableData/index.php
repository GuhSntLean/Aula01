<?php
	
	require 'autoload.php';

	use Model\Usuario\Usuario;
	use DAO\UsuarioDAO\UsuarioDAO;

	$gustavo =  new Usuario('Gut','753');

	$dao = new UsuarioDAO();
		
	



