<?php
include('conexion.php');

$query = $db->query("SELECT marca, referencia, modelo, soat_a FROM preciomotos WHERE marca='$marca' AND referencia='$referencia' AND modelo='$modelo'");
$rowCount = $query->num_rows;
if($rowCount > 0)
{
    while($row = $query->fetch_assoc())
    {
    $s_a=$row['soat_a'];
    }
    $precioPorcentaje=(($s_a*$porcentaje)/100)+$s_a;
    $papeles="DE 0 A 1 MES y 29 DIAS";
    $insertar= "INSERT INTO clientes(marca_c,referencia_c,modelo_c,papeles,soat_c,precio_porcentaje,email_c,telefono_c)
                                values('$marca','$referencia','$modelo','$papeles','$s_a','$precioPorcentaje','$correo','$telefono')";
        if (mysqli_query($db, $insertar))
        {
            echo "<font color=\"black\">
            <h3>¡¡FELICITACIONES!!</h3><h4>pensando en tu beneficio te ofrecemos dos modalidades de pago<br><br>

            $ $s_a pago en menos de 24 horas<br>
            $ $precioPorcentaje pago en 30 dias<br></h4></font>
            
            ";

        }
        else{
                echo "<script>alert('error al enviar');</script>";
                echo '<script> window.location="index.php"; </script>';
            }
}
?>
