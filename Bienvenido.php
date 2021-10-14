<?php
  session_start();

  require 'conexion.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, usuario, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
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
                        Bienvenido al portal RapiTrans


                    </div>
                    <div class="card-body">
                        <form method="POST">

                            <?php if(!empty($user)): ?>
                            <br> Welcome. <?= $user['usuario']; ?>
                            <br>You are Successfully Logged In

                            <?php else: ?>



                            <a href="menu.php">Menu Principal</a>
                            <?php endif; ?>


                        </form>


                    </div>

                </div>


            </div>


        </div>
    </div>

</body>

</html>