<?php
include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM sam WHERE id = $id";
    $resultado = mysqli_query($conn, $query);
    if (mysqli_num_rows($resultado)==1){
        $fila = mysqli_fetch_array($resultado);
        $oficio = $fila['IdOficio'];
        $inscripcion = $fila['IdInscripcion'];
        $tenor = $fila['Tenor'];
    }
}

if(isset($_POST['Guardar_Actualizacion'])){
    $id = $_GET['id'];
    $oficio = $_POST['oficio'];
    $inscripcion = $_POST['inscripcion'];
    $tenor = $_POST['tenor'];

    $query = "UPDATE sam set IdOficio='$oficio', IdInscripcion='$inscripcion', Tenor='$tenor' WHERE id = $id";
    $resultado = mysqli_query($conn, $query);

    $_SESSION['message'] = 'Actualizado exitosamente.';
    $_SESSION['message_type'] = 'warning';

    header("location: index.php");
}
?>

<?php include("includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editar_SAM.php?id=<?php echo $_GET['id']; ?>" method='POST'>
                    <div class="form-group">
                        <input type="text" name="oficio" value="<?php echo $oficio; ?>"
                        class="form-control" placeholder="Modifique oficio">
                    </div>
                    <div class="form-group">
                        <input type="text" name="inscripcion" value="<?php echo $inscripcion; ?>"
                        class="form-control" placeholder="Modifique inscripcion">
                    </div>
                    <div class="form-group">
                        <textarea name="tenor" maxlength="255" rows="2" class="form-control"
                         placeholder="Modifique el tenor del oficio" required><?php echo $tenor; ?></textarea>
                    </div>
                    <button class="btn btn-success btn-block" name="Guardar_Actualizacion">
                        Guardar Actualización
                    </button>

                </form>
            </div>

        </div>

    </div>
</div>

<?php include("includes/footer.php"); ?>