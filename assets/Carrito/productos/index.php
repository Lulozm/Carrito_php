<?php
	require_once 'controllers/producto.php';
	require_once 'views/producto.php';
	
	$objControl=new ProdCont(); 
	$objVista=new ProdView();

	

	if(!isset($_POST['accion'])){
		
		$objControl->index();
		}

	
	if(isset($_POST['accion']) && $_POST['accion']=='Registrar'){
		$resultado=$objControl->insertar();
        if($resultado ==1){
		  $objVista->mensaje();
        }

	}

  



?>
