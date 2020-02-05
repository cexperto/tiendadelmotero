<?php
/*
$dbHost = 'remotemysql.com';

$dbUsername = 'gu6EqlTj8p';

$dbPassword = 'sqYM6pwdQp';

$dbName = 'gu6EqlTj8p';*/
$dbHost = '186.155.17.192';

$dbUsername = 'ejxhyjxs_motos';

$dbPassword = 'Motero20171234';

$dbName = 'ejxhyjxs_motos';


//Conectamos y seleccionamos la base de datos

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {

die("Conexión fallida:". $db->connect_error);

}

?>
