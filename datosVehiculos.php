<?php

$conn = mysqli_connect('localhost', 'root', '', 'bdatos');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css" />


</head>

<style type ="text/css">

table, th, td {
    border: 1px solid white;
    border-collapse: collapse;
}
th, td{

    padding: 15px

}

</style>

<body>

    RapiTrans

    <?php
require'templas.php';
?>

    <div class="container">
        <div class="row">

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">Bodegas</h1>
                    <p class="lead">Comercializadora JR</p>
                    <hr class="my-2">
                 
                    <p class="lead">

                    </p>
                </div>
            </div>
        </div>
    </div>

    <table>

        <tr>

            <th>id</th>
            <th>Numero de placa</th>
            <th>Tipo de Vehiculo</th>
            <th>Marca de Vehiculo</th>
            <th>Km por Galon</th>
            <th>Nombres de Conductor</th>
            <th>Apellidos de Conductor</th>
            <th>Telefono del conductor</th>
            
        </tr>
        <?php

        $sql = "SELECT * from vehicle";
        $resultado = mysqli_query($conn, $sql);

        while($mostrar=mysqli_fetch_array($resultado)){     

        ?>
        <tr>
        <td><?php echo $mostrar['id'] ?></td>
        <td><?php echo $mostrar['placa'] ?></td>
        <td><?php echo $mostrar['vehiculo'] ?></td>
        <td><?php echo $mostrar['marca'] ?></td>
        <td><?php echo $mostrar['galon'] ?></td>
        <td><?php echo $mostrar['nombre'] ?></td>
        <td><?php echo $mostrar['apellido'] ?></td>
        <td><?php echo $mostrar['telefono'] ?></td>
        
        
        </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>