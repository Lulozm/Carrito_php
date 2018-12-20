<?php

    class CartView{
        
        public function carrito($products){
	   //file gets content trata a la  pagina como una cadena
		$pagina=file_get_contents("index2.html"); 
		
		//saca una posicion  strpos
		$pos1 = strpos($pagina,'<!--CART-->');
		//de atras para a delante
        $pos2 = strrpos($pagina,'<!--CART-->');
       //resta para sacar la posicion 
        $length = $pos2-$pos1;
        //sustrae la cadena 
        $match = substr($pagina,$pos1,$length);
		$render='';

		foreach($products as $key=>$dict){
			
			$render.=str_replace(array_keys($dict),array_values($dict), $match);
        }
		
		$paginafinal=str_replace($match, $render, $pagina); 
		
     
		if(isset($_SESSION['acum'])&& isset($_SESSION['total'])){
			$paginafinal=str_replace('{TOTAL}', "$ ".$_SESSION['total'].".00", $paginafinal);
            $paginafinal=str_replace('{ACUM}', " ".$_SESSION['total'], $paginafinal);

		}
		else
		{
			$paginafinal=str_replace('{TOTAL}', "Add products", $paginafinal);
			$paginafinal = str_replace('{ACUM}', "No", $paginafinal);
			
        }
        print($paginafinal); 
		
		}
    
    }
?>