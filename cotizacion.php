<?php
include('conexion.php');
?>
<!Doctype html>
<head>
<title>formulario</title>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

<select name="marca" id="marca">
    <?php
    $consulta=mysqli_query($conexion,"SELECT DISTINCT marca FROM preciomotos ");
    while($sql=mysqli_fetch_array($consulta))
    {
        $marca=$sql['marca'];
        echo "<option value=\"$marca\">$marca</option>";  
    }
        ?>
</select>
<!--
    <script src="referencia.js"></script>
-->


</body>

<script type="text/javascript">

</script>

<div id="referencia"></div>

<?php
include('consultas.php');

?>
<div id="modelo"></div>

<!--<select name="modelo" id="modelo">
    <?php /*    
    $consultar_r=mysqli_query($conexion,"SELECT DISTINCT marca, referencia FROM preciomotos");
    while($ref=mysqli_fetch_array($consultar_r))
    {
        $referencia=$ref['referencia'];
        echo "<option value=\"$referencia\">$referencia.</option>";  
    }*/
        ?>
</select>-->