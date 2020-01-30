<?php
include('conexion.php');

if(isset($_POST['marca']) && !empty($_POST['marca'])){
   //echo $marca=$_POST['marca'];
$marca=$_POST['marca'];
//“SELECT * FROM municipios WHERE id_provincia = “.$_POST[‘id_provincia’].” ORDER BY nombre ASC”
$query = $db->query("SELECT DISTINCT marca, referencia FROM preciomotos WHERE marca='$marca'");
$rowCount = $query->num_rows;
if($rowCount > 0)
{

    echo "<option value=\"\">REFERENCIA</option>";
    while($row = $query->fetch_assoc()){
    $b=$row['referencia'];
    echo "<option value=\"$b\">$b</option>";
 }

}else{

echo "<option value=\"\">no hay referencia</option>";
//‘<option value=””>Municipio no disponible</option>’;

}

}


?>