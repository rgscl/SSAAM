<?php

include ("db.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = "DELETE FROM sam WHERE id = $id";
    $resultado=mysqli_query($conn, $query);

    $_SESSION['message'] = "Oficio borrado exitosamente";
    $_SESSION['message_type'] = 'danger';

    header ("location: index.php");
}

?>