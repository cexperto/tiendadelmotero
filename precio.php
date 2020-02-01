<?php
error_reporting(0);
include('conexion.php');
$marca=$_POST['marca'];
$referencia=$_POST['referencia'];
$modelo=$_POST['modelo'];
$soat=$_POST['soat'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$porcentaje=4;

if($marca && $referencia && $modelo && $soat && $correo && $telefono)
{
    if($soat=='a')
    {
       include('a.php');

    }
    if($soat=='b')
    {
       include('b.php');

    }
    if($soat=='c')
    {
       include('c.php');

    }
    if($soat=='d')
    {
       include('d.php');

    }
}
else{
   //echo "<script>alert('todos los campos deben estar completos');</script>";
  /*  echo '<script src="validaciones.js"></script>';  */
  
}
?>
