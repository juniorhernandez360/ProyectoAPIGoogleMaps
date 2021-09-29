<?php  
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="bdatos";

$conn =mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){

    die("No hay conexion".mysqli_connect_error());

    $nombre =$_POST["usuario"];
    $pass =$_POST["pass"];

    if(isset($_POST["ingresar"]))

    $query =mysqli_query($conn, "SELECT * FROM login WHERE usuario= '".$nombre."' and password= '".$pass."'" );
    $nr = mysqli_num_rows($query);

    $sql = "SELECT * FROM `login`;";


    if($nr ==1 ){

       // header("Location: menu.php");
        echo"Bienvenido:" .$nombre;

    }
    else if($nr == 0){

        echo"No ingreso:";

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
                        <form action="menu.php" method="post">

                            <div class="form-group">
                                <label for="exampleInputEmail1">usuario</label>
                                <input type="text" class="form-control" name="usuario" placeholder="Ingresar usuario">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">contraseña</label>
                                <input type="password" class="form-control" name="pass"
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