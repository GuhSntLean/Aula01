<?php
	interface televisao{
		public function aumentarVolume();
		public function diminuirVolume();
		public function trocarCanal($canal);
		public function liga();
		public function desliga();
	}
	class  TV{
		private $status;
		private $canal;
		private $volume;

		public function __construct(){
			$this->status = false;
			$this->volume = 10;
			$this->canal = 5;
		}

		public function aumentarVolume(){
			if($this->status == true){
				if($this->volume < 50){
					$this->volume += 1;	
				}	
				echo "<br>Volume:";
				for($i = 1; $i <= $this->volume; $i++){
					echo "|";
				}
			}
		}
		public function diminuirVolume(){
			if($this->status == true){
				if($this->volume > 0){
					$this->volume -= 1;	
				}
				echo "<br>Volume:";
				for($i = 1; $i <= $this->volume; $i++){
					echo "|";
				}
			}	
		}
		public function trocarCanal($canal){
			if($this->status == true){
				if($canal > 0){
					$this->canal = $canal;	
				}
				echo "<br>Canal: ".$this->canal;
			}
		}
		public function liga(){
			if($this->status == false){
				$this->status = true;	
			}
		}
		public function desliga(){
			if($this->status == true){
				$this->status = false;	
			}
		}
	}

	$tvSala = new TV(); 
	$tvSala->liga();
	$tvSala->aumentarVolume();
	$tvSala->aumentarVolume();
	$tvSala->aumentarVolume();
	$tvSala->aumentarVolume();
	$tvSala->aumentarVolume();
	$tvSala->diminuirVolume();
	$tvSala->diminuirVolume();
	$tvSala->diminuirVolume();
	$tvSala->diminuirVolume();
	$tvSala->diminuirVolume();
	$tvSala->trocarCanal(10);

