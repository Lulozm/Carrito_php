<?php
require_once 'assets/Carrito/productos/models/producto.php';
require_once 'assets/Carrito/productos/views/producto.php';

class ProdCont{

	public $objProducto;
	public $objvista;
	

	function __construct(){
		$this->objProducto=new ProdMod();
		$this->objvista = new ProdView();
	}

	public function index(){
		$this->objvista->index();
		
	    
	}

	public function insertar(){
		
			$a=$_POST['nombre'];
			$b=$_POST['descripcion'];
			$c=$_POST['precio'];
			$d=$_POST['stock'];
			$e=$_FILES;
            $f=$_POST['tipo'];
			$this->objProducto->setDatos($a, $b, $c, $d, $e,$f);
			$resultado=$this->objProducto->save();
			return $resultado;
	
	}
	public function lista(){
			$registros=$this->objProducto->lista();
			$datos=array();
			while($renglon=mysqli_fetch_assoc($registros)){
				$Dict=array(
                    '{ID}'=>$renglon['product_id'],
					'{FOTO}'=>$renglon['picture_p'], 
					'{NOMBRE}'=>$renglon['name_p'], 
					'{DESCRIPCION}'=>$renglon['desc_p'],
					'{PRECIO}'=>$renglon['price_p'],
					'{STOCK}'=>$renglon['stock_p']
				    );
				    array_push($datos, $Dict);
			}

			//var_dump($datos); 
        $this->objvista->gallery($datos);
	}
	



		
}

?>