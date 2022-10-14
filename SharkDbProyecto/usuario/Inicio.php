<?php include('template/header.php') ?>
<div class="text-center col-md-12 usuario-container">
    <div class="jumbotron usuario-transparencia">        
        <h1>Bienvenido <?php echo $nombreUsuario ?></h1>            
        <div class="mt-5">
            <p>Comienza con tus entrenamientos!!</p>
            <p class="mt-5">
                <a class="btn btn-outline-primary btn-lg" href="perfil.php" role="button">Mi Perfil</a>            
                <a class="btn btn-outline-primary btn-lg ml-5" href="rutinas.php" role="button">Mis Rutinas</a>                
            </p>
        </div>
    </div>
</div>
<?php include('template/footer.php') ?>