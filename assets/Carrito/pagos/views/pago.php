<?php

class PagoView{
    
    public function index(){
        
        $datos=$_SESSION['completo'];
		
		$pagina=file_get_contents("payments.html"); 
		$pos1 = strpos($pagina,'<!--TICKET-->');
		$pos2 = strrpos($pagina,'<!--TICKET-->'); 
		$length = $pos2-$pos1;
    	$match = substr($pagina,$pos1,$length);
    	$render='';
		
		foreach($datos as $i=>$dict){
			$render.=str_replace(array_keys($dict),array_values($dict), $match);
					
		}

		$paginafinal=str_replace($match, $render, $pagina);

		 
		if(isset($_SESSION['acum'])&& isset($_SESSION['total'])){
			$paginafinal=str_replace('{TOTAL}', "$ ".$_SESSION['total'].".00", $paginafinal);
		}
		else
		{
			$paginafinal=str_replace('{TOTAL}', "Add products", $paginafinal);
		}
		//Sustitución de todos los datos del ticket

			
			$paginafinal = str_replace('{FECHA}', $_SESSION['fecha'], $paginafinal);
			$paginafinal = str_replace('{SUBTOTAL}', $_SESSION['subtotal'], $paginafinal);
			$paginafinal = str_replace('{IVA}', $_SESSION['iva'], $paginafinal);
			
		print($paginafinal);
		}
    public function msgPay($cadena){
			$pagina=file_get_contents("pago.html"); 
			$paginafinal = str_replace('{MESSAGE}', $cadena, $pagina);
			$paginafinal=str_replace('{TOTAL}', "Add", $paginafinal);
			print($paginafinal);

		}

		public function cardinfo($bienvenida){
			$pagina=file_get_contents("cardinfo.html"); 
			$paginafinal=str_replace('{TOTAL}', "$ ".$_SESSION['total'].".00", $pagina);
			$paginafinal=str_replace('{BIENVENIDA}', $bienvenida, $paginafinal);
			
			print($paginafinal);

		}
    
}
?>
