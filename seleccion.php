<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrador de Muñelucos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
   <link href="public_html/css/bootstrap.min.css" rel="stylesheet" media="screen">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="navbar-header">
      <a class="navbar-brand" href="#">Muñelucos</a>
    </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

    <li class="nav-item">
        <a class="nav-link disabled" href="#">INICIO</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CLIENTE
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?inicio=6">BORRAR</a>
          <a class="dropdown-item" href="index.php?inicio=8">ACTUALIZAR</a>
          
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          REGISTRO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?inicio=2">INSERTAR</a>
          <a class="dropdown-item" href="index.php?inicio=7">BORRAR</a>
          <div class="dropdown-divider"></div>
          <!--<a class="dropdown-item" href="#">ACTUALIZAR</a>-->
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          REPORTES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?inicio=6">CLIENTES</a>
          <!--<a class="dropdown-item" href="#">CUENTAS</a>-->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href='index.php?inicio=5'>REGISTRO</a>
        </div>
      </li>

      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a class="dropdown-item" href="#"><span class="glyphicon glyphicon-user"></span><?php session_start(); echo $_SESSION['email']?></a></li>
      <li><a class="dropdown-item" href='../index.php?inicio=4'><span class="glyphicon glyphicon-log-in"></span>Log-out</a></li>
    </ul>
    
  </div>
</nav>


<section>
<div class="container">
 <h1>SELECCIONE EL CLIENTE PARA ACTUALIZAR</h1>
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
 <form action="" method="post">
     <label>Nombre del Cliente</label>
        <select name="cliente">
        <!--SELECT-->
          <option value="{IDC}">{NOMBREC}</option>
        <!--SELECT-->
     </select>  
     <input type="submit" value="buscar" name="accion"/>
        </form>



    </div>
</div>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>





</html>
  


