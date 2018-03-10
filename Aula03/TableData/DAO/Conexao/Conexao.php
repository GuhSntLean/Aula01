<?php 
	
namespace DAO\Conexao;

use PDO;

class Conexao
{
	private static $user = "gs";
	private static $pass = "4linux@";
	private static $dns = "pgsql:host=localhost;dbname=aula03";

	private static $instance = null;

	private function __construct(){}
	private function __clone(){}

	public static function getInstance(){
		if(is_null(self::$instance)){
			self::$instance =  new PDO(self::$dns,self::$user,self::$pass);
			self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		return self::$instance;
	}
}