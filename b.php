<?php
include('conexion.php');

$query = $db->query("SELECT marca, referencia, modelo, soat_b FROM preciomotos WHERE marca='$marca' AND referencia='$referencia' AND modelo='$modelo'");
$rowCount = $query->num_rows;
if($rowCount > 0)
{
    while($row = $query->fetch_assoc())
    {
    $s_b=$row['soat_b'];
    }
    $precioPorcentaje=(($s_b*$porcentaje)/100)+$s_b;
    $papeles="DE 2 A 5 MESES Y 29 DIAS";
    $insertar= "INSERT INTO clientes(marca_c,referencia_c,modelo_c,papeles,soat_c,precio_porcentaje,email_c,telefono_c)
                                values('$marca','$referencia','$modelo','$papeles','$s_b','$precioPorcentaje','$correo','$telefono')";
        if (mysqli_query($db, $insertar))
        {
            echo "
            ¡¡ FELICITACIONES !! pensando en tu beneficio te ofrecemos dos modalidades de pago<br><br>

            $s_b pago en menos de 24 horas<br>
            $precioPorcentaje pago en 30 dias<br>
            
            ";

        }
        else{
                echo "<script>alert('error al enviar');</script>";
                echo '<script> window.location="index.php"; </script>';
            }
}
?>