<?php
	
	require 'autoload.php';

	use Model\Usuario\Usuario;
	use DAO\UsuarioDAO\UsuarioDAO;

	$gustavo =  new Usuario('rota','753',2);



	echo "<pre>";
	$listar = Usuario::all();
	$achar = Usuario::find(1);
	$achar->setUsuario("Beatriz");
	$achar->save();
	print_r($achar);
		
	



