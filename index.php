<?php
include('conexion.php');
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style> 
            /* CSS style for Boxes  background-color: yellow; */ 
            .container { 
                display: inline-block; 
                width: 355px; 
                height: 800px; 
                margin: 6px; 
                background-color: #fff;
                border-style: solid;
                border-color: #e8e8e8;
                border-radius: 10px;
                border:2px solid #BEBEBE;
                cursor:pointer;
                min-height:45px;
                }
            } 
            .select
            {
                background-color:#efe0e0;
                background-color: #f8f8f8;
                width:300px;
                height:50px;
                color:#213f99;
                transition: 2.s ease all;
                z-index: 200;

            }
            .select.active{

            }
            /* .form-control
            {
                
                
            } */
            .disabled{color:#b6b6b6;}
            div{
                height:10px;

            }
            .espacio{
                height: 40px; 
            }
            .nota{
                height: 140px; 
            }
            .select i{
                font-size: 30px;
                margin-left:30px;
                color: black;

            }
        </style> 
<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
<script type="text/javascript" src="https://cdn.navdmp.com/req?v=9&amp;id=a88fec8955ca4c3e451ed986e09%7C0&amp;acc=58464&amp;tit=Compramos%2520tu%2520carro%2520f%25E1cil%252C%2520r%25E1pido%2520y%2520seguro%2520%257C%2520Carro123.com&amp;upd=1&amp;h1=COMPRAMOS%2520TU%2520CARRO&amp;url=https%253A%2F%2Fwww.carro123.com%2F" async=""></script>


<div class="container">
<div class="dropdown-menu"></div>
<form id="precio" class="px-4 py-3">
<div class="form-group"></div>
<center>
<h3>Ingresa los datos de tu moto</h3>
    <select name="marca" id="marca" class="form-control" >

        <option value="">MARCA</option>

            <?php
            include('marca.php');

            ?>
        </select>
        <div></div>

<select name="referencia" id="referencia" class="form-control" disabled>
    <option value="">REFERENCIA</option>
    <i class="fas fa-angle-down"></i>
</select>
<div></div>
<select name="modelo" id="modelo" class="form-control" disabled>
    <option value="">MODELO</option>
</select>
<div></div>
<select name="soat" id="soat" class="form-control" disabled>
    <option value="">VIGENCIA DE PAPELES</option>    
</select>
<div></div>
<input type="email" value="" name="correo" id="correo" placeholder="email" class="form-control" disabled>
<div></div>
<input type="text" value="" name="telefono" id="telefono" placeholder="numero de celular" class="form-control" disabled>
<div></div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" style="width:25px;height:25px;" disabled>

    <label class="form-check-label" for="exampleCheck1" style="width:285px;height:20px; padding:5px;">
    Estoy de acuerdo con los terminos y condiciones y politica de privacidad</label>
  </div>
  <div class="espacio"></div>
<input type="submit" value="QUIERO CONOCER EL PRECIO DE MI MOTO" id="enviar" name="enviar" class="form-control" style="
background-color:#ffcd00;
color: #213f99;
font-weight: bold;
" disabled>
<div id="res" style="width:300px;height:50px;"></div>

<div></div>
<div class="nota">
  nota: si tu moto no se encuentra en el listado o tienes
   alguna pregunta adicional diligencia el siguiente formulario 
   especificando marca y referencia de la moto, modelo y 
   vigencia de papeles y en menos de lo que canta un gallo 
   te responderemos
  </div>
  </form>
  <?php
  //include('formEnviarCorreo.php');
  ?>
<div></div>

  <form class="px-4 py-3" action="enviarCorreo.php" method="POST">
    <input type="text" value="" name="marcaU" id="marcaU" placeholder="marca" class="form-control" required>
    <div style="width:550px;height: 7px;"></div>
    <input type="text" value="" name="referenciaU" id="referenciaU" placeholder="referencia" class="form-control" required >
    <div style="width:550px;height: 7px;"></div>
    <input type="text" value="" name="modeloU" id="modeloU" placeholder="modelo" class="form-control" required>
    <label class="form-check-label" for="exampleCheck1"></label>
    <div style="width:550px;height: 7px;"></div>
    <select name="soatU" id="soatU" class="form-control" required>
        <option value="">vigencia de papeles</option>  
        <option value="a">DE 0 A 1 MES y 29 DIAS</option>
        <option value="b">DE 2 A 5 MESES Y 29 DIAS</option>
        <option value="c">DE 6 A 10 MESES Y 29 DIAS</option>
        <option value="d">DE 11 MESES A NUEVO</option>
    </select>
    <div></div>
    <input type="submit" value="Enviar" id="enviarU" name="enviarU" class="form-control" style="
   
    background-color: #ffcd00;
    font-weight: bold;
    color: #213f99;
    font-weight: bold;
    ">
    <div></div>
   <div id=res></div>
</form>



<!--                                                    /////////////////////////////////////////////////////////////////// -->

<div class="modal-body">
	        	<div id="cargapost"></div> <!-- campo para cargar resultado -->
	        </div>
<script>
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
    $("#myModal").modal();
    $.post("precio.php",$("#precio").serialize(),function(res){
        $("#cargapost").html(res);
    });
})
</script>
<!-- selects -->
<script>
    $(document).on('ready',function(){       
    $('#marca').click(function(){
        var marca = $(this).val();
        console.log(marca); 
        if(marca){
            document.getElementById("referencia").removeAttribute("disabled");
        }else{
            document.getElementById("referencia").setAttribute("disabled","");
        }
        
    });
});
//
$(document).on('ready',function(){       
    $('#referencia').click(function(){
        var referencia = $(this).val();
        console.log(referencia); 
        if(referencia){
            document.getElementById("modelo").removeAttribute("disabled");
        }else{
            document.getElementById("modelo").setAttribute("disabled","");
        }
        
    });
});
//
$(document).on('ready',function(){       
    $('#modelo').click(function(){
        var modelo = $(this).val();
        console.log(modelo); 
        if(modelo){
            document.getElementById("soat").removeAttribute("disabled");
        }else{
            document.getElementById("soat").setAttribute("disabled","");
        }
        
    });
});
//

//
//exampleCheck1
//
$(document).on('ready',function(){       
    $('#exampleCheck1').click(function(){
        var exampleCheck1 = $(this).val();
        console.log(exampleCheck1); 
        if(exampleCheck1){
            document.getElementById("enviar").removeAttribute("disabled");
        }else{
            document.getElementById("enviar").setAttribute("disabled","");
        }
        
    });
});
///
$(document).on('ready',function(){       
    $('#modeloU').click(function(){
        var modeloU = $(this).val();
        console.log(modeloU); 
        if(modeloU){
            document.getElementById("enviarU").removeAttribute("disabled");
        }else{
            document.getElementById("enviarU").setAttribute("disabled","");
        }
        
    });
});

</script>
<script src="marca.js"></script>
<script src="referencia.js"></script>
<script src="soat.js"></script>
