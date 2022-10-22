<?php include('../template/header.php') ?>

<?php

$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtImagen = (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen']['name'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

include('../config/bd.php');

switch ($accion) {
    case "Agregar":
        //FALTA AGREGAR PARAMETRO PARA INGRESAR LA URL A LA BASE DE DATOS
        $sentenciaSQL = $conexion->prepare("INSERT INTO design (nombre, imagen) VALUES (:nombre,:imagen);");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':textURL', $txtURL);
        $fecha = new DateTime();
        $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";

        $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

        if ($tmpImagen != "") {
            move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);
        }

        $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
        $sentenciaSQL->execute();

        header("Location:AdmDesign.php");
        //   echo "Agregar";
        break;
    case "Modificar":
        //FALTA AGREGAR PARAMETRO PARA INGRESAR LA URL A LA BASE DE DATOS
        $sentenciaSQL = $conexion->prepare("UPDATE design SET nombre=:nombre WHERE id=:id");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->bindParam(':textURL', $txtURL);
        $sentenciaSQL->execute();

        if ($txtImagen != "") {

            $fecha = new DateTime();
            $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";
            $tmpImagen = $_FILES["txtImagen"]["tmp_name"];
            move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);

            $sentenciaSQL = $conexion->prepare("SELECT imagen FROM design WHERE id=:id");
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();
            $editarId = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

            if (isset($editarId["imagen"]) && ($editarId["imagen"] != "imagen.jpg")) {
                if (file_exists("../../img/" . $editarId["imagen"])) {
                    unlink("../../img/" . $editarId["imagen"]);
                }
            }


            $sentenciaSQL = $conexion->prepare("UPDATE design SET imagen=:imagen WHERE id=:id");
            $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();
        }
        header("Location:AdmDesign.php");
        // echo "Modificar";
        break;
    case "Cancelar":
        header("Location:AdmDesign.php");
        //echo "Cancelar";
        break;

    case "Seleccionar":
        $sentenciaSQL = $conexion->prepare("SELECT * FROM design WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $editarId = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtNombre = $editarId['nombre'];
        $txtImagen = $editarId['imagen'];
        // echo "Seleccionar";
        break;

    case "Borrar":

        $sentenciaSQL = $conexion->prepare("SELECT imagen FROM design WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $editarId = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if (isset($editarId["imagen"]) && ($editarId["imagen"] != "imagen.jpg")) {
            if (file_exists("../../img/" . $editarId["imagen"])) {
                unlink("../../img/" . $editarId["imagen"]);
            }
        }

        // echo "Borrar";
        $sentenciaSQL = $conexion->prepare("DELETE FROM design WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        header("Location:AdmDesign.php");
        break;
}
//Modificar tabla de seleccion
$sentenciaSQL = $conexion->prepare("SELECT * FROM design");
$sentenciaSQL->execute();
$listaDesign = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="col-md-5">


    <div class="card">
        <div class="card-header">
            Carga de entrenamientos
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtID">ID</label>
                    <input readonly required type="text" class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID">
                </div>

                <div class="form-group">
                    <label for="txtNombre">Rutina:</label>
                    <input type="text" required class="form-control" value="<?php echo $txtNombre; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre de la rutina">
                </div>

                <div class="form-group">
                    <label for="txtImagen">Imagen:</label>
                    <br>
                    <?php
                    if ($txtImagen != "") { ?>

                        <img class="img-thumbnail rounded" width="" src="../../img/<?php echo $txtImagen; ?>" width="50" alt="">
                    <?php } ?>

                    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Imagen del entrenamiento">
                </div>

                <div class="form-group">
                    <label for="txtNombre">URL:</label>
                    <input type="text" required class="form-control" value="<?php echo $txtURL; ?>" name="txtURL" id="txtURL" placeholder="URL VIDEO">
                </div>

                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" <?php echo ($accion == "Seleccionar") ? "disabled" : ""; ?> value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> value="Cancelar" class="btn btn-info">Cancelar</button>
                </div>


            </form>
        </div>

    </div>



</div>
<div class="col-md-7">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Rutina</th>
                <th>Imagen</th>
                <th>URL</th>

                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaDesign as $design) { ?>
                <tr>
                    <td><?php echo $design['id']; ?></td>
                    <td><?php echo $design['nombre']; ?></td>
                    <td>

                        <img src="../../img/<?php echo $design['imagen']; ?>" width="50" alt="">
                    </td>
                    //Modificar valor de URL
                    <td><?php echo $design['URL']; ?></td>

                    <td>

                        <form method="post">
                            <input type="hidden" name="txtID" id="txtID" value="<?php echo $design['id'] ?>" />
                            <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />
                            <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('../template/footer.php') ?>