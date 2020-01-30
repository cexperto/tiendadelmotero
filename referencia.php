<?php
include('conexion.php');

$marca=$_POST['marca'];


$consultaRef="SELECT DISTINCT marca, referencia, modelo FROM preciomotos WHERE marca='$marca'";

$resultado=mysqli_query($conexion,$consultaRef);
$cadena_r="<select name='referencia' id='referencia'>";

while($ver=mysqli_fetch_row($resultado)){
    $cadena_r=$cadena_r.'<option value='.$ver[1].'>'.utf8_encode($ver[1]).'</option>';
    
}
echo $cadena_r;

echo "
<script src=\"modelo.js\">

</script>

";

//echo $cadena_m;

/*

$consulta_r="SELECT DISTINCT marca, referencia, modelo FROM preciomotos WHERE marca='$cadena'";

$resultado_r=mysqli_query($conexion,$consulta_r);
$cadena_r="<select name='referencia' id='referencia'>";

while($ver_r=mysqli_fetch_row($resultado_r)){
    $cadena_r=$cadena_r.'<option value='.$ver_r[2].'>'.utf8_encode($ver_r[2]).'jyg'.'</option>';
    
}
echo $cadena_r;   
*/





?>

