<?php

class NaoPodeSerMaiorException extends Exception
{}
class NaoPodeSerNegativoException extends Exception
{}
class NaoPodeSerNegativoException extends Exception
{}

class Calc{
	public static function soma($a , $b){
		if($a < 0 || $b < 0){
			throw new NaoPodeSerNegativoException();
		}else if($a + $b > 50){
			throw new NaoPodeSerMaiorException();
		}
		return $a + $b;
	}
	public static function subt($a , $b){
		if($a < 0 || $b < 0){
			throw new Exception("Nao e permitido subtrair com numero numero negativo");
		}
		return $a + $b;
	}
	public static function div($a , $b){
		if($a == 0){
			throw new Exception("Nao permitido numero infinito");
		}else if($b == 0){
			throw new Exception("Nao permitido divisao por zero");
		}
		return $a / $b;
	}
	public static function mult($a , $b){
		if($a < 0 || $b < 0){
			throw new Exception("Nao e permitido soma com numero numero negativo");
		}else if($a * $b > 50){
			throw new Exception("Nao permitido resultado maior que 50");
		}
		return $a * $b;
	}
}


try{
	echo "Soma: ";
	echo Calc::soma(-9,4);	
}catch(NaoPodeSerNegativoException $e){
	echo "<br>Erro:";
	echo $e;
} 

try{
	echo "Soma: ";
	echo Calc::soma(48,4);	
}catch(NaoPodeSerMaiorException $e){
	echo "<br>Erro:";
	echo $e;
} 
