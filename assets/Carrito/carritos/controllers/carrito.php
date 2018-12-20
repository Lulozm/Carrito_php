<?php
    require_once 'assets/Carrito/carritos/models/carrito.php'; 
    require_once 'assets/Carrito/carritos/views/carrito.php';

    class CartCont{
        private $objCartModel;
        private $objCartView; 
        private $acum; 
        private $total; 
       
        
        function __construct(){
            $this->objCartModel= new CartModel();
             $this->objCartView= new CartView();
            $this->acum=0; 
            $this->total=0; 
           
        }
                   
        public function add($id){
            if(isset($_SESSION['carrito'][$id])){
                
                $_SESSION['carrito'][$id]++;
            }
            
            else{
                 $_SESSION['carrito'][$id]=1;
            }
      	$datos=$this->creatCart();
        return $datos;
        }
        
    public function reducir($id){
        if(isset($_SESSION['carrito'][$id])&& $_SESSION['carrito'][$id]>1){
            $_SESSION['carrito'][$id]--;
        }
        else{
            unset($_SESSION['carrito'][$id]);
        }
	   $datos=$this->creatCart();
        return $datos;
    }
    public function vaciar(){
        unset($_SESSION['carrito']);
        $_SESSION['total']=0;
        $_SESSION['acum']=0;
        session_destroy();

    }
         
    public function creatCart(){
        if(isset($_SESSION['carrito'])){
            $datos=array();
          
            foreach ($_SESSION['carrito'] as $id=>$x){
                
                $producto=$this->objCartModel->get($id); 
                while($renglon=mysqli_fetch_assoc($producto)){
                    $id=$renglon['product_id']; 
                    $imagen=$renglon['picture_p']; 
                    $nombre=$renglon['name_p']; 
                    $desc=$renglon['desc_p'];
                    $precio=$renglon['price_p'];
                    $importe=$precio*$x;
                    $this->acum=$this->acum+$x;
                    $this->total=$this->total+$importe; 
                    $Dict=array(
                        '{ID}'=>$id, 
                        '{IMAGEN}'=>$imagen,
                        '{NOMBRE}'=>$nombre,
                        '{DESCRIPCION}'=>$desc,
                        '{PRECIO}'=>$precio,
                        '{CANTIDAD}'=>$x,
                        '{IMPORTE}'=>$importe);
                    array_push($datos, $Dict); 
                $_SESSION['acum']=$this->acum;
				$_SESSION['total']=$this->total;  
                }
            }
            $_SESSION['completo']=$datos; 
            return $datos;
            
        }
    }
        
}  
 
?>