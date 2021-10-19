<?php

$conn = mysqli_connect('localhost', 'root', '', 'bdatos');

?>

<?php

$sql = "SELECT * from cliente";
$resultado = mysqli_query($conn, $sql);

while($mostrar=mysqli_fetch_assoc($resultado)){  
    $cliente[] = $mostrar;
   
}


?>