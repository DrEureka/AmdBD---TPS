<?php include('template/header.php') ?>
<!--
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
-->
    <div class="col-md-4">
        <div class="card usuario-transparencia" style="width: 18rem;">
        <iframe width="285" height="315" src="https://www.youtube.com/embed/xYLfVvC8dD8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
                <h5 class="card-title"><ion-icon name="barbell-outline"></ion-icon> Nombre del ejercicio</h5>
                <p class="card-text"><ion-icon name="walk-outline"></ion-icon> Fecha de inicio: 18-10-22.</p>
                <p class="card-text"><ion-icon name="time-outline"></ion-icon> Duracion: 3 semanas.</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card usuario-transparencia" style="width: 18rem;">
        <iframe width="285" height="315" src="https://www.youtube.com/embed/G41I95bBaHM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
                <h5 class="card-title"><ion-icon name="barbell-outline"></ion-icon> Nombre del ejercicio</h5>
                <p class="card-text"><ion-icon name="walk-outline"></ion-icon> Fecha de inicio: 18-10-22.</p>
                <p class="card-text"><ion-icon name="time-outline"></ion-icon> Duracion: 3 semanas.</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card usuario-transparencia" style="width: 18rem;">
        <iframe width="285" height="315" src="https://www.youtube.com/embed/TYWEHD11bnM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
                <h5 class="card-title"><ion-icon name="barbell-outline"></ion-icon> Nombre del ejercicio</h5>
                <p class="card-text"><ion-icon name="walk-outline"></ion-icon> Fecha de inicio: 18-10-22.</p>
                <p class="card-text"><ion-icon name="time-outline"></ion-icon> Duracion: 3 semanas.</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>
    </div>
<?php include('template/footer.php') ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let body = document.getElementById('usuarioBody');
        body.classList.remove("usuario-fondo");
        body.classList.add("usuario-rutina");
    }, false);
</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>