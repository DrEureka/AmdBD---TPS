<?php
session_start();
if(!isset($_SESSION['usuario'])){

  header("Location:../Index.php");
   
}
else{
  if($_SESSION['usuario']=="ok"){
    $nombreUsuario=$_SESSION["nombreUsuario"];
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/usuario.css">
</head>

<body class="usuario-fondo" id="usuarioBody">
  <?php $url = "http://" . $_SERVER['HTTP_HOST']. "" ?>

  <nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
      <a class="nav-item nav-link active" href="#">Administrador <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/Inicio.php">Inicio</a>
      <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/AdmDesign.php">Administrador de diseños</a>
      <a class="nav-item nav-link" href="<?php echo $url; ?>">Ver sitio</a>
      <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/loginOut.php">Cerrar sesion</a>
    </div>
  </nav>

  <div class="container">
    <br>
    <div class="row">