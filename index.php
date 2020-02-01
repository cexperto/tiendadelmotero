<?php
include('conexion.php');
?>
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

<center>
<div class="container">
<div class="dropdown-menu"></div>
<form id="precio" class="px-4 py-3" action="" method="POST">
<div class="form-group"></div>
<center>
<h3>Ingresa los datos de tu moto</h3>
  <div id="mm" class="borde-caja"> 
     <select name="marca" id="marca" class="form-control" onclick="myFunctionM()">
        <option value="">MARCA</option>
            <?php include('marca.php');?>
    </select>
    </div>
        <div id="rmarca" ></div>
        
<div id="mr" class="borde-caja">
    <select name="referencia" id="referencia" class="form-control" onclick="myFunctionre()" disabled>
        <option value="">REFERENCIA</option>
    </select>
</div>
<!-- resultado del js-->
<div id="rreferencia"></div> 
<!--js-->

<div id="mo" class="borde-caja"> 
<select name="modelo" id="modelo" class="form-control" onclick="myFunctionMo()" disabled>
    <option value="">MODELO</option>
</select>
</div>
<div id="rmodelo"></div>

<div id="ms" class="borde-caja"> 
<select name="soat" id="soat" class="form-control" onclick="myFunctionso()" disabled>
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

<div id="res" class="resultado"></div>
<div class="nota"><br>
<h4>
  nota: si tu moto no se encuentra en el listado o tienes
   alguna pregunta adicional diligencia el siguiente formulario 
   especificando marca y referencia de la moto, modelo y 
   vigencia de papeles y en menos de lo que canta un gallo 
   te responderemos</h4>
  </div>
  </form>
  <?php
  //include('formEnviarCorreo.php');
  ?>
<div></div>

  


<!--                                                    /////////////////////////////////////////////////////////////////// -->

<div class="modal-body">
	        	<div id="cargapost"></div> <!-- campo para cargar resultado -->
	        </div>
<script type="text/javascript">
// enviar formulario
    $(document).on('ready',function(){       
    $('#enviar').click(function(){
        var url = "precio.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: $("#precio").serialize(), 
           success: function(data)             
           {
             $('#res').html(data);               
           }
       });
    });
});
  
</script>

<script>
$(document).on("submit","#precio",function(e){
    e.preventDefault();
    /* $("#myModal").modal(); */
    $.post("precio.php",$("#precio").serialize(),function(res){
        $("#res").html(res);
    });
})
</script>
<!-- selects -->
<script>
   
</script>
<script src="activarcampos.js"></script>
<script src="activarcolores.js"></script>

<script src="validaciones.js"></script>
<script src="marca.js"></script>
<script src="referencia.js"></script>
<script src="soat.js"></script>
