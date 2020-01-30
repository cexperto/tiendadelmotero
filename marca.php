<?php
$query = $db->query("SELECT DISTINCT marca FROM preciomotos ");

$rowCount = $query->num_rows;

if($rowCount > 0){

while($row = $query->fetch_assoc()){
    $a=$row['marca'];

echo "<option value=\"$a\">$a</option>";
}

}else{

echo "
<option value=\"\">marca no disponible</option>
";

}

?>