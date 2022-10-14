<?php include('template/header.php') ?>
<div class="col-md-12">

    <div class="jumbotron">
        <h1 class="display-3">Usuario del sitio</h1>
        <p class="lead">Hola usuario: <?php echo $nombreUsuario ?></p>
        <hr class="my-2">
        <p>Sistema CRUD - SharkDb</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="perfil.php" role="button">Perfil</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="rutinas.php" role="button">Rutinas</a>
        </p>
    </div>

</div>

<?php include('template/footer.php') ?>