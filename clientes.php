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

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="menu.php" role="button">Inicio</a>
            <a class="nav-item nav-link active" href="cliente.php" role="button">Pedidos</a>
            <a class="nav-item nav-link active" href="clientes.php" role="button">Clientes</a>            
            <a class="nav-item nav-link active" href="rutas.html" role="button">Rutas</a>
            <a class="nav-item nav-link active" href="estadisticas.php" role="button">Estadisticas</a>
            <a class="nav-item nav-link active" href="estadoPedido.php" role="button">Estado de Pedido</a>
        </div>

    </nav>

    <div class="container">
        <div class="row">

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">Clientes</h1>
                    <p class="lead">RapiTrans</p>
                    <hr class="my-2">
                    <p>Empresa se dedica al transporte de productos y mensajería de oficina a sus clientes</p>
                    <p class="lead">

                    </p>
                </div>
            </div>
        </div>
    </div>

    <table>

        <tr>

            <th>id</th>
            <th>Nombres Remitente</th>
            <th>Apellidos Remitente</th>
            <th>Latitud Remitente</th>
            <th>Longitud Remitente</th>
            <th>Telefono Remitente</th>
            <th>Nombres Destinatario</th>
            <th>Apellidos Destinatario</th>
            <th>Latitud Destinatario</th>
            <th>Longitud Destinatario</th>
            <th>Telefono Destinatario</th>
        </tr>
        <?php

        $sql = "SELECT * from cliente";
        $resultado = mysqli_query($conn, $sql);

        while($mostrar=mysqli_fetch_array($resultado)){     

        ?>
        <tr>
        <td><?php echo $mostrar['id'] ?></td>
        <td><?php echo $mostrar['nombre'] ?></td>
        <td><?php echo $mostrar['apellido'] ?></td>
        <td><?php echo $mostrar['latitud'] ?></td>
        <td><?php echo $mostrar['longitud'] ?></td>
        <td><?php echo $mostrar['telefono'] ?></td>
        <td><?php echo $mostrar['nombre2'] ?></td>
        <td><?php echo $mostrar['apellido2'] ?></td>
        <td><?php echo $mostrar['latitud2'] ?></td>
        <td><?php echo $mostrar['longitud2'] ?></td>
        <td><?php echo $mostrar['telefono2'] ?></td>
        
        </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>