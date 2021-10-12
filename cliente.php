<?php

require 'conexion.php';

if(!empty($_POST['nombre'])&& !empty($_POST['apellido'])&& !empty($_POST['departamento'])&& !empty($_POST['municipio'])&& !empty($_POST['direccion'])&& !empty($_POST['telefono'])
&& !empty($_POST['nombre2'])&& !empty($_POST['apellido2'])&& !empty($_POST['departamento2'])&& !empty($_POST['municipio2'])&& !empty($_POST['direccion2'])&& !empty($_POST['telefono2'])){

    $sql = "INSERT INTO cliente (nombre, apellido, departamento, municipio, direccion, telefono, nombre2, apellido2, departamento2, municipio2, direccion2, telefono2) 
    VALUES (:nombre, :apellido, :departamento, :municipio, :direccion, :telefono, :nombre2, :apellido2, :departamento2, :municipio2, :direccion2, :telefono2)";
    $client = $conn-> prepare($sql);
    $client->bindparam(':nombre', $_POST['nombre']);
    $client->bindparam(':apellido', $_POST['apellido']);
    $client->bindparam(':departamento', $_POST['departamento']);
    $client->bindparam(':municipio', $_POST['municipio']);
    $client->bindparam(':direccion', $_POST['direccion']);
    $client->bindparam(':telefono', $_POST['telefono']);

    $client->bindparam(':nombre2', $_POST['nombre2']);
    $client->bindparam(':apellido2', $_POST['apellido2']);
    $client->bindparam(':departamento2', $_POST['departamento2']);
    $client->bindparam(':municipio2', $_POST['municipio2']);
    $client->bindparam(':direccion2', $_POST['direccion2']);
    $client->bindparam(':telefono2', $_POST['telefono2']);


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
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">Datos del Remitente</h1>
                    <p class="lead">RapiTrans</p>
                    <hr class="my-2">
                    <p>Empresa se dedica al transporte de productos y mensajería de oficina a sus clientes</p>
                    <p class="lead">

                    </p>
                </div>

            </div>
            <form  method="POST">
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Nombres</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" color="white"
                                placeholder="Nombres" required>
                            <div class="valid-feedback">
                                Debe de llenar el campo!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Apellidos</label>
                            <input type="text" class="form-control" name="apellido" id="apellido"
                                placeholder="Apellidos" required>
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
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Departamento</label>
                            <select type="text" class="form-control" name="departamento" id="departamento"
                                placeholder="Departamento" required>
                                <option>Alta Verapaz</option>
                                <option>Baja Verapaz</option>
                                <option>Chimaltenago</option>
                                <option>Chiquimula</option>
                                <option>Guatemala</option>
                                <option>El Progreso</option>
                                <option>Escuintla</option>
                                <option>Huehuetenango</option>
                                <option>Izabal</option>
                                <option>Jalapa</option>
                                <option>Jutiapa</option>
                                <option>Petén</option>
                                <option>Quetzaltenango</option>
                                <option>Quiché</option>
                                <option>Retalhuleu</option>
                                <option>Sacatepequez</option>
                                <option>San Marcos</option>
                                <option>Santa Rosa</option>
                                <option>Sololá</option>
                                <option>Suchitepequez</option>
                                <option>Totonicapán</option>
                                <option>Zacapa</option>

                            </select>
                            <div class="invalid-feedback">
                                Debe de llenar el campo!
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="validationCustom04">Municipio</label>
                            <input type="text" class="form-control" name="municipio" id="municipio"
                                placeholder="Municipio" required>
                            <div class="invalid-feedback">
                                Debe de llenar el campo!
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="validationCustom05">Direccion</label>
                            <input type="text" class="form-control" name="direccion" id="direccion"
                                placeholder="Direccion" required>
                            <div class="invalid-feedback">
                                Debe de llenar el campo!
                            </div>
                        </div>
                    </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-3">
                <label for="validationCustom03">Telefono</label>
                <input type="tel" class="form-control" name="telefono" id="telefono"  maxlength="8" title="tel" required>
                <div class="invalid-feedback">
                    Debe de llenar el campo!
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="nav navbar-nav">
                </div>
            </nav>
            <h1 class="display-3">Datos del Destinatario</h1>
            <hr class="my-2">
        </div>
        
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Nombres</label>
                <input type="text" class="form-control" name="nombre2" id="nombre2" color="white"
                    placeholder="Nombres" required>
                <div class="valid-feedback">
                    Debe de llenar el campo!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Apellidos</label>
                <input type="text" class="form-control" name="apellido2" id="apellido2"
                    placeholder="Apellidos" required>
                <div class="valid-feedback">
                    Debe de llenar el campo!
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Departamento</label>
                    <select type="text" class="form-control" name="departamento2" id="departamento2"
                        placeholder="Departamento" required>
                        <option>Alta Verapaz</option>
                        <option>Baja Verapaz</option>
                        <option>Chimaltenago</option>
                        <option>Chiquimula</option>
                        <option>Guatemala</option>
                        <option>El Progreso</option>
                        <option>Escuintla</option>
                        <option>Huehuetenango</option>
                        <option>Izabal</option>
                        <option>Jalapa</option>
                        <option>Jutiapa</option>
                        <option>Petén</option>
                        <option>Quetzaltenango</option>
                        <option>Quiché</option>
                        <option>Retalhuleu</option>
                        <option>Sacatepequez</option>
                        <option>San Marcos</option>
                        <option>Santa Rosa</option>
                        <option>Sololá</option>
                        <option>Suchitepequez</option>
                        <option>Totonicapán</option>
                        <option>Zacapa</option>

                    </select>
                    <div class="invalid-feedback">
                        Debe de llenar el campo!
                    </div>
                </div>
                <div class="col-md-5 mb-3">
                    <label for="validationCustom04">Municipio</label>
                    <input type="text" class="form-control" name="municipio2" id="municipio2"
                        placeholder="Municipio" required>
                    <div class="invalid-feedback">
                        Debe de llenar el campo!
                    </div>
                </div>
                <div class="col-md-5 mb-3">
                    <label for="validationCustom05">Direccion</label>
                    <input type="text" class="form-control" name="direccion2" id="direccion2"
                        placeholder="Direccion" required>
                    <div class="invalid-feedback">
                        Debe de llenar el campo!
                    </div>
                </div>
            </div>
</div>
<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="validationCustom03">Telefono</label>
        <input type="tel" class="form-control" name="telefono2" id="telefono2"  maxlength="8" title="tel" required>
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