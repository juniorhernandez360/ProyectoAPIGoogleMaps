<?php  
if ($_POST) {
    header('location:clientes2.php');
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


            <form method="POST">

                <form class="needs-validation" novalidate>


                    <div class="form-row">
                        <div class="col-md-4 mb-3">


                            <label for="validationCustom01">Nombres</label>
                            <input type="text" class="form-control" name="txtnombre" id="textnombre" color="white"
                                placeholder="Nombres" required>
                            <div class="valid-feedback">
                                Debe de llenar el campo!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Apellidos</label>
                            <input type="text" class="form-control" name="txtapellido" id="textapellido"
                                placeholder="Apellidos" required>
                            <div class="valid-feedback">
                                Debe de llenar el campo!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustomEmail">Correo electronico</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                </div>
                                <input type="text" class="form-control" name="txtCorreo" id="txtCorreo"
                                    placeholder=" Email " aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Debe de llenar el campo!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Departamento</label>
                            <select type="text" class="form-control" name="txtdepartamento" id="txtdepartamento"
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
                            <input type="text" class="form-control" name="txtmunicipio" id="txtmunicipio"
                                placeholder="Municipio" required>
                            <div class="invalid-feedback">
                                Debe de llenar el campo!
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="validationCustom05">Direccion</label>
                            <input type="text" class="form-control" name="txtdireccion" id=name="txtdireccion"
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
                <input type="tel" class="form-control" name="tel" maxlength="8" title="tel" required>
                <div class="invalid-feedback">
                    Debe de llenar el campo!
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    <a href="#">Si todos los datos son los correctos dele siguiente</a>
                </label>
                <div class="invalid-feedback">

                </div>
            </div>
        </div>

        <button class="btn btn-primary" name="aceptar" id=name="aceptar" type="submit">Siguiente</button>
        </form>



        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        </script>




    </div>
    </div>
</body>


</html>