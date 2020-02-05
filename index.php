<?php
include('conexion.php');
?>
<head>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>

<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
<script type="text/javascript" src="https://cdn.navdmp.com/req?v=9&amp;id=a88fec8955ca4c3e451ed986e09%7C0&amp;acc=58464&amp;tit=Compramos%2520tu%2520carro%2520f%25E1cil%252C%2520r%25E1pido%2520y%2520seguro%2520%257C%2520Carro123.com&amp;upd=1&amp;h1=COMPRAMOS%2520TU%2520CARRO&amp;url=https%253A%2F%2Fwww.carro123.com%2F" async=""></script>

<body background="img/e91a9b7c-62d3-4d99-b3d2-28d9631a352d.jpg" style="background-repeat: no-repeat;">
<div class="container-fluid">
  <br>
  <div class="row">
    <div class="col-sm-5 col-md-6" ><center><!--inica comoluna 1-->
    <h3><p style="color:#fff";>
    COMPRAMOS TU MOTO
    </p></h3>

    <!--termina columna-->
    </div>


    <!--columna 2-->
    <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0"><!--inica comoluna 2-->
    <center>
    <div id="contenedor" class="container">
    <form id="precio" class="px-4 py-3" action="conocerPrecio.php" method="POST">
<div class="form-group"></div>

<h3>Ingresa los datos de tu moto</h3>
  <div id="mm" class="borde-caja"> 
     <select name="marca" id="marca" class="form-control" onclick="myFunctionM()">
        <option value="">MARCA</option>
            <?php include('marca.php');?>
    </select>
    </div>
        <div id="rmarca" ></div>
        
<div id="mr" class="borde-caja">
    <select name="referencia" id="referencia" class="form-control" onclick="myFunctionre()">
        <option value="">REFERENCIA</option>
    </select>
</div>
<!-- resultado del js-->
<div id="rreferencia"></div> 
<!--js-->

<div id="mo" class="borde-caja"> 
<select name="modelo" id="modelo" class="form-control" onclick="myFunctionMo()">
    <option value="">MODELO</option>
</select>
</div>
<div id="rmodelo"></div>

<div id="ms" class="borde-caja"> 
<select name="soat" id="soat" class="form-control" onclick="myFunctionso()">
    <option value="">VIGENCIA DE PAPELES</option>    
</select>
</div>
<div id="rsoat"></div>

<div id="mco" class="borde-caja"> 
<input type="email" value="" name="correo" id="correo" placeholder="EMAIL" class="form-control" onclick="myFunctionco()"></div>
<div id="rcorreo">
</div>
<div id="rcorreo" >

<div id="mt" class="borde-caja"> 
<input type="text" value="" name="telefono" id="telefono" placeholder="NUMERO DE CELULAR" class="form-control" onclick="myFunctiontel()" ></div>

<div id="rtelefono" class="espacio"></div>

 
<div class="form-check">

    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunctionck()">
    <label class="form-check-label" for="exampleCheck1" style="width:285px;height:20px; padding:5px;">
    Estoy de acuerdo con los terminos y condiciones y politica de privacidad</label>
  </div>
  <div class="espacio"></div>
  <div class="espacio"></div>
  <div class="espacio"></div>
  <div class="espacio"></div>
  <div class="espacio"></div>
  <div class="espacio"></div>
  <div class="espacio"></div>
 <div id="rchek"></div>

<input type="submit" value="QUIERO CONOCER EL PRECIO DE MI MOTO" id="enviar" name="enviar" class="form-control boton" 
style="background-color:#ffcd00;color: #213f99;font-weight: bold;"><div></div>

<div id="" class="resultado" ALIGN="justify" style="
    padding-top: 5px;
    padding-right: 20px;
    padding-bottom: 5px;
    padding-left: 20px;
    font-family:Arial;
    font-weigth:normal;

"></form>
<h5><font color="White">

   Nota: <br>Si tu moto no se encuentra en el listado o tienes
   alguna pregunta adicional diligencia el siguiente formulario 
   especificando marca y referencia de la moto, modelo y 
   vigencia de papeles y en menos de lo que canta un gallo 
   te responderemos</h5></font>

</div>
<div class="espacio"></div>



<div>

</div>
    <!--                                                                termina columna 2-->

    </div> 

  </div>
</div>

</body>

<script src="permitir.js"></script>
<script src="activarcampos.js"></script>
<script src="activarcolores.js"></script>
<script src="validaciones.js"></script>
<script src="marca.js"></script>
<script src="referencia.js"></script>
<script src="soat.js"></script>
