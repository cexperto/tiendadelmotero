<?php
/*$server="localhost";
$user="root";
$pass="";
$bd="motos";

$conexion=mysqli_connect($server,$user,$pass,$bd);
if($conexion){
    //echo "exito";
}else{
    echo "pailas";
}*/
$dbHost = 'localhost';

$dbUsername = 'root';

$dbPassword = '';

$dbName = 'motos';

//Conectamos y seleccionamos la base de datos

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {

die("Conexión fallida:". $db->connect_error);

}

?>