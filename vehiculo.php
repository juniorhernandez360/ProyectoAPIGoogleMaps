<?php

require 'conexion.php';

if(!empty($_POST['placa'])&& !empty($_POST['vehiculo'])&& !empty($_POST['marca'])&& !empty($_POST['galon'])&& !empty($_POST['nombre'])
&& !empty($_POST['apellido'])&& !empty($_POST['telefono'])){

    $sql = "INSERT INTO vehicle (placa, vehiculo, marca, galon, nombre, apellido, telefono) 
    VALUES (:placa, :vehiculo, :marca, :galon, :nombre, :apellido, :telefono)";
    $client = $conn-> prepare($sql);
    $client->bindparam(':placa', $_POST['placa']);
    $client->bindparam(':vehiculo', $_POST['vehiculo']);
    $client->bindparam(':marca', $_POST['marca']);
    $client->bindparam(':galon', $_POST['galon']);
    
    $client->bindparam(':nombre', $_POST['nombre']);
    $client->bindparam(':apellido', $_POST['apellido']);
    $client->bindparam(':telefono', $_POST['telefono']);


    if($client->execute()){

        $message = 'Nueva entrega';
    }else{
        $message = 'no se a creado la entrega';
    }

}


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

<body>
    RapiTrans

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="nav navbar-nav">

            <a class="nav-item nav-link active" href="menu.php" role="button">Inicio</a>
            <a class="nav-item nav-link active" href="cliente.php" role="button">Pedidos</a>
            <a class="nav-item nav-link active" href="vehiculo.php" role="button">Vehiculos</a>
            <a class="nav-item nav-link active" href="clientes.php" role="button">Clientes</a>
            <a class="nav-item nav-link active" href="rutas.html" role="button">Rutas</a>
            <a class="nav-item nav-link active" href="estadisticas.php" role="button">Estadisticas</a>
            <a class="nav-item nav-link active" href="estadoPedido.php" role="button">Estado de Pedido</a>

        </div>

    </nav>

    <a class="nav-item nav-link active" href="datosVehiculos.php" role="button">Datos de los Vehiculos</a>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="nav navbar-nav">
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">Datos del Vehiculo</h1>
                    <p class="lead">RapiTrans</p>
                    <hr class="my-2">
                    <p>Empresa se dedica al transporte de productos y mensajería de oficina a sus clientes</p>
                    <p class="lead">

                    </p>
                </div>

            </div>
            <form method="POST">
                <form class="needs-validation" novalidate>

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">No. Placa</label>
                        <input type="text" class="form-control" name="placa" id="placa" placeholder="placa" required>
                        <div class="valid-feedback">
                            Debe de llenar el campo!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">

                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                        </div>
                    </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom03">Tipo de Vehiculo</label>
                <select type="text" class="form-control" name="vehiculo" id="vehiculo" placeholder="vehiculo" required>

                    <option>Selecione una Opcion</option>
                    <option>Panel</option>
                    <option>Camion</option>
                    <option>Motocicleta</option>



                </select>

                <div class="invalid-feedback">
                    Debe de llenar el campo!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom04">Marca de Vehiculo</label>
                <select type="text" class="form-control" name="marca" id="marca" placeholder="Marca de Vehiculo"
                    required>

                    <option>Selecione una Opcion</option>
                    <option>suzuki</option>
                    <option>Yamaha</option>


                </select>
                <div class="invalid-feedback">
                    Debe de llenar el campo!
                </div>
            </div>

        </div>

        <div class="form-row">
            <div class="col-md-3 mb-3">
                <label for="validationCustom03">Km por Galon</label>
                <select type="tel" class="form-control" name="galon" id="galon" maxlength="2"
                    placeholder="Km por galon de Gasolina" required>

                    <option>Selecione una Opcion</option>
                    <option>20</option>
                    <option>25</option>
                    <option>30</option>
                    <option>35</option>
                    <option>40</option>

                </select>
                <div class="invalid-feedback">
                    Debe de llenar el campo!
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="nav navbar-nav">
                </div>
            </nav>
            <h1 class="display-3">Datos del Conductor</h1>
            <hr class="my-2">
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Nombres</label>
                <input type="text" class="form-control" name="nombre" id="nombre" color="white" placeholder="Nombres"
                    required>
                <div class="valid-feedback">
                    Debe de llenar el campo!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Apellidos</label>
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellidos"
                    required>
                <div class="valid-feedback">
                    Debe de llenar el campo!
                </div>
            </div>
           

        </div>
        <div class="form-row">
            <div class="col-md-3 mb-3">
                <label for="validationCustom03">Telefono</label>
                <input type="tel" class="form-control" name="telefono" id="telefono" maxlength="8" title="tel"
                    placeholder="Telefono" required>
                <div class="invalid-feedback">
                    Debe de llenar el campo!
                </div>
            </div>
            <button class="btn btn-primary" name="aceptar" id=name="aceptar" type="submit">Aceptar</button>
            <p></p>
            <p></p>
            <p></p>
            </form>

        </div>
    </div>
    </div>

    </div>
    </div>
</body>

</html>