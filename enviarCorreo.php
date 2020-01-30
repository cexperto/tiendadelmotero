<?php
$mensaje="Datos de moto que no se encuentran registrados";
$destino="";//correo a donde se va enviar
$nombre =$_post['marcaU'];
$referencia =$_post['referenciaU'];
$modelo =$_post['modeloU'];
$soat=$_POST['soatU'];
$nombre=$_POST['nombreU'];
$email=$_POST['emailU'];
$telefono=$_POST['telefonoU'];
 $contenido="$mensaje: \n".."Marca: \n".$marca."\nReferencia: ".$referencia."\nModelo: ".
 $modelo."\nVigencia de papeles".$soat."\n Nombre: ".$nombre."\nEmail: ".$email."\ntelefono: .".$telefono;

 mail($detino,"Contacto desde la web",$contenido);
 header("Location:index.php");

?>
