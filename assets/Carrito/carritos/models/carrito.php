<?php
    require_once 'assets/log/conexion/conexion.php';
    class CartModel{
        private $id;
        
     function __construct(){
         
     }
        
        public function get($id){
            
            try{
                $sql="select product_id, name_p, picture_p, desc_p, price_p from product where product_id=$id";
                $result=$this->aplicarQry($sql);
                return $result;
                
                
            }catch(Exception $e){
                echo "error en el select";
                
            }
        }
        
        
        
        public function aplicarQry($sql){
		
			$objConectar=new Conexion();
			$resultado=$objConectar->ejecutarConsulta($sql);
			$objConectar->cerrar();
			return $resultado;
		}
        
        
    }

?>