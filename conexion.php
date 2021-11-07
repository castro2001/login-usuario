<?php 
include("config.php");
// crear coneccion
$conexion = new mysqli($server,$user,$password,$bd);
// ahora hacemos una condicion para ver si se conecto a la base de datos
if (mysqli_connect_errno()) {
echo " no conectado, mysqli_connect_errno()" ;
exit();
}
?>

<!-- despues usamos include para incluir config.php despues creamos una variable conexion donde usamo new  mysqli(aqui vamos a poner los datos de conexxion que escribimos en config)  -->