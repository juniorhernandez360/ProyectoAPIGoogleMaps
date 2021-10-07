<?php
include("conexion.php");
$con=conectar();

echo"Conectado.....";

$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$correo= $_POST["correo"];
$departamento= $_POST["departamento"];
$municipio= $_POST["municipio"];
$direccion= $_POST["direccion"];
$telefono= $_POST["telefono"];

$insertar= "INSERT INTO cliente (nombre, apellido, correo, departamento, municipio, direccion, telefono)
VALUES ('$nombre', '$apellido', '$correo', '$departamento', '$municipio', '$direccion', '$telefono')";

$resultado = mysqli_query($con, $insertar);
if (!$resultado){
    echo 'Error al registrarse';
}else{
    echo 'Se registro exitosamente';
}

mysqli_close($con);


?>