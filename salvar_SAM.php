<?php

include("db.php");

if (isset($_POST['Guardar_Oficio'])){   //Si existe comunicación desde un formulario llamado Guardar_Oficio via POST
    $oficio = $_POST['oficio'];         //reciba los valores
    $inscripcion = $_POST['inscripcion'];
    $tenor = $_POST['tenor'];
                                        //construya la consulta a la BD
    $query = "INSERT INTO sam (IdOficio, IdInscripcion, Tenor)
     VALUES ('$oficio', '$inscripcion', '$tenor')";

    $resultado = mysqli_query($conn, $query);   //ejecuta la consulta 

    $_SESSION['message'] = 'Oficio guardado exitosamente.'; //guarda mensajes en la sesión
    $_SESSION['message_type'] = 'success';

    header("location: index.php");      //vuelve a ejecutar la página index

}

?>