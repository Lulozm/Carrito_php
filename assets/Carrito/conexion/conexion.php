<?php
require_once 'DatoServidor.php';
class conexion{
		private $conectar;
		
		function __construct(){
			//crea un objeto de la clase DatoServidor
			$ObjServidor=new DatoServidor();
			//primera función de php para base de datos
			try{
				$this->conectar= new mysqli($ObjServidor->getSv(), $ObjServidor->getUs(), $ObjServidor->getPa(), $ObjServidor->getBd());
			}catch(Exception $e){
				echo "No se logró la conexión por: ".$e.getMessage()."<br>";
			}
		}
		
		public function ejecutarConsulta($sql){
			try{
				
				$registro=$this->conectar->query($sql);
				//msqli_query($sql,$this->conectar);
				return $registro;
			}catch(Exception $e){
				echo "No se logró la consulta".$e.getMessage()."<br>";
			}
		}
		
		public function cerrar(){
				mysqli_close($this->conectar);
		}
}
?>
