<?php

require_once'assets/log/conexion/conexion.php';

	class ProdMod{
		private $id; 
		private $nombre;
		private $precio;
		private $stock; 
		private $marca;
		private $foto; 
        private $tipo; 

		function __construct(){
			$this->id=0;
			$this->nombre='';
			$this->marca='';
			$this->precio=0;
			$this->stock=0;
			$this->foto='';
            $this->tipo=0;
		}

		public function setDatos($a, $b, $c, $d, $e,$f){
		//echo "LLEgue al setdatos";
					$this->nombre=$a;
					$this->marca=$b;
					$this->precio=$c;
					$this->stock=$d;
					$this->foto=$e;	
                    $this->tipo=$f;
					
			
		}

		public function save(){
			if($this->id==0){
			
				try {

					$ruta='../assets/Carrito/productos/views/img/'.$this->foto['imagen']['name'];
                    $date=date("Y-m-d");  
					$mueveImagen=$this->cargarImagen($this->foto);
					$sql="insert into product(name_p, desc_p, price_p, stock_p, picture_p,created, tipo)
					values('$this->nombre', '$this->marca', 
					'$this->precio', '$this->stock', '$ruta','$date', $this->tipo)";
				
					$resultado=$this->aplicarQry($sql);
					return $resultado;
					}catch (Exception $e) {echo "Error en el insert".$e->getMessage().'<br>';
					}	
				

			}

		}



		public function lista(){
			try{
				$sql="select * from product";
				$resultado=$this->aplicarQry($sql);
				return $resultado;
			}catch (Exception $e) {echo "Error en el select".$e->getMessage().'<br>';}

		}

		public function getPrecio(){
				return $this->precio;
				}


		public function aplicarQry($sql){
		
			$objConectar=new Conexion();
			$resultado=$objConectar->ejecutarConsulta($sql);
			$objConectar->cerrar();
			return $resultado;
		}
		public function cargarImagen($img){

			$ruta="views/img/";
			$nombretemp=$img['imagen']['tmp_name']; 
			$nombrearchivo=$img['imagen']['name'];
			$tamanioarchivo=$img['imagen']['size'];
			try{
					//funcion para mover un archivo de un origen al destino
					move_uploaded_file($nombretemp, $ruta.$nombrearchivo);
					return false;

			}catch(Exception $e){echo "No se movio la imgen".$e->getMessage();}

		}



		

}//CIERRE DE CLASE


?>
