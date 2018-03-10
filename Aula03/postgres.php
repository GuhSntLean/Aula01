<?php
require 'conexao.php';

//Mesma coisa para o mysql

//$sql = "INSERT INTO usuarios (usuario,senha) VALUES ('gus','123456') ";

//$db_Postgres->exec($sql);

//$sql = "SELECT * FROM usuarios";

//$resultado = $db_Postgres->query($sql);

//$user = $resultado->fetchAll(PDO::FETCH_ASSOC);

//print_r($user);

try{
	$db_Postgres->beginTransaction();

	$sql = "INSERT INTO usuarios(usuario,senha) VALUES ('gustavo','123456') ";

	$db_Postgres->exec($sql);

	$db_Postgres->commit();

}catch(PDOException $e){
	echo "Erro: ".$e->getMessage();
}