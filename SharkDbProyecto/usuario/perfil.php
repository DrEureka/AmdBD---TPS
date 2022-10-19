<?php include('template/header.php') ?>
<div class=" col-md-12 usuario-container">
    <div class="jumbotron usuario-transparencia row">        
        <h1 class="text-white col-12 mb-5">Mi Perfil</h1>            
        <div class="col-6">
            <h5><ion-icon name="person-outline"></ion-icon> Nombre y Apellido</h5>
            <p></p>
            <p><ion-icon name="mail-outline"></ion-icon> Email</p>
            <p><ion-icon name="accessibility-outline"></ion-icon> Apto fisico</p>
        </div>
        <div class="col-6">
            <p><ion-icon name="barbell-outline"></ion-icon> Peso</p>
            <p></ion-icon><ion-icon name="man-outline"></ion-icon> Altura</p>
            <p><ion-icon name="card-outline"></ion-icon> DNI</p>
        </div>
    </div>
</div>
<?php include('template/footer.php') ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {                  
        let body = document.getElementById('usuarioBody');
        body.classList.remove("usuario-fondo");
        body.classList.add("usuario-perfil");
    }, false);
</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>