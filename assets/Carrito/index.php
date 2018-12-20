<?php
session_start();

require_once 'productos/controllers/producto.php';
require_once 'carritos/controllers/carrito.php';
require_once 'carritos/views/carrito.php';
require_once 'pagos/controllers/pago.php';
require_once 'pagos/views/pago.php';


$objProdCont = new ProdCont();
$objCartCont = new CartCont();
$objCartView = new CartView();
$objPagoCont = new PagoCont();
$objPagoView = new PagoView();

if(!isset($_GET['accion'])){
    $_GET['accion']='galeria';
}


if(isset($_GET['accion'])){
        
    switch($_GET['accion']){
            
        case 'galeria': $objProdCont->lista();
                        break;
            
         case 'agregar': if(isset($_GET['item'])){
                            $datos= $objCartCont->add($_GET['item']); 
                            $objCartView->carrito($datos);
                        }
                        break;
            
        case 'reducir': if(isset($_GET['item'])){
                            $datos=$objCartCont->reducir($_GET['item']);
                            $objCartView->carrito($datos);
                        }
                        break;
            
        case 'vaciar': $objCartCont->vaciar();
                       $objProdCont->lista();
                       break;
            
        case 'ticket': $objPagoCont->index();
                       $objPagoView->index();
                       break;
            
        default: "Opción inválida";
                  break;
    }
}


if (isset($_POST['tip'])){
	switch($_POST['tipo']){
		case '1':
		$cadena=$objPagoCont->cash();
		$objPagoView->msgPay($cadena);
		break;
		
		case'2':
	$cadena=$objPagoCont->cardinfo();
	$objPagoView->cardinfo($cadena);
	break;
}}
	
if (isset($_POST['tarjeta'])){ 
	$cadena=$objPagoCont->credit();
	$objPagoView->msgPay($cadena);
	

		
		
	//ultimo if cardinfo
	
	
	









}
?>