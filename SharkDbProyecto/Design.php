<?php include("template/header.php");?>
<?php include("administrador/config/bd.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM design");
$sentenciaSQL->execute();
$listaDesign = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<?php foreach($listaDesign as $design) { ?>

<div class="col-md-3">
    <div class="card">
        <img class="card-img-top" src="./img/<?php echo $design['imagen'];?>" alt="">
        <div class="card-body">
            <h4 class="card-title"><?php echo $design['nombre'];?></h4>
        </div>
    </div>   
</div>

<?php }?>

<?php include("template/footer.php");?>