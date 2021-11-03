<?php


  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /misitio');
  }
  require 'conexion.php';

  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, usuario, password FROM users WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario ']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    
   
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
                        Ingresar a Portal RapiTrans


                    </div>
                    <div class="card-body">
                        <form action="login.php" method="POST">
                            <span> <a href="admin.php">Registrarse </a></span>


                            <div class="form-group">
                                <label for="exampleInputEmail1">usuario</label>
                                <input type="text" class="form-control" name="usuario" placeholder="Ingresar usuario">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">contraseña</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Ingresar Contraseña">
                            </div>


                            <button type="submit" value="ingresar" name="ingresar" class="btn btn-primary">Crear
                                Usuario</button>
                        </form>


                    </div>

                </div>


            </div>


        </div>
    </div>

</body>

</html>