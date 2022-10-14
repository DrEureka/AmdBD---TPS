<!doctype html>
<?php
session_start();
if($_POST){
    if(($_POST['usuario']=="user")&&($_POST['contrasenia']=='user')){
        $_SESSION['usuario']="ok";
        $_SESSION['nombreUsuario']="user";
        header('Location:Inicio.php');
    }else{
        $mensaje='Upps! Intenta Usuario y Contraseña con "user"';
    }
}
?>

<html lang="en">
  <head>
    <title>Usuario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/usuario.css">
  </head>

  <body class="usuario-fondo" id="usuarioBody">     
    <div class="usuario-container d-flex justify-content-center">
        <div class="card usuario-transparencia">
            <div class="card-header">
                <strong><h3>Iniciar Sesion</h3></strong>
            </div>

            <div class="card-body">
                <form method="POST">
                    <div class = "form-group">
                        <label><strong>Usuario</strong></label>
                        <input type="text" class="form-control" name="usuario" placeholder="Ingresa tu usuario (user)">                        
                    </div>
                    <div class="form-group">
                        <label><strong>Contraseña</strong></label>
                        <input type="password" class="form-control" name="contrasenia" placeholder="Ingresa tu contraseña (user)">
                    </div>        
                    <?php if(isset($mensaje)) { ?>
                        <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje; ?>
                        </div>
                    <?php } ?>
                    <button type="submit" class="btn btn-outline-success">Iniciar Sesion</button>
                    <a class="btn btn-outline-primary ml-5" href="/" role="button">Volver</a>
                </form>
            </div>
        </div>
    </div>

  </body>
</html>