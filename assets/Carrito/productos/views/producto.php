<?php


class ProdView{

    //La primer funcion de nuestra clase vista es lanzar el formulario para insertar
    
		public function index(){
		$pagina=file_get_contents('../public_html/insertar.html');
        $pagina=str_replace('{MENSAJE}', '',$pagina);  
		print($pagina);
		} 

	

	public function mensaje(){
		$pagina=file_get_contents('../public_html/insertar.html');
	    $mensaje="Se registró con éxito"; 
		$paginafinal=str_replace('{MENSAJE}', $mensaje,$pagina);
		print($paginafinal); 
	}

public function gallery($products){
	//file gets content trata a la  pagina como una cadena
		$pagina=file_get_contents("index.html"); 
		
		//saca una posicion  strpos
		$pos1 = strpos($pagina,'<!--GALLERY-->');
		//de atras para a delante
        $pos2 = strrpos($pagina,'<!--GALLERY-->');
       //resta para sacar la posicion 
        $length = $pos2-$pos1;
        //sustrae la cadena 
        $match = substr($pagina,$pos1,$length);
		$render='';

		foreach($products as $key=>$producto){
			$dict = array();
			foreach($producto as $indice=>$valor){
				$dict[$indice] = $valor; 
			}
			$render.=str_replace(array_keys($dict),array_values($dict), $match);
		
		$paginafinal=str_replace($match, $render, $pagina); 
		}
        print($paginafinal);
		/*if(isset($_SESSION['accum'])&& isset($_SESSION['total'])){
			$paginafinal=str_replace('{TOTAL}', "$ ".$_SESSION['total'].".00", $paginafinal);

		}
		else
		{
			$paginafinal=str_replace('{TOTAL}', "Add products", $paginafinal);}
			$paginafinal = str_replace('{WEB_DIR}', WEB_DIR, $paginafinal);
			print($paginafinal); 
		*/
		}



}

?>