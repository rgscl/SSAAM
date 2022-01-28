<?php

session_start();


$conn = mysqli_connect(
    'localhost',    //dirección de la bd
    'root',         //usuario
    '',             //pw
    'ssaam_bd'      //nombre de la bd
);
/*
if(isset($conn)){
    echo "ssaam_bd conectada";
}
*/
?>
