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

<body style="background-color:#001d60;"
<div class="container-fluid">
  <br>
  <div class="row">
    <div class="col-sm-5 col-md-6 orientacion2" ><!--inica comoluna 1-->
    <div align="right">
     <div class="contenedorVinculo">
        <a href="index.php" style="color:#FFF;">
         Precio inicial de tu moto en linea</a><font color="#FFF"> ><img src="img/numer2.png" style="font-size:80%;" alt=""> agenda revision gratuita</font>
</div>
    <div class="containerPrecio" >
    <h3><p style="color:#fff";></p>
    </h3><div style="text-align:center;"> 
    <?php
    include('Resultado-precio.php');
    ?></div>
    
</div>
</div>
    

    <!--termina columna-->
    </div>


    <!--columna 2-->
    <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0 orientacion"><!--inica comoluna 2-->
    <center><br>
    <div class="container3">
        
    <form id="" class="px-4 py-3" action="" method="POST">
<div class="form-group"></div>
<div id="" class="resultadoPrecio">
    <h4>Ahora, agenda revision gratuita</h4>
<h5>
  el precio inicial corresponde a un vehiculo en condiciones optimas. No constituye oferta de compra. Esta se hara una vez que se verifique el estado del vehiculo
.La oferta podra no ser igual al precio mostrado. No compramos vehiculos de placa balnca, blindados, clasicos, con leasing, importados directamente,
con perdidas totales o modificados estructural o mecanicamente.</h5>

</div>
<h3>Ingresa los datos de tu moto</h3>
  <div id="mm" class="borde-caja"> 
     <select name="ciudad" id="ciudad" class="form-control">
        <option value="">Selecciona tu Ciudad</option>
        <option value="">Bogota</option>
        <option value="">Medellin</option>
        <option value="">Cartagena</option>
            
    </select>
    </div>
        <div id="rmarca" ></div>
        
<div id="mr" class="borde-caja">
    <select name="referencia" id="referencia" class="form-control" >
        <option value="">Centro de etencion</option>
        <option value="">Centro 1</option>
        <option value="">Centro 2</option>
    </select>
</div>
<!-- resultado del js-->
<div id="rreferencia"></div> 
<!--js-->

<div id="mo" class="borde-caja"> 
<select name="modelo" id="modelo" class="form-control"  >
    <option value="">Selecciona una cita disponibñe</option>
    <option value="">cita disponible 1</option>
    <option value="">cita disponible 2</option>
</select>
</div>
<div id="rmodelo"></div>
<div id="" class="borde-caja"> 
<select name="soat" id="soat" class="form-control" >
    <option value="">Como nos conociste</option>    
    <option value="">Amigos</option>    
    <option value="">Familiares</option>    
    <option value="">Redes sociales</option>    
</select>
</div>
<div id="rmodelo"></div>

<div id="mco" class="borde-caja"> 
<input type="text" value="" name="nombre" id="nombre" placeholder="Ingresa tu nmbre y apellido" class="form-control"></div>
<div id="rmodelo"></div>

<input type="submit" value="AGENDAR CITA" id="enviar" name="enviar" class="form-control boton" 
style="background-color:#ffcd00;color: #213f99;font-weight: bold;">

</div>





<div>

</div>


    <!--                                                              termina columna 2-->

    </div> 

  </div>
</div>

</body>


