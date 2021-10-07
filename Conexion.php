<?php

$con = mysqli_connect("localhost", "root", "", "bdatos");

if (!$con) {
    die("Conexion fallida: " . mysqli_connect_error());
}
mysqli_close($con);


?>