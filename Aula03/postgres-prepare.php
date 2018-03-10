<?php
require 'conexao.php';

try{
	$db_Postgres->beginTransaction();

	$dados = ['usuario' => 'couve', 'senha'=>'258456'];
	$sql = "INSERT INTO usuarios(usuario,senha)VALUES(:user,:pass)";
	$stmt = $db_Postgres->prepare($sql);
	$params = [':user' => $dados['usuario'],':pass' => $dados['senha']];
	$stmt->execute($params);

	$db_Postgres->commit();
}catch(PDOException $e){
	echo "Erro: ".$e->getMessage();
}