<?php
//Datos del cliente
include 'Conexion.php';
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
//$correo = $_POST["correo"];
$departamento = $_POST["departamento"];
$municipio = $_POST["municipio"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];

//Datos del Remitente
$nombre2 = $_POST["nombre2"];
$apellido2 = $_POST["apellido2"];
$departamento2 = $_POST["departamento2"];
$municipio2 = $_POST["municipio2"];
$direccion2 = $_POST["direccion2"];
$telefono2 = $_POST["telefono2"];

//consultar para insertar
$insertar = "INSERT INTO cliente (nombre, apellido, departamento, municipio, direccion, telefono,
nombre2, apellido2, departamento2, municipio2, direccion2, telefono2)
VALUES ('$nombre', '$apellido', '$departamento', '$municipio', '$direccion', '$telefono',
'$nombre2', '$apellido2', '$departamento2', '$municipio2', '$direccion2', '$telefono2')";

$resultado = mysqli_query($con, $insertar);
if(!$resultado) {

echo 'Error al registrarse';
}else {

    echo 'Registro Exitoso';
}
mysqli_close($con);

?>