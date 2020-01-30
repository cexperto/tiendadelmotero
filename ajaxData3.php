<?php
include('conexion.php');

if(isset($_POST['soat']) && !empty($_POST['referencia'])){
    //echo $marca=$_POST['marca'];
 $m=$_POST['soat'];
 //“SELECT * FROM municipios WHERE id_provincia = “.$_POST[‘id_provincia’].” ORDER BY nombre ASC”
 $query = $db->query("SELECT DISTINCT marca, referencia, modelo,  FROM preciomotos WHERE referencia='$m'");
 $rowCount = $query->num_rows;
 if($rowCount > 0)
 {
 
     echo "<option value=\"\">MODELO</option>";
     while($row = $query->fetch_assoc()){
     $b=$row['modelo'];
     echo "<option value=\"$b\">$b</option>jhhh";
  }
 
 }else{
 
 echo "<option value=\"\">no hay referencia</option>";
 //‘<option value=””>Municipio no disponible</option>’;
 
 }
 
 }
 

?>