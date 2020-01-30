<style>
a:link, a:visited {
  background-color: #5DACCD;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: blue;
}
</style>
<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
       <!-- <th style="width:30px; background-color: #5DACCD; color:#fff">Id</th>-->
            <th style="width:120px; background-color: #5DACCD; color:#fff">marca</th>
            <th style="width:140px; background-color: #5DACCD; color:#fff">referencia</th>
            <th style="width:140px; background-color: #5DACCD; color:#fff">modelo</th>
            <th style="width:200px; background-color: #5DACCD; color:#fff">vigencia de papeles</th>                     
            <th style="width:120px; background-color: #5DACCD; color:#fff">precio</th>                     
            <th style="width:120px; background-color: #5DACCD; color:#fff">pago en 30 dias</th>                     
            <th style="width:250px; background-color: #5DACCD; color:#fff">email</th>                     
            <th style="width:150px; background-color: #5DACCD; color:#fff">telefono</th>                     
         
        </tr>
    </thead>
    <tbody>
    <?php 

include('conexion.php');

$query = $db->query("SELECT marca_c,referencia_c,modelo_c,papeles,soat_c,precio_porcentaje,email_c,telefono_c FROM clientes ");
$rowCount = $query->num_rows;
if($rowCount > 0)
{
    while($row = $query->fetch_assoc())
    {
           
    echo "<tr>
    <td>".$marca=$row['marca_c']."</td>
    <td>".$referencia=$row['referencia_c']."</td>
    <td>".$modelo=$row['modelo_c']."</td>
    <td>".$papeles=$row['papeles']."</td>
    <td>".$soat=$row['soat_c']."</td>
    <td>".$precioporcentaje=$row['precio_porcentaje']."</td>
    <td>".$email=$row['email_c']."</td>
    <td>".$telefono=$row['telefono_c']."</td>
    </tr>
    ";
    }
}
?>

    </tbody>
</table> 
<a href="excel.php">generar archivo excel</a>
