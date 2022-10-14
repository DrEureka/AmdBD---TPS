<!doctype html>
<?php
session_start();
if($_POST){
    if(($_POST['usuario']=="user")&&($_POST['contrasenia']=='user')){
        $_SESSION['usuario']="ok";
        $_SESSION['nombreUsuario']="user";
        header('Location:Inicio.php');
    }else{
        $mensaje="Error: el usuario es user y pass user";
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
    <link rel="stylesheet" href="../css/usuario.css">
  </head>

  <body class="usuario-login-fondo"> 
    <span class="clearfix"></span>
    <div class="usuario-login-container d-flex justify-content-center">
        <div class="card col-3">
            <div class="card-header">
                Iniciar Sesion
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
  
  <!--
  <div class="container">
      <div class="row">
          <div class="col-md-4">
              
          </div>
          <div class="col-md-4">
          <br><br><br><br>
          <div class="card">
              <div class="card-header">
                Login (Usuario=user, Contraseña user)
              </div>
              <div class="card-body">
              <?php //if(isset($mensaje)){?>
<div class="alert alert-danger" role="alert">
   <?php //echo $mensaje; ?>
</div>
   <?php  //}?>
                  <form method="POST">
                  <div class = "form-group">
                  <label>Usuario:</label>
                  <input type="text" class="form-control" name="usuario" placeholder="Ingresa tu usuario">
                  <small id="usuarioHelp" class="form-text text-muted">No compartir usuario ni contraseña.</small>
                  </div>

                  <div class="form-group">
                  <label>Contraseña:</label>
                  <input type="password" class="form-control" name="contrasenia" placeholder="Ingresa tu contraseña">
                  </div>

            
                  <button type="submit" class="btn btn-primary">Ingresar</button>
                  </form>
                  
                  
              </div>
              
          </div>   

          </div>
          
      </div>
  </div>
   
 