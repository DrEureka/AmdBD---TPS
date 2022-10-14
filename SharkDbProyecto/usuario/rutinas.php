<?php include('template/header.php') ?>
<div class="text-center col-md-12 usuario-container">
    <div class="jumbotron usuario-transparencia">        
        <h1>Mis Rutinas</h1>            
        <div class="mt-5">
            <p>Las mejores rutinas para ti!!</p>
            <p class="mt-5">
                <a class="btn btn-outline-primary btn-lg" href="inicio.php" role="button">Volver</a>                
            </p>
        </div>
    </div>
</div>
<?php include('template/footer.php') ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {                  
        let body = document.getElementById('usuarioBody');
        body.classList.remove("usuario-fondo");
        body.classList.add("usuario-rutina");
    }, false);
</script>