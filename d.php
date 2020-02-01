<?php
include('conexion.php');
$query = $db->query("SELECT marca, referencia, modelo, soat_d FROM preciomotos WHERE marca='$marca' AND referencia='$referencia' AND modelo='$modelo'");
$rowCount = $query->num_rows;
if($rowCount > 0)
{
    while($row = $query->fetch_assoc())
    {
    $s_d=$row['soat_d'];
    }
    $precioPorcentaje=(($s_d*$porcentaje)/100)+$s_d;
    $papeles="DE 11 MESES A NUEVO";
    $insertar= "INSERT INTO clientes(marca_c,referencia_c,modelo_c,papeles,soat_c,precio_porcentaje,email_c,telefono_c)
                                values('$marca','$referencia','$modelo','$papeles','$s_d','$precioPorcentaje','$correo','$telefono')";
        if (mysqli_query($db, $insertar))
        {
            echo "<font color=\"white\">
            <h3>¡¡FELICITACIONES!!</h3><h4>pensando en tu beneficio te ofrecemos dos modalidades de pago<br><br>

            $s_d pago en menos de 24 horas<br>
            $precioPorcentaje pago en 30 dias<br></h4></font>
            
            ";

        }
        else{
                echo "<script>alert('error al enviar');</script>";
                echo '<script> window.location="index.php"; </script>';
            }
}
?>
