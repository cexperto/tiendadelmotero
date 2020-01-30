<?php
include('conexion.php');
echo $referencia=$_POST['referencia'];

$modelo="SELECT DISTINCT marca, referencia, modelo FROM preciomotos WHERE referencia='$referencia'";

$resultado=mysqli_query($conexion,$modelo);
$cadena="<select name='modelo' id='modelo'>";

while($ver=mysqli_fetch_row($resultado)){
    $cadena=$cadena.'<option value='.$ver[2].'>'.utf8_encode($ver[2]).'</option>';
}
echo $cadena."</select>";
?>

