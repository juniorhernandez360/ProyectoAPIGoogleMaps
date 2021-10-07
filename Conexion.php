<?php
function conectar(){
$servername = "localhost";
$database = "bdatos";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Conexion fallida: " . mysqli_connect_error());
}
mysqli_close($con);

}
?>