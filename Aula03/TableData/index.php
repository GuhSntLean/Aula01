<?php
	
	require 'autoload.php';

	use Model\Usuario\Usuario;
	use DAO\UsuarioDAO\UsuarioDAO;

	$gustavo =  new Usuario('Gu','753');

	$dao = new UsuarioDAO();
	$dao->insert($gustavo);

	


