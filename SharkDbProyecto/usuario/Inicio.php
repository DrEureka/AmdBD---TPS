<?php include('template/header.php') ?>
<div class="col-md-12">
    <div class="jumbotron shadow">        
        <h1>Bienvenido <?php echo $nombreUsuario ?></h1>
        <hr>
        <div class="row">
            <div>
                <a class="btn btn-primary btn-lg" href="perfil.php" role="button">Mi Perfil</a>
            </div>
            <div>
                <a class="btn btn-primary btn-lg ml-5" href="rutinas.php" role="button">Mis Rutinas</a>                
            </div>
        </div>
    </div>
</div>
<?php include('template/footer.php') ?>