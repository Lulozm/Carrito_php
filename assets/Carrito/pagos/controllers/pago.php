<?php
    //require_once 'pagos/models/carrito.php'; 
    require_once 'assets/Carrito/pagos/views/pago.php';

    class PagoCont{
       
    function __construct(){
        
    }
        
    public function index(){
        $_SESSION['fecha']=date('Y-m-d');
        $_SESSION['subtotal']=round(($_SESSION['total']/1.16),2);
        $_SESSION['iva']=round(($_SESSION['subtotal']*0.16),2);
        
    }
        
        
    public function cash(){

	$cadena ="<p>Total a depositar: $".$_SESSION['total'].".00 <br/>Cuenta para depositar: #############<br/>
	 Dirección para recoger envío: ######<br/>
	 Nota:
	 <p> Una vez recibido su depósito, en  un lapso de 10 a 15 días su pedido será entregado. En caso contrario comúnicarse al teléfono  333-33-33.
	 <br/> ¡Gracias por su compra!</p>";
//--- Enviar correo al cliente--//
		$para      = '';
		$titulo    = 'Datos de su compra';
		$mensaje   = $cadena; 
		$cabeceras = 'From: webmaster@bmcarrots.com' . "\r\n" .
    				'Reply-To: webmaster@bmcarrots.com' . "\r\n" ;
    				
         
		//mail($para, $titulo, $mensaje, $cabeceras);

	 //linea para ir al view con la variable de ($cadena); 
     return $cadena;
	}

	public function cardinfo(){
		$bienvenida="Bienvenido  agradecemos su información";
		
        //linea para ir al vi$this->view->cardinfo($bienvenida); 
		return $bienvenida;
	}
public function credit(){
		$longitud=strlen($_POST['creditcard']); 
		if($longitud==16&&$_POST['creditcard']!='0000000000000000'){
			$cadena ="<p>¡Trasnsacción Exitosa!<br/>
				 	Pago Efectuado por: $".$_SESSION['total'].".00 <br/>
					En  un lapso de 6 días su pedido será entregado. En caso contrario comúnicarse al teléfono  333-33-33.
	 				<br/> <a href='/bmcarrots/receipts/receipt/index' target='_blank'>Receipt</a>   ¡Gracias por su compra!</p>";

	 				$para= '';
					$titulo    = 'Datos de su compra';
					$mensaje   = $cadena; 
					$cabeceras = 'From: webmaster@bmcarrots.com' . "\r\n" .
    				'Reply-To: webmaster@bmcarrots.com' . "\r\n" ;
    				//mail($para, $titulo, $mensaje, $cabeceras);
			
			//linea para ir al view en el metodo mensaje del pago $this-con cadena($cadena); 

		}
		else {
			$cadena ="<p>¡Trasnsacción Fallida!<br/>
				 	  El pago no pudo ser completado";
	 					//linea para ir al view en el metodo mensaje del pago $this-con cadena($cadena);
		}
		return $cadena;
	}
        
}  
 
?>