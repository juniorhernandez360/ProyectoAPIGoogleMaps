<?php

session_start();

require 'conexion.php';

if(!empty($_POST['usuario'])&& !empty($_POST['password'])){


    $records = $conn->prepare('SELECT id, usuario, password FROM users WHERE usuario=:usaurio');
    $records->bindparam(':usuario', $_POST['usuario']);
    $records->excecute();
    $results-> $records->fetch(PDO::FETCH_ASSOC);

    $message = '';
    if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){

        $_SESSION['user_id'] = $results['id'];
        header('Locationn: /menu.php' );


    }else {

        $message= 'Credenciales no existen';
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <title>Administrador de Sitio Web</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/bootstrap.min.css" />

</head>

<body>



    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>

            <div class="col-md-4">
                <br /><br /><br />


                <div class="card">
                    <div class="card-header">
                        login
                    </div>
                    <div class="card-body">
                        <form  method=" post">

                        <?php  if(!empty($message)):   ?>

                            <p><?= $message ?></p>                    

                            <?php endif; ?>

                            <div class="form-group">
                                <label for="exampleInputEmail1">usuario</label>
                                <input type="text" class="form-control" name="usuario" placeholder="Ingresar usuario">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">contraseña</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Ingresar Contraseña">
                            </div>


                            <button type="submit" value="ingresar" name="ingresar"
                                class="btn btn-primary">Ingresar</button>
                        </form>


                    </div>

                </div>


            </div>


        </div>
    </div>

</body>
</html>