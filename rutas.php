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
        <a class="nav-item nav-link active" href="clientes.php" role="button">Clientes</a>
            <a class="nav-item nav-link active" href="pedidos.php" role="button">Pedidos</a>
            <a class="nav-item nav-link active" href="rutas.php" role="button">Rutas</a>
            <a class="nav-item nav-link active" href="estadisticas.php" role="button">Estadisticas</a>
            <a class="nav-item nav-link active" href="estadoPedido.php" role="button">Estado de Pedido</a>
        </div>

    </nav>

    <div class="container">
        <div class="row">

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">Rutas</h1>
                    <p class="lead">RapiTrans</p>
                    <hr class="my-2">
                    <p>Empresa se dedica al transporte de productos y mensajería de oficina a sus clientes</p>
                    <p class="lead">
                        
                    </p>
                </div>
            </div>
        </div>
        <div>
        <p>MAPA DE GOOGLE</p>
            <p class="lead"> 
        </div>
        <div class="card">
        <img src="img_avatar.png" alt="Avatar" style="width:100%">
        <div class="container">
            <div id="map"></div>
            <!--INICIA SCRIPT DE MAPA DE GOOGLE-->
            <script type="text/javascript">
            function iniciarMap() {
                var coord = {
                    lat: 14.6343538,
                    lng: -90.5770483
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 18,
                    center: coord
                });
                var marker = new google.maps.Marker({
                    position: coord,
                    map: map
                });
            }
            </script>
            <!--TERMINA SCRIPT DE MAPA DE GOOGLE-->
        </div>
        </div>
    </div>
</body>
<script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAF7dUHdwpuUWaXYLSH9A4kKJiNAICljbY&callback=iniciarMap">
            </script>

</html>