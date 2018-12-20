<?php

    session_start();
    require_once'assets/log/registros/views/regview.php';
    require_once'assets/log/registros/controllers/regcont.php';
    require_once'assets/log/clientes/controllers/cliencont.php';
    require_once'assets/log/clientes/views/clienview.php';
    require_once'assets/log/clientes/models/clienmodel.php';
    require_once 'assets/Carrito/productos/controllers/producto.php';
    require_once 'assets/Carrito/carritos/controllers/carrito.php';
    require_once 'assets/Carrito/carritos/views/carrito.php';
    require_once 'assets/Carrito/pagos/controllers/pago.php';
    require_once 'assets/Carrito/pagos/views/pago.php';

    $ObjRegistro = new RegView();
    $ObjRegCont = new RegCont();
    $ObjCliente= new ClienView();
    $ObjClienCont = new ClienCont();
    $ObjClienModel = new ClienModel();
    $objProdCont = new ProdCont();
   $objCartCont = new CartCont();
   $objCartView = new CartView();
   $objPagoCont = new PagoCont();
   $objPagoView = new PagoView();

    /*if(!isset($_GET['inicio'])){
        $ObjRegistro->inicio();
    
    }*/
    if(!isset($_GET['accion'])){
    $_GET['accion']='galeria';
}



 if(isset($_GET['inicio'])){
switch($_GET['inicio']){

    case 1: 
     $ObjRegistro->index();
      break;

    case 2:
      $ObjRegistro->registro();
      break;

    case 3:
       $ObjCliente->cliente();
      break;

    case 4:
       $ObjRegCont->cerrarSesion();
       break;

    case 5:
        $ObjRegCont->lista();
        break;

    case 6:
         $ObjClienCont->lista();
         break;

    case 7:
       $id=$_GET['id'];
        $ObjClienCont->borrar($id);
        break;
     
     case 8:
     $ObjClienCont->seleccion();
  break;
}





    if(isset($_POST['accion'])){
        
        switch($_POST['accion']){
                
                case'registrarse':
                    $ObjRegCont->index();
                break;
                case 'Almacenar Cliente':
                $ObjClienCont->index();
                
                break;

                case 'Login':
                $ObjRegCont->sesion();
                break;

                case 'buscar':
                $ObjCliente->updatec($_POST['cliente']);
                    break;

                case 'actualizar':
                    $ObjClienCont->actualizar();
                    break;
               
                default: echo "Elige una opcion valida";
                break;

        }

        
    }}


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

