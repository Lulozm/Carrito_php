<?php 
    require_once 'conexion/conexion.php';
    class CartModel{
        private $id;
        function __construct(){
            $this->id=0; 
        }
        
        public function get($id){
            $this->id=$id;
            try{
                $sql="select product_id, picture_p,name_p, desc_p, price_p from product where product_id=$this->id";
                
                $result=$this->aplicarQry($sql); 
                return $result;
                
            }catch(Exception $e){echo "error en el select"; }
            
        }
     
        public function aplicarQry($sql){
			$objConectar=new Conexion();
			$resultado=$objConectar->ejecutarConsulta($sql);
			$objConectar->cerrar();
			return $resultado;
		}
        
             
    }
?>