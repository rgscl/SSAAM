<?php include ("db.php"); ?>

<?php include ("includes/header.php"); ?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4">

            <?php if(isset($_SESSION['message'])) {?>
                <!--botón de alerta desde bootstrap-->
                <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
            <?php session_unset(); } ?> <!--esto borra TODAS las variables de la sesión, usada para no mostrar el mensaje de grabación exitosa-->

            <div class="card card-body">
                <form action="salvar_SAM.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="oficio" class="form-control"
                        placeholder="Id.Oficio" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name="inscripcion" class="form-control"
                        placeholder="Inscripción: CCCLLLAAAAVVVVIIIII" autofocus>
                    </div>

                    <div class="form-group">
                        <textarea name="tenor" maxlength="255" rows="2" class="form-control"
                         placeholder="Ingrese el tenor del oficio" required></textarea>
                    </div>

                    <input type="submit" class="btn btn-success btn-block" 
                     name="Guardar_Oficio" value="Guardar Oficio-Inscripción">
                </form>
            </div>

        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Oficio</th>
                        <th>Inscripción</th>
                        <th>Ingreso</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM sam";
                        $result_sams = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_sams)) { ?>
                            <tr>
                                <td><?php echo $row['IdOficio'] ?></td>
                                <td><?php echo $row['IdInscripcion'] ?></td>
                                <td><?php echo $row['Ingreso'] ?></td>
                                <td>
                                    <a href="editar_SAM.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="borrar_SAM.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                        <i class= "fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>

                    <?php } ?>


                </tbody>    
        </div>
    </div>

</div>

<?php include ("includes/footer.php"); ?>



