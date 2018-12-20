<?php
//Establece los datos para conectar con el lservidor

class DatoServidor{
			private $sv="localhost";
			private $us="root";
			private $pa="";
			private $bd="munelucos_store";
			
			public function getSv(){
				return $this->sv;
				}
				
				public function getUs(){
				return $this->us;
				}
				
				public function getPa(){
				return $this->pa;
				}
				
				public function getBd(){
				return $this->bd;
				}
				
				
				
	
}



?>
